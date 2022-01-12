<?php
@ini_set('display_errors',false);
@ini_set('html_errors',false);
@ini_set('error_reporting',E_ALL ^ E_WARNING ^ E_NOTICE);
if(@$_SERVER['REMOTE_ADDR'] != ""){exit;}
define('gamepl',true);
define('ROOT_DIR',dirname(__file__));
include_once(ROOT_DIR.'/engine/data/conf.php');
include_once(ROOT_DIR.'/engine/function.php');
include_once(ROOT_DIR.'/engine/classes/tpl.class.php');
include_once(ROOT_DIR.'/engine/classes/mysql.class.php');
include_once(ROOT_DIR.'/engine/classes/ssh2.class.php');
include_once(ROOT_DIR.'/engine/classes/lgsl.class.php');
include_once(ROOT_DIR.'/engine/classes/MinecraftQuery.class.php');
include_once(ROOT_DIR.'/langs/'.$conf['lang'].'.php');
include_once(ROOT_DIR.'/engine/classes/mail.class.php');
$m = new Memcache;
$m->connect($conf['m_ip'],$conf['m_port']);
$sql = $db->query('SELECT * FROM tabl3 order by id');
while ($box = $db->get_row($sql)) {
	//пытаемся подключиться к машине с серверами, запрос длится 2с
	if ($ssh->login(decod($box['p3']), decod($box['p4']), decod($box['p1']), decod($box['p2']))){
		//соединение открыто на 180 секунд, пытаемся уложиться с одной машиной, а то придется все по новой
		$sql2 = $db->query('SELECT * FROM tabl2 where p3="'.cod($box['id']).'" order by id');
		while ($server = $db->get_row($sql2)) {
			//проверка просрочен ли сервер
			if(decod($server['p8']) < time()) {
				if(decod($server['p12']) == "1"){
					//выключаем сервер если включен
					$m->delete('mon_server_'.$server['id']);//удаляем данные от гаджета
					$ssh->exec_cmd("ps -ef | grep SCREEN | grep -v grep | grep server_".$server['id']." | awk '{ print $2}'");
					$pid = $ssh->get_output();
					$pid = explode("\n",$pid);
					$ssh->exec_cmd("kill -9 ".$pid['0'].";screen -wipe;");//убиваем процесс
					$db->query( "UPDATE tabl2 set p12='".cod('2')."' where id='".$server['id']."'" );
					//сервер выключен
				}elseif(decod($server['p12']) == "2"){
					//сервер выключен, проверяем прошло ли 3 дня
					if(decod($row['p8']) + 3600 * 24 * 3 < time()){
						//срок закончился и начинаем чистку
						//удаляем бэкапы от сервера
                    	$sql3 = $db->query('SELECT * FROM tabl35 where p1="'.cod($server['id']).'"');
                    	while ($row = $db->get_row($sql3)) {
							$ssh->exec_cmd("cd /host/".decod($server['p4'])."/;screen -dmS del rm ".decod($row['p2']).".zip;");
                    	}
						$db->query('delete from tabl35 where p1="'.cod($server['id']).'"');
						//удаляем сам сервер к чертям через screen, не будет занимать серверное время
						$ssh->exec_cmd('cd /host/'.decod($server['p4']).'/;screen -dmS del rm -R '.$server['id'].';userdel s'.$server['id'].';');
						//удаление конфига от fast dl
						$ssh->exec_cmd('cd /etc/apache2/fastdl/;rm '.$server['id'].'.conf;');
						//удаляем сервер из бд и чистим за ним ее
						$db->query("delete from tabl2 where id='".$server['id']."'");
						$db->query("delete from tabl19 where p2='".cod($server['id'])."'");
						$db->query("delete from tabl5 where p1='".cod($server['id'])."'");
						$db->query("delete from tabl8 where p4='".cod($server['id'])."'");
						$db->query("delete from tabl14 where p2='".cod($server['id'])."'");
						//удаляем юзера от ftp
						$dbftp = mysql_connect($box['p1'],$box['p8'],$box['p9']);
						mysql_select_db($box['p10'],$dbftp);
						mysql_query("delete from ftpd where user='s".$server['id']."'");
						@mysql_close($dbftp);
					}
				}
			}else{
				//сервер не просрочен, выполняем его анализ
				if(decod($server['p12']) == "1"){//включен
					//найденм его процессы
					$pid_1 = "ps -ef | grep SCREEN | grep -v grep | grep server_".$server['id']." | awk '{ print $2}'";
					$pid_2 = "ps -ef | grep SCREEN | grep -v grep | grep server_cpu_".$server['id']." | awk '{ print $2}'";
					if(decod($server['p10']) == "css"||decod($server['p10']) == "csgo"||decod($server['p10']) == "tf2"||decod($server['p10']) == "dods"||decod($server['p10']) == "l4d"){
						$pid_3 = "ps -ef | grep srcds_linux  | grep -v grep | grep -v sh | grep s".$server['id']." | awk '{ print $2}'";
					}
					if(decod($server['p10']) == "cssold"){
						$pid_3 = "ps -ef | grep srcds_i686 | grep -v grep | grep -v sh | grep s".$server['id']." | awk '{ print $2}'";
					}
					if(decod($server['p10']) == "cs"){
						$pid_3 = "ps -ef | grep hlds_i686 | grep -v grep | grep -v sh | grep s".$server['id']." | awk '{ print $2}'";
					}
					if(decod($server['p10']) == "mc"){
						$pid_3 = "ps -ef | grep java | grep -v grep | grep -v sh | grep s".$server['id']." | awk '{ print $2}'";
					}
					$ssh->exec_cmd($pid_1);
					$pid_1 = $ssh->get_output();
					$ssh->exec_cmd($pid_2);
					$pid_2 = $ssh->get_output();
					$ssh->exec_cmd($pid_3);
					$pid_3 = $ssh->get_output();
					$pid_1 = explode("\n",$pid_1);
					$pid_2 = explode("\n",$pid_2);
					$pid_3 = explode("\n",$pid_3);
					$pid_1 = $pid_1['0'];
					$pid_2 = $pid_2['0'];
					if(decod($server['p10']) == "mc"){
						$pid_3 = $pid_3['1'];
					}else{
						$pid_3 = $pid_3['0'];
					}
					if($pid_2==""){//не нашли процесс cpulimit
						if(decod($server['p10']) == "samp"){
							$cpu = decod($server['p5'])/100*$conf['cpu_'.decod($server['p10'])];
						}else{
							$cpu = decod($server['p5'])*$conf['cpu_'.decod($server['p10'])];
						}
						$cpu2 = $cpu/100;
						if($cpu2 > 1){
							$cpu1 = explode(".",$cpu2);
							$cpu3 = $cpu/$cpu1;
							$cpu3 = explode(".",$cpu3);
							$cpu = $cpu3[1].'x'.$cpu1;
						}
						$ssh->exec_cmd('screen -dmS server_cpu_'.$server['id'].' cpulimit -v -z -p '.$pid_3.' -l '.$cpu.';');
					}
					if($pid_1==""){//не нашли процесс сервера
						$ssh->exec_cmd("kill -9 ".$pid_2.";kill -9 ".$pid_3.";screen -wipe;");//убиваем процессы
						$db->query( "UPDATE tabl2 set p12='".cod('2')."' where id='".$server['id']."'" );
					}else{
						//мониторим его
						include(ROOT_DIR.'/engine/modules/games/'.decod($server['p10']).'/mon.php');
					}
				}else{
					$m->delete('mon_server_'.$server['id']);//удаляем данные от гаджета
					if(decod($server['p12']) != "2"){
						if(decod($server['p12']) == "3"){$pid="install";}
						if(decod($server['p12']) == "4"){$pid="update";}
						if(decod($server['p12']) == "5"){$pid="reinstall";}
						$pid = "ps -ef | grep SCREEN | grep -v grep | grep ".$pid."_".$server['id']." | awk '{ print $2}'";
						$ssh->exec_cmd($pid);//ищем sreen
						$pid = $ssh->get_output();
						$pid = explode("\n",$pid);
						if($pid1['0']==""){
							//если не нашли процесс, то выставим права на сервер и сменим его статус
							$ssh->exec_cmd("cd /host/".decod($server['p4'])."/;chown -R s".$server['id'].":s".$server['id']." ".$server['id'].";chmod -R 777 ".$server['id'].";");
							$db->query( "UPDATE tabl2 set p12='".cod('2')."' where id='".$server['id']."'" );
						}
					}
				}
			}
		}
		$ssh->disconnect();
	}
}
$tpl->global_clear ();
$db->close ();
$m->close();
?>