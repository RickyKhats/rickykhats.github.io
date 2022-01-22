let login_button;
let user_email;
let user_password;

function on_load() {
    console.log('on_load()')
    if(check_login()) {
        open_page("index.html")
        return false
    }
    login_button = document.getElementById('login_button_accept');
    user_email = document.getElementById('login_input_email');
    user_password = document.getElementById('login_input_password');

    login_button.addEventListener('click', try_login);
    add_header()
}

function try_login() {
    console.log('try_login()')

    localStorage.setItem('user_email', user_email.value);
    localStorage.setItem('user_password', user_password.value);

    let input = $('.validate-input .input100');
    let check = true;

    for(let i=0; i<input.length; i++) {
        if(validate(input[i]) === false) {
            console.log('incorrect:' + input[i].id)
            showValidate(input[i]);
            check=false;
        }
    }
    if(check) {
        if( check_login() ) {
            open_page('index.html')
        } else {
            alert('Неверный логин или пароль')
            console.log('user_email:' + localStorage.getItem('user_email') + '\nuser_password: ' + localStorage.getItem('user_password'))
            console.log('correct_user_email: ' + localStorage.getItem('correct_user_email') + '\ncorrect_user_password: ' + localStorage.getItem('correct_user_password'))
        }
    } else {
        if( !is_authorized(user_email.value, user_password.value) ) {
            alert('Неверный логин или пароль')
        } else {
            alert('Некорректные данные')
        }
    }
}
