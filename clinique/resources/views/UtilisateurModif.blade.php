
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
													<span class="menu-desc">Enr??gistrer un nouveau utilisateur</span>
													<i class="menu-arrow"></i>
												</a>
											</li>-->
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{route('User.add')}}" class="menu-link">
													<span class="menu-text">Ajouter utilisateur</span>
													<span class="menu-desc">Acc??der au formulaire pour ajouter un nouveau utilisateur</span>
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


 <!--begin::Content-->
 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->

            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title" style="padding-left: 40%;">Modification des informations de l'utilisateur</h3>
                    <div class="card-toolbar">

                    </div>
                </div>
                <!--begin::Form-->
                <form class="form" action="{{route('User.update',$user->id)}}" method="POST">
                    @csrf
                    <div class="card-body" align="center">
                        <!--begin: Code-->

                        <!--end: Code-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Nom</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="" required  />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Pr??nom</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="prenom" value="{{$user->prenom}}" placeholder="" required />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">T??l??phone</label>
                            <div class="col-lg-9">
                                <input type="texte" class="form-control" name="telephone" value="{{$user->telephone}}" placeholder="" required/>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Adresse</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="adresse" value="{{$user->adresse}}"  placeholder="" required/>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Fonction</label>
                            <div class="col-lg-9">
                                <select name="profil" value="{{$user->profil}}" class="form-control " >
                                    <option value="Adminstrateur"></option>
                                    <option value="Adminstrateur">Adminstrateur</option>
                                    <option value="Infirmi??re">Infirmi??re</option>
                                    <option value="M??decin">M??decin</option>
                                    <option value="Pharmacien">Pharmacien</option>
                                    <option value="Caissier">Caissier</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Email</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="" />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Mot de passe</label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control" name="password" value="" placeholder="" />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Confirmer mot de passe</label>
                            <div class="col-lg-9">
                                <input  type="password" class="form-control placeholder-dark-75" name="password_confirmation" required autocomplete="new-password"   />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                     <!--   <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">Prix total ?? payer</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" name="prixtotal" value="" placeholder="" />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>-->

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-10"> <button type="reset" class="btn font-weight-bold btn-secondary">R??initialiser</button></div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn font-weight-bold btn-success mr-2">Soumettre</button>

                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->

            <!--end::Card-->
        </div>
    </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@extends('Layout.footer')
