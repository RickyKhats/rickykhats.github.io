<!DOCTYPE html>
<html lang="en">
<head>
	<title>Профиль</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
<!--===============================================================================================-->
</head>
<body onload="profile_init()">
	<header>
		<div id="header_content"> 
		ТУТ HEADER
		<?php include("header.php") ?>
		ТУТ HEADER
		</div>
	</header>
	<div class="content">
		<div class="background" style="background-image: url('images/bg-01.jpg');">
			<div class="container">
<nav aria-label="breadcrumb" class="main-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Профиль</a></li>
						</ol>
					</nav>
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile Details</h5>
            </div>
            <div class="card-body text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Marie Salter" class="img-fluid rounded-circle mb-2" width="128" height="128">
                <h4 class="card-title mb-0">Marie Salter</h4>
                <div class="text-muted mb-2">Lead Developer</div>

                <div>
                    <a class="btn btn-primary btn-sm" href="#">Follow</a>
                    <a class="btn btn-primary btn-sm" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg> Message</a>
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <h5 class="h6 card-title">Skills</h5>
                <a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
                <a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
                <a href="#" class="badge badge-primary mr-1 my-1">Sass</a>
                <a href="#" class="badge badge-primary mr-1 my-1">Angular</a>
                <a href="#" class="badge badge-primary mr-1 my-1">Vue</a>
                <a href="#" class="badge badge-primary mr-1 my-1">React</a>
                <a href="#" class="badge badge-primary mr-1 my-1">Redux</a>
                <a href="#" class="badge badge-primary mr-1 my-1">UI</a>
                <a href="#" class="badge badge-primary mr-1 my-1">UX</a>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <h5 class="h6 card-title">About</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm mr-1">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg> Lives in <a href="#">San Francisco, SA</a></li>

                    <li class="mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm mr-1">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg> Works at <a href="#">GitHub</a></li>
                    <li class="mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm mr-1">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg> From <a href="#">Boston</a></li>
                </ul>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <h5 class="h6 card-title">Elsewhere</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                        <svg class="svg-inline--fa fa-globe fa-w-16 fa-fw mr-1" aria-hidden="true" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
                        </svg>
                        <!-- <span class="fas fa-globe fa-fw mr-1"></span> --><a href="#">staciehall.co</a></li>
                    <li class="mb-1">
                        <svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw mr-1" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                        </svg>
                        <!-- <span class="fab fa-twitter fa-fw mr-1"></span> --><a href="#">Twitter</a></li>
                    <li class="mb-1">
                        <svg class="svg-inline--fa fa-facebook fa-w-14 fa-fw mr-1" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>
                        </svg>
                        <!-- <span class="fab fa-facebook fa-fw mr-1"></span> --><a href="#">Facebook</a></li>
                    <li class="mb-1">
                        <svg class="svg-inline--fa fa-instagram fa-w-14 fa-fw mr-1" aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                        </svg>
                        <!-- <span class="fab fa-instagram fa-fw mr-1"></span> --><a href="#">Instagram</a></li>
                    <li class="mb-1">
                        <svg class="svg-inline--fa fa-linkedin fa-w-14 fa-fw mr-1" aria-hidden="true" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                        </svg>
                        <!-- <span class="fab fa-linkedin fa-fw mr-1"></span> --><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-xl-9">
        <div class="card">
            <div class="card-header">
                <div class="card-actions float-right">
                    <div class="dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Activities</h5>
            </div>
            <div class="card-body h-100">

                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="Kathy Davis">
                    <div class="media-body">
                        <small class="float-right text-navy">5m ago</small>
                        <strong>Kathy Davis</strong> started following <strong>Marie Salter</strong>
                        <br>
                        <small class="text-muted">Today 7:51 pm</small>
                        <br>

                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="36" height="36" class="rounded-circle mr-2" alt="Andrew Jones">
                    <div class="media-body">
                        <small class="float-right text-navy">30m ago</small>
                        <strong>Andrew Jones</strong> posted something on <strong>Marie Salter</strong>'s timeline
                        <br>
                        <small class="text-muted">Today 7:21 pm</small>

                        <div class="border text-sm text-muted p-2 mt-1">
                            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                        </div>

                        <a href="#" class="btn btn-sm btn-danger mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-sm">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg> Like</a>
                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="Marie Salter">
                    <div class="media-body">
                        <small class="float-right text-navy">1h ago</small>
                        <strong>Marie Salter</strong> posted a new blog
                        <br>

                        <small class="text-muted">Today 6:35 pm</small>
                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="John Smith">
                    <div class="media-body">
                        <small class="float-right text-navy">3h ago</small>
                        <strong>John Smith</strong> posted two photos on <strong>Marie Salter</strong>'s timeline
                        <br>
                        <small class="text-muted">Today 5:12 pm</small>

                        <div class="row no-gutters mt-1">
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid pr-2" alt="Unsplash">
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid pr-2" alt="Unsplash">
                            </div>
                        </div>

                        <a href="#" class="btn btn-sm btn-danger mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-sm">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg> Like</a>
                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="John Smith">
                    <div class="media-body">
                        <small class="float-right text-navy">1d ago</small>
                        <strong>John Smith</strong> started following <strong>Marie Salter</strong>
                        <br>
                        <small class="text-muted">Yesterday 3:12 pm</small>

                        <div class="media mt-1">
                            <a class="pr-3" href="#">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="Marie Salter">
                            </a>
                            <div class="media-body">
                                <div class="wrap-input100 input" data-validate = "Неверный формат">
									<input class="input100" type="text" name="text" placeholder="Прокомментировать..." id="comment">
								</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="36" height="36" class="rounded-circle mr-2" alt="Marie Salter">
                    <div class="media-body">
                        <small class="float-right text-navy">1d ago</small>
                        <strong>Marie Salter</strong> posted a new blog
                        <br>
                        <small class="text-muted">Yesterday 2:43 pm</small>
                    </div>
                </div>

                <hr>
                <div class="media">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="36" height="36" class="rounded-circle mr-2" alt="Andrew Jones">
                    <div class="media-body">
                        <small class="float-right text-navy">1d ago</small>
                        <strong>Andrew Jones</strong> started following <strong>Marie Salter</strong>
                        <br>
                        <small class="text-muted">Yesterdag 1:51 pm</small>
                    </div>
                </div>

                <hr>
                <a href="#" class="btn btn-primary btn-block">Load more</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>