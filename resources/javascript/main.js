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
    content.insertAdjacentHTML('beforeend', '<div><div class="header-dark"><nav class="navbar navbar-dark navbar-expand-md navigation-clean-search"><div class="container"><a class="navbar-brand" href="#">Scarfaces</a><div class="collapse navbar-collapse" id="navcol-1"><ul class="nav navbar-nav"><li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li><li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div></li></ul><form class="form-inline mr-auto" target="_self"><div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div></form><div id="profile_content"> </div></div></div></nav></div></div>');
    const profile_content = document.getElementById('profile_content');
    if(profile_content != null) {
        if( check_login() ) {

            profile_content.insertAdjacentHTML('beforeend', '<div id="profile_actions">');
            profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="quit">Выйти</a>');
            profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="quit">Выйти</a>');
        } else {
            profile_content.insertAdjacentHTML('beforeend', '<a href="#" class="login" id="auth">Авторизоваться</a>');
            profile_content.insertAdjacentHTML('beforeend', '<a class="btn btn-light action-button" role="button" href="#" id="register">Зарегистрироваться</a>');
        }
        var quit = document.getElementById('quit');
        var auth = document.getElementById('auth');
        var register = document.getElementById('register');
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
