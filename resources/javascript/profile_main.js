//let register_button_
//let register_input_
//../some.php
let register_button_accept
let register_input_email
let register_input_name
let register_input_password_main
let register_input_password_copy

function on_load() {
    console.log('on_load()')
    if(!check_login()) {
        localStorage.setItem('user_email', null);
        localStorage.setItem('user_password', null);
        open_page("login.html")
        return false
    }
    add_header()
    return true
}

function quit() {
    localStorage.setItem('correct_user_email', null);
    localStorage.setItem('correct_user_password', null);
    localStorage.setItem('user_email', null);
    localStorage.setItem('user_password', null);
    open_page('index.html')
}