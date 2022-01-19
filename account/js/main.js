
function register_init() {
	console.log('register_init()');
	var register_button = document.getElementById('registration_button_accept');
	var user_email = document.getElementById('registration_input_email');
	var user_password = document.getElementById('registration_input_password');
	if(localStorage.getItem('user_email') != null && localStorage.getItem('user_password') != null ) {
		console.log('user_email: ' + localStorage.getItem('user_email') + '\nuser_password' + localStorage.getItem('user_password'))
		localStorage.removeItem( 'login_data' );
		user_email.value = localStorage.getItem('user_email');
		user_password.value = localStorage.getItem('user_password');
	}
	register_button.addEventListener('click', try_register);
	add_header()
}
	
function try_register() {
	console.log('try_register()')
	var user_email = document.getElementById('registration_input_email');
	var user_password = document.getElementById('registration_input_password');
	
	localStorage.setItem('user_email', user_email.value);
	localStorage.setItem('user_password', user_password.value);
	
	var input = $('.validate-input .input100');
	var check = true;

	for(var i=0; i<input.length; i++) {
		if(validate(input[i]) == false) {
			console.log('incorrect:' + input[i].id)
			showValidate(input[i]);
			check=false;
		}
	}
	if(check) {
		if( is_authorized() ) {
			open_page('index.html')
		} else {
			console.log('Неверный логин или пароль \nuser_email:' + localStorage.getItem('user_email') + '\nuser_password: ' + localStorage.getItem('user_password'))
		}			
	} else {
		console.log('Некорректные данные')
	}
		
}

function init_user() {
	console.log('init_user()')
	if( is_authorized() ) {
		location='profile.html'
	} else {
		location='login.html'
	}
}

function profile_init() {
	console.log('profile_init()')
	add_header()
}

function add_header() {
	var content = document.getElementById('header_content');
	content.insertAdjacentHTML('beforeend', '<div class="header-dark"><nav class="navbar navbar-dark navbar-expand-md navigation-clean-search"><div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navcol-1"><ul class="nav navbar-nav"><li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li><li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div></li></ul><form class="form-inline mr-auto" target="_self"><div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div></form><span class="navbar-text"><div class="profile_content" id="profile_content"> </div></div></div></nav></div>');
	const profile_content = document.getElementById('profile_content');
	if(profile_content != null) {
		if( is_authorized() ) {	
			profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login">Выйти</a></span>');
		} else {
			profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login">Авторизоваться</a></span>');
			profile_content.insertAdjacentHTML('beforeend', '<a class="btn btn-light action-button" role="button" href="#">Зарегистрироваться</a>');
		}
	}
}

function open_page(input) {
	console.log('open_page(' + input + ')')
	location=input;
}

function try_login() {
	console.log('try_login()')
	var user_email = document.getElementById('login_input_email');
	var user_password = document.getElementById('login_input_password');
	
	localStorage.setItem('user_email', user_email.value);
	localStorage.setItem('user_password', user_password.value);
	
	var input = $('.validate-input .input100');
	var check = true;

	for(var i=0; i<input.length; i++) {
		if(validate(input[i]) == false) {
			console.log('incorrect:' + input[i].id)
			showValidate(input[i]);
			check=false;
		}
	}
	if(check) {
		if( is_authorized() ) {
			open_page('index.html')
		} else {
			console.log('Неверный логин или пароль \nuser_email:' + localStorage.getItem('user_email') + '\nuser_password: ' + localStorage.getItem('user_password'))
		}			
	} else {
		console.log('Некорректные данные')
	}
}

function login_init() {
	console.log('login_init()')
	var login_button = document.getElementById('login_button_accept');
	var user_email = document.getElementById('login_input_email');
	var user_password = document.getElementById('login_input_password');
	
	user_email.value = localStorage.getItem('user_email');
	user_password.value = localStorage.getItem('user_password');
	
	login_button.addEventListener('click', try_login);
	add_header()
}

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

function is_authorized() {
	console.log('is_authorized')
	var user_email = localStorage.getItem('user_email');
	var user_password = localStorage.getItem('user_password');
	
	console.log('user_email: ' + user_email + '\nuser_password: ' + user_password)
	
	return (user_email == 'russaingamer0@gmail.com' && user_password == '1079')
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