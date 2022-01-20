<?php
$fp = @fopen("/tmp/inputfile.txt", "r");
if ($fp) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($fp)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($fp);
}
?>
<?php
	$name = 'Юрий';
?>