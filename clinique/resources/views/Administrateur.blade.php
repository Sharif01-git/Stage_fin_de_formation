


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
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>Page d'accueil Administrateur</title>
		<meta name="description" content="Page with empty content" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
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
        <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header flex-column header-fixed">
						<!--begin::Top-->
						<div class="header-top">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Left-->
								<div class="d-none d-lg-flex align-items-center mr-3">
									<!--begin::Logo-->

                                        <span class="mr-20">
										<img alt="Logo" src="assets/media/logos/clinique6.jpg" class="max-h-35px" />
                                        <span>

                                    <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline" >
                                        <font size="4pt">
                                             GES-CLIN
                                        </font>
                                    </span>
									<!--end::Logo-->
								</div>
								<!--end::Left-->
								<!--begin::Topbar-->
								<div class="topbar">
									<!--begin::Tablet & Mobile Search-->
									<div class="dropdown d-flex d-lg-none">
										<!--begin::Toggle-->
										<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
											<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
									</div>
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-3">
												<span class="text-white font-weight-bold font-size-sm d-none d-md-inline">{{auth()->user()->prenom}}</span>
												<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">{{auth()->user()->name}}</span>
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><img alt="Logo" src="assets/media/logos/clinique1.png" class="max-h-35px" /></span>
											</span>
                                            <a class="dropdown-item " href="/connexionA"><i class="fa fa-power-off m-r-5 m-l-5"></i> </a>
										</div>
                                        <div>
                                            <a href="{{url('/Administrateur')}}">
                                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline" style="padding-left: ">
                                                <font size="4pt">
                                                     ACCUEIL
                                                </font>
                                            </span>
                                            </a>
                                        </div>
									</div>
									<!--end::User-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Top-->
						<!--begin::Bottom-->
						<div class="header-bottom">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
                                           <!-- <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{url('/inscription')}}" class="menu-link">
													<span class="menu-text">Ajouter utilisateur</span>
													<span class="menu-desc">Enrégistrer un nouveau utilisateur</span>
													<i class="menu-arrow"></i>
												</a>
											</li>-->
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{route('User.add')}}" class="menu-link">
													<span class="menu-text">Ajouter utilisateur</span>
													<span class="menu-desc">Accéder au formulaire pour ajouter un nouveau utilisateur</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{url('FormulaireA/FormulaireA2')}}" class="menu-link">
													<span class="menu-text">Liste utilisateurs</span>
													<span class="menu-desc">Consulter la liste des utilisateurs</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{url('Statistique')}}" class="menu-link">
													<span class="menu-text">Statistiques</span>
													<span class="menu-desc">Consulter les statistiques</span>
													<i class="menu-arrow"></i>
												</a>
											</li>



										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
					</div>
					<!--end::Header-->





<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->

                <!--end::Actions-->
                <!--begin::Dropdown-->
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
             <!--begin::Card-->
             <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-chart text-primary"></i>
                        </span>
                        <h3 class="card-label">Quelques statistiques</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row my-10">
                        <!--begin: Pricing-->
                        <div class="col-md-6 col-xxl-3 border-right-0 border-right-md border-bottom border-bottom-xxl-0">
                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                <div class="d-flex flex-center position-relative mb-25">
                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                        <svg width="175" height="200">
                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                        </svg>
                                    </span>
                                    <span class="svg-icon svg-icon-5x svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Safe.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                          </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$patients->count()}}
                                    <sup class="font-size-h3 font-weight-normal pl-1">Patients</sup></span></span>
                                <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Nombre total de patients enrégistrés</h4>
                                <p class="mb-15 d-flex flex-column">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </p>
                            </div>
                        </div>
                        <!--end: Pricing-->
                        <!--begin: Pricing-->
                        <div class="col-md-6 col-xxl-3 border-right-0 border-right-xxl border-bottom border-bottom-xxl-0">
                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                <div class="d-flex flex-center position-relative mb-25">
                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                        <svg width="175" height="200">
                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                        </svg>
                                    </span>
                                    <span class="svg-icon svg-icon-5x svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                              </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                </div>
                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$consultation->count()}}
                                <sup class="font-size-h3 font-weight-normal pl-1">Consultations</sup></span>
                                <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Nombre total de consultations enrégistrés</h4>
                                <p class="mb-15 d-flex flex-column">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </p>
                            </div>
                        </div>
                        <!--end: Pricing-->
                        <!--begin: Pricing-->
                        <div class="col-md-6 col-xxl-3 border-right-0 border-right-md border-bottom border-bottom-md-0">
                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                <div class="d-flex flex-center position-relative mb-25">
                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                        <svg width="175" height="200">
                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                        </svg>
                                    </span>
                                    <span class="svg-icon svg-icon-5x svg-icon-danger">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Home-heart.svg-->
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                              </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$traitement->count()}}
                                <sup class="font-size-h3 font-weight-normal pl-1">Traitement</sup></span>
                                <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Nombre total de traitements enrégistrés</h4>
                                <p class="mb-15 d-flex flex-column">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </p>
                            </div>
                        </div>
                        <!--end: Pricing-->
                        <!--begin: Pricing-->
                        <div class="col-md-6 col-xxl-3">
                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                <div class="d-flex flex-center position-relative mb-25">
                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                        <svg width="175" height="200">
                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                        </svg>
                                    </span>
                                    <span class="svg-icon svg-icon-5x svg-icon-warning">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Star.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                          </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$utilisateur->count()}}
                                <sup class="font-size-h3 font-weight-normal pl-1">utilisateurs</sup></span>
                                <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Nombre total d'utilisateur</h4>
                                <p class="mb-15 d-flex flex-column">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </p>
                            </div>
                        </div>
                        <!--end: Pricing-->

                    </div>

                </div>

            </div><br>


            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-box-1 text-success"></i>
                        </span>
                        <h3 class="card-label">Liste des patients enrégistrés</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center my-20">
                        <div class="col-11">
                            <!-- begin: Bottom Table-->

                            <div class="row bg-gray-100 py-5 font-weight-bold text-center">
                                <div class="col-2 text-left px-5 font-weight-boldest">Nom</div>
                                <div class="col-2 text-left px-5 font-weight-boldest">Prénom</div>
                                <div class="col-2 text-left px-5 font-weight-boldest">Age</div>
                                <div class="col-2 text-left px-5 font-weight-boldest">Sexe</div>
                                <div class="col-2 text-left px-5 font-weight-boldest">Téléphone</div>
                                <div class="col-2 text-left px-5 font-weight-boldest">Aderesse</div>

                            </div>
                            <div class="row bg-white py-5 font-weight-bold text-center">
                                @foreach ($patients as $patient)
                                <div class="col-2 text-left px-5">{{$patient->nomp}}</div>
                                <div class="col-2 text-left px-5">{{$patient->prenomp}}</div>
                                <div class="col-2 text-left px-5">{{$patient->age}}</div>
                                <div class="col-2 text-left px-5">{{$patient->sexe}}</div>
                                <div class="col-2 text-left px-5">{{$patient->tel}}</div>
                                <div class="col-2 text-left px-5">{{$patient->adressep}}</div>
                                @endforeach
                            </div>
                            <!-- end: Bottom Table-->
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Card-->

            <!--begin::Card-->

            <!--end::Card-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@extends('Layout.footer')
