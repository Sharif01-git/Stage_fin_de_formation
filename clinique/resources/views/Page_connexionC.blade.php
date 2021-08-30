
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Page de connexion</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/classic/login-2.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/clinique6.jpg" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin::Aside body-->
						<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
							<a href="#" class="mb-15 text-center">
								<img src="assets/media/logos/clinique6.jpg" class="max-h-75px" alt="" />
							</a>
							<!--begin::Signin-->
							<div class="login-form login-signin">
								<div class="text-center mb-10 mb-lg-20">
									<h2 class="font-weight-bold">Se connecter</h2>
									<p class="text-muted font-weight-bold">Entrer votre Email et votre mot de passe</p>
								</div>
								<!--begin::Form-->
								<form method="POST" class="form" action="/connexionC">
                                    @csrf
									<div class="form-group py-3 m-0">
										<input id="email" type="email" class="form-control h-auto border-0 px-0 placeholder-dark-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"  />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
									<div class="form-group py-3 border-top m-0">
										<input id="password" type="password" class="form-control h-auto border-0 px-0 placeholder-dark-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
										<div class="checkbox-inline">
											<label class="checkbox checkbox-outline m-0 text-muted">
											<input class="form-check-input custom-control-user" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
											<span></span>Se souvenir de moi</label>
										</div>
										<a href="Mot_passe_oublier" id="kt_login_forgot" class="text-muted text-hover-primary">Mot de passe oublié ?</a>
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
										<button type="submit" class="btn btn-primary">Se connecter</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
							<!--begin::Forgot-->
							<div class="login-form login-forgot">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Mot de passe oublié ?</h3>
									<p class="text-muted font-weight-bold">Entrer votre email pour rénitialiser votre mot de passe</p>
								</div>
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
									<div class="form-group py-3 border-bottom mb-10">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Soumettre</button>
										<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Retour</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Forgot-->
						</div>
						<!--end::Aside body-->
						<!--begin: Aside footer for desktop-->
						<div class="d-flex flex-column-auto justify-content-between mt-15">
							<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Metronic</div>
							<div class="d-flex order-1 order-sm-2 my-2">
								<a href="#" class="text-muted text-hover-primary">Privé</a>
								<a href="#" class="text-muted text-hover-primary ml-4">Légal</a>
								<a href="#" class="text-muted text-hover-primary ml-4">Contacte</a>
							</div>
						</div>
						<!--end: Aside footer for desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url(assets/media/bg/bg-8.jpg);">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-lg-center">
						<div class="d-flex flex-column justify-content-center">
							<h3 class="display-3 font-weight-bold my-7 text-white" >Bienvenue sur GES-CLIN</h3>
							<p class="font-weight-bold font-size-lg text-white opacity-80" >Veuillez vous connecter pour accéder à votre page d'accueil!!!</p>
						</div>
					</div>
					<!--end::Content body-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/custom/login/login-general.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
