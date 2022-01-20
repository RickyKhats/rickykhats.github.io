//let register_button_
//let register_input_
//../some.php
let register_button_accept
let register_input_email
let register_input_name
let register_input_password_main
let register_input_password_copy

function on_load() {
    if(check_login()) {
        open_page("index.html")
        return false
    }
    register_button_accept          = document.getElementById('register_button_accept');
    register_input_email            = document.getElementById('register_input_email');
    register_input_name             = document.getElementById('register_input_name');
    register_input_password_main    = document.getElementById('register_input_password_main');
    register_input_password_copy    = document.getElementById('register_input_password_copy');
    register_button_accept.addEventListener('click', try_register);
    add_header()
    return true
}

function try_register() {
    console.log('try_register()')
    var input = $('.validate-input .input100');
    var check = true;

    if(register_input_password_main.value !== register_input_password_copy.value) {
        console.log('Пароли не совпадают')
        alert('Пароли не совпадают')
        check = false
        return;
    }
    if(register_input_password_main.value.length < 6) {
        console.log('Короткий пароль')
        alert('Короткий пароль')
        check = false
        return;
    }

    for(var i=0; i<input.length; i++) {
        if(validate(input[i]) === false) {
            console.log('incorrect:' + input[i].id)
            showValidate(input[i]);
            check=false;
        }
    }
    if(check) {
        localStorage.setItem('correct_user_email', register_input_email.value);
        localStorage.setItem('correct_user_password', register_input_password_main.value);
        localStorage.setItem('user_email', null);
        localStorage.setItem('user_password', null);
        open_page('index.html')
    } else {
        console.log('Некорректные данные')
        alert('Некорректные данные')
    }
}