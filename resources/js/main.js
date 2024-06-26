var header = '<div>\n' +
	'  <div class="header-dark">\n' +
	'    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">\n' +
	'      <div class="container">\n' +
	'        <a class="navbar-brand" href="#">\n' +
	'          Scarfaces\n' +
	'        </a>\n' +
	'        <div class="collapse navbar-collapse" id="navcol-1">\n' +
	'          <ul class="nav navbar-nav">\n' +
	'            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li>\n' +
	'            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>\n' +
	'              <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>\n' +
	'            </li>\n' +
	'          </ul>\n' +
	'          <form class="form-inline mr-auto" target="_self">\n' +
	'            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field">\n' +
	'            </div>\n' +
	'          </form>\n' +
	'          <div id="profile_content"> </div>\n' +
	'        </div>\n' +
	'      </div>\n' +
	'    </nav>\n' +
	'  </div>\n' +
	'</div>'

function login_init() {
	console.log('login_init()')
	if(is_authorized()) {
		open_page("index.html")
		return false
	}
	
	var login_button = document.getElementById('login_button_accept');
	var user_email = document.getElementById('login_input_email');
	var user_password = document.getElementById('login_input_password');
	
	login_button.addEventListener('click', try_login);
	add_header()
}
function profile_init() {
	console.log('profile_init()')
	add_header()
}
function profile_edit_init() {
	if(is_authorized()) {
		console.log('profile_edit_init()')
		add_header()
	} else {
		open_page("login.html")
	}
}
function init_default(){
	add_header()
}

function add_header() {
	console.log('try add header')
	let content = document.getElementById('header_content');
	if(content != null) {
		content.insertAdjacentHTML('beforeend', header);
	}
	const profile_content = document.getElementById('profile_content');
	if(profile_content != null) {
		if( is_authorized() ) {
			profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="quit">Выйти</a></span>');
		} else {
			profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="auth">Авторизоваться</a></span>');
			profile_content.insertAdjacentHTML('beforeend', '<a class="btn btn-light action-button" role="button" href="#" id="register">Зарегистрироваться</a>');
		}
		let quit = document.getElementById('quit');
		let auth = document.getElementById('auth');
		let register = document.getElementById('register');
		if(quit != null) {
			quit.addEventListener('click', function (){
				localStorage.removeItem('correct_user_email')
				localStorage.removeItem('correct_user_password')
				open_page('index.html')
			});
		}
		if(auth != null) {
			auth.addEventListener('click', function (){
				open_page('login.html')
			});
		}
		if(register != null) {
			register.addEventListener('click', function (){
				open_page('register.html')
			});
		}
	}
}

function init_user(page) {
	console.log('init_user()')
	console.log("AUTH: " + is_authorized())
	if( is_authorized() ) {
		if(page === "account") {
			open_page('profile.html')
		} else {
			open_page('account/profile.html')
		}
	} else {
		if(page === "account") {
			open_page('login.html')
		} else {
			open_page('account/login.html')
		}
	}
}

function try_register() {
	console.log('try_register()')
	let user_email = document.getElementById('registration_input_email');
	let user_password = document.getElementById('registration_input_password');
	let user_password_copy = document.getElementById('registration_input_password_copy');
	
	localStorage.setItem('correct_user_email', user_email.value);
	localStorage.setItem('correct_user_password', user_password.value);
	localStorage.setItem('user_email', null);
	localStorage.setItem('user_password', null);
	
	var input = $('.validate-input .input100');
	var check = true;
	
	if(user_password_copy.value !== user_password.value) {
		console.log('Пароли не совпадают')
		alert('Пароли не совпадают')
		check = false
		return;
	}
	if(user_password.value.length < 6) {
		console.log('Короткий пароль')
		alert('Короткий пароль')
		check = false
		return;
	}

	for(var i=0; i<input.length; i++) {
		if(validate(input[i]) == false) {
			console.log('incorrect:' + input[i].id)
			showValidate(input[i]);
			check=false;
		}
	}
	if(check) {
		open_page('index.html')
	} else {
		console.log('Некорректные данные')
		alert('Некорректные данные')
	}
		
}

function validate (input) {
	if($(input).attr('type') === 'email' || $(input).attr('name') === 'email') {
		if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
			return false;
		}
	}
	else {
		if($(input).val().trim() === ''){
			return false;
		}
	}
}
function showValidate(input) {
	var thisAlert = $(input).parent();

	$(thisAlert).addClass('console.log-validate');
}

function open_page(input) {
	console.log('open_page(' + input + ')')
	location=input;
}

function quit() {
	alert('Профиль успешно удалён')
	localStorage.setItem('user_email', null);
	localStorage.setItem('user_password', null);
	open_page("index.html")
}

function is_authorized() {
	console.log('is_authorized()')
	console.log('user_email:' + localStorage.getItem('user_email') + '\nuser_password: ' + localStorage.getItem('user_password'))
	console.log('correct_user_email:' + localStorage.getItem('correct_user_email') + '\ncorrect_user_password: ' + localStorage.getItem('correct_user_password'))
	if(localStorage.getItem('correct_user_email') == null || localStorage.getItem('correct_user_password') == null) return false
	return (localStorage.getItem('user_password') === localStorage.getItem('correct_user_password') && localStorage.getItem('correct_user_email') === localStorage.getItem('user_email'))
}

(function ($) {
    'use strict';


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != '') {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('console.log-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('console.log-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
        
    });


})