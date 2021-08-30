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
<html lang="fr">
	<!--begin::Head-->
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>Page d'accueil Pharmacien</title>
		<meta name="description" content="Page with empty content" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
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
                                            <a class="dropdown-item " href="/connexionP"><i class="fa fa-power-off m-r-5 m-l-5"></i> </a>
										</div>
                                        <div >
                                            <a href="{{route('cart.index')}}">
                                                <font size="4pt">
                                               <span class="text-white font-weight-bolder ">Panier</span>
                                                </font >
                                                <span class="badge badge-pill badge-dark ">{{Cart::count()}}</span>
                                             </a>
										</div>
                                        <div>
                                            <a href="{{url('/Pharmacie')}}">
                                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline" >
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
					<!--<div class="header-bottom">

						<div class="container">

								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">

										<ul class="menu-nav">


											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{url('FormulaireP/FormulaireP1')}}" class="menu-link">
													<span class="menu-text" style="padding-left: 15%;">Liste des produits</span>
													<span class="menu-desc" style="padding-left: 15%;">Consulter la liste des produits en stock</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{url('Pharmacie')}}" class="menu-link">
													<span class="menu-text" style="padding-left: 18.25rem;">Vente de produits</span>
													<span class="menu-desc" style="padding-left: 18.25rem;">Enrégistrer une nouvelle vente</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
										</ul>

									</div>

								</div>

							</div>

						</div>-->
						<!--end::Bottom-->
					</div>
					<!--end::Header-->

                    <!--begin::Content-->
					<div class="card-body" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Page Layout-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->

									<!--end::Aside-->
									<!--begin::Layout-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-body p-0">
												<!-- begin: Invoice-->
												<!-- begin: Invoice header-->
												<div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
													<div class="col-md-10">
														<div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
															<h1 class="display-4 font-weight-boldest mb-10">ORDER DETAILS</h1>
															<div class="d-flex flex-column align-items-md-end px-0">
																<!--begin::Logo-->
																<a href="#" class="mb-5">
																	<img src="assets/media/logos/logo-dark.png" alt="" />
																</a>
																<!--end::Logo-->
																<span class="d-flex flex-column align-items-md-end opacity-70">
																	<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
																	<span>Mississippi 96522</span>
																</span>
															</div>
														</div>
														<div class="border-bottom w-100"></div>
														<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Date de reçu</span>
																<span class="opacity-70">Jan 07, 2020</span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Reçu NO.</span>
																<span class="opacity-70">64616-103</span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Délivré à:</span>
																<span class="opacity-70">M.
																<br />Telephone : </span>
															</div>
														</div>
													</div>
												</div>
												<!-- end: Invoice header-->
												<!-- begin: Invoice body-->
												<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
													<div class="col-md-10">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<th class="pl-0 font-weight-bold text-muted text-uppercase">Nom</th>
																		<th class="text-right font-weight-bold text-muted text-uppercase">Quantité</th>
																		<th class="text-right font-weight-bold text-muted text-uppercase">Prix unitaire</th>
																		<th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Prix total du produit</th>
																	</tr>
																</thead>
																<tbody>
                                                                    @foreach (Cart::content() as $produit)
																	<tr class="font-weight-boldest">
																		<td class="border-0 pl-0 pt-7 d-flex align-items-center">
																		<!--begin::Symbol-->
																		<div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
																			<div class="symbol-label" style="background-image: url('assets/media/products/index.jpg')"></div>
																		</div>
																		<!--end::Symbol-->
																		{{$produit->model->nomprod}}</td>
																		<td class="text-right pt-7 align-middle">2</td>
																		<td class="text-right pt-7 align-middle">{{$produit->model->getprix()}}</td>
																		<td class="text-primary pr-0 pt-7 text-right align-middle">{{getprix($produit->subtotal())}}</td>
                                                                        <td class="text-right pt-7 align-middle"></td>
																	</tr>
                                                                    @endforeach
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<!-- end: Invoice body-->
												<!-- begin: Invoice footer-->
												<div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0">
													<div class="col-md-10">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<th class="font-weight-bold text-muted text-uppercase">Date de payement</th>
                                                                        <th class="font-weight-bold text-muted text-uppercase">Sous-total</th>
                                                                        <th class="font-weight-bold text-muted text-uppercase">Taxe</th>
																		<th class="font-weight-bold text-muted text-uppercase text-right">Total à payer</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="font-weight-bolder">
																		<td>Jan 07, 2020</td>
																		<td>{{getprix(Cart::subtotal())}}</td>
																		<td>{{getprix(Cart::tax())}}</td>
																		<td class="text-primary font-size-h3 font-weight-boldest text-right">{{getprix(Cart::total())}}</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<!-- end: Invoice footer-->
												<!-- begin: Invoice action-->
												<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
													<div class="col-md-10">
														<div class="d-flex justify-content-between">
															<button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Valider payement</button>
															<button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Inprimer</button>
														</div>
													</div>
												</div>
												<!-- end: Invoice action-->
												<!-- end: Invoice-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<!--end::Layout-->
								</div>
								<!--end::Page Layout-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->

                    @extends('Layout.footer')
