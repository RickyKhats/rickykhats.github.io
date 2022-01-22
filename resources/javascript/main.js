let user = {
    email: "russaingamer0@gmail.com",
    password: "123123",
    name: "Ricky Khats",
    age: 21,
    toString() {
        return `{name: "${this.name}", age: ${this.age}}`;
    }
};

function save_data() {
    const fso = new ActiveXObject("Scripting.FileSystemObject");
    const f1 = fso.CreateTextFile("testfile.txt", true);
}

function open_page(input) {
    console.log('open_page(' + input + ')')
    location=input;
}

save_data();

function quit() {
    alert('Профиль успешно удалён')
    localStorage.setItem('user_email', null);
    localStorage.setItem('user_password', null);
    open_page("index.html")
}

function check_login() {
    console.log('check_login()')
    console.log('user_email:' + localStorage.getItem('user_email') + '\nuser_password: ' + localStorage.getItem('user_password'))
    console.log('correct_user_email:' + localStorage.getItem('correct_user_email') + '\ncorrect_user_password: ' + localStorage.getItem('correct_user_password'))
    if(localStorage.getItem('correct_user_email') == null || localStorage.getItem('correct_user_password') == null) return false
    return (localStorage.getItem('user_email') === localStorage.getItem('correct_user_email') &&
        localStorage.getItem('user_password') === localStorage.getItem('correct_user_password'))
}

function add_header() {
    let content = document.getElementById('header_content');

    if(content != null){
        console.log('try load header')
        let request = new XMLHttpRequest;
        request.open('GET', 'header.html', true);
        request.send(null);

        request.onload = function () {
            content.insertAdjacentHTML('beforeend', request.responseText);
            const profile_content = document.getElementById('profile_content');
            console.log('profile_content: ' + profile_content)
            if(profile_content != null) {
                if( check_login() ) {
                    profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="quit">Выйти</a>');
                } else {
                    profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="auth">Авторизоваться</a>');
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

        };
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
