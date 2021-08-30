
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
                                        <div>
                                            <a href="{{url('/Pharmacie')}}">
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
												<a href="{{url('/Pharmacie')}}" class="menu-link">
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

					</div>
					<!--end::Header-->

                    <!--begin::Content-->
					<div class="card card-body" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Page Layout-->
								<div class="d-flex flex-row">
									<!--begin::Layout-->
									<div class="flex-row-fluid">
										<!--begin::Section-->
										<div class="row">
											<div class="col-md-7 col-lg-12 col-xxl-7">
												<!--begin::Engage Widget 14-->
												<div class="card card-custom card-stretch gutter-b">
													<div class="card-body p-15 pb-20">
														<div class="row mb-17">
															<div class="col-xxl-5 mb-11 mb-xxl-0">
																<!--begin::Image-->
																<div class="card card-custom card-stretch">
																	<div class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center" style="background-color: #FFCC69;">
																		<img src="assets/media/products/index.jpg" class="mw-100 w-200px" style="transform: scale(1.6);" />
																	</div>
																</div>
																<!--end::Image-->
															</div>
															<div class="col-xxl-7 pl-xxl-11">
																<h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;">{{$produit->nomprod}}</h2>
																<div class="font-size-h2 mb-7 text-dark-50">Prix :
																<span class="text-info font-weight-boldest ml-2">{{$produit->getprix()}}</span></div>
																<div class="line-height-xl">{{$produit->description}}</div>
															</div>
														</div>
														<div class="row mb-6">
															<!--begin::Info-->
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Brand</span>
																	<span class="text-muted font-weight-bolder font-size-lg">Nike Horizon</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">SKU</span>
																	<span class="text-muted font-weight-bolder font-size-lg">NF3535345</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Color</span>
																	<span class="text-muted font-weight-bolder font-size-lg">Pure White</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Collection</span>
																	<span class="text-muted font-weight-bolder font-size-lg">2020 Spring</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">In Stock</span>
																	<span class="text-muted font-weight-bolder font-size-lg">2770</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Sold Items</span>
																	<span class="text-muted font-weight-bolder font-size-lg">280</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Total Sales</span>
																	<span class="text-muted font-weight-bolder font-size-lg">$24,900</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Net Profit</span>
																	<span class="text-muted font-weight-bolder font-size-lg">$3,750</span>
																</div>
															</div>
															<div class="col-6 col-md-4">
																<div class="mb-8 d-flex flex-column">
																	<span class="text-dark font-weight-bold mb-4">Balance</span>
																	<span class="text-muted font-weight-bolder font-size-lg">$68,300</span>
																</div>
															</div>
															<!--end::Info-->
														</div>
														<!--begin::Buttons-->
														<div class="d-flex">
															<button type="button" class="btn btn-primary font-weight-bolder mr-6 px-6 font-size-sm">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>New Stock</button>
															<button type="button" class="btn btn-light-primary font-weight-bolder px-8 font-size-sm">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>Approve</button>
														</div>
														<!--end::Buttons-->
													</div>
												</div>
												<!--end::Engage Widget 14-->
											</div>
											<div class="col-md-5 col-lg-12 col-xxl-5">
												<!--begin::List Widget 19-->
												<div class="card card-custom card-stretch card-stretch-half gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-6 mb-2">
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3">Stock Info</span>
															<span class="text-muted font-weight-bold font-size-sm">4 of 2,770 Total Items</span>
														</h3>
														<div class="card-toolbar">
															<a href="#" class="btn btn-light-info btn-sm font-weight-bolder font-size-sm py-3 px-6">Upload</a>
														</div>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-2">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless mb-0">
																<tbody>
																	<!--begin::Item-->
																	<tr>
																		<td class="w-40px align-middle pb-6 pl-0 pr-2">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-40 symbol-light-success">
																				<span class="symbol-label">
																					<span class="svg-icon svg-icon-lg svg-icon-success">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																								<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">Top Authors</td>
																		<td class="font-weight-bold text-muted text-right align-middle pb-6">4600 Users</td>
																		<td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">5.4MB</td>
																	</tr>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<tr>
																		<td class="w-40px pb-6 pl-0 pr-2">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-40 symbol-light-danger align-middle">
																				<span class="symbol-label">
																					<span class="svg-icon svg-icon-lg svg-icon-danger">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																								<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">Popular Authors</td>
																		<td class="font-weight-bold text-muted text-right align-middle pb-6">7200 Users</td>
																		<td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">2.8MB</td>
																	</tr>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<tr>
																		<td class="w-40px pb-6 pl-0 pr-2">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-40 symbol-light-primary align-middle">
																				<span class="symbol-label">
																					<span class="svg-icon svg-icon-lg svg-icon-primary">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<polygon points="0 0 24 0 24 24 0 24" />
																								<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																								<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">New Users</td>
																		<td class="font-weight-bold text-muted text-right align-middle pb-6">890 Users</td>
																		<td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">1.5MB</td>
																	</tr>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<tr>
																		<td class="w-40px pl-0 pr-2">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-40 symbol-light-warning align-middle">
																				<span class="symbol-label">
																					<span class="svg-icon svg-icon-lg svg-icon-warning">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																								<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">Active Customers</td>
																		<td class="font-weight-bold text-muted text-right align-middle">6370 Users</td>
																		<td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">890KB</td>
																	</tr>
																	<!--end::Item-->
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::List Widget 19-->
												<!--begin::List Widget 20-->
												<div class="card card-custom card-stretch card-stretch-half gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-6 mb-2">
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3">Latest Sales</span>
															<span class="text-muted font-weight-bold font-size-sm">More than 400+ new members</span>
														</h3>
														<div class="card-toolbar">
															<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																<a href="#" class="btn btn-light-danger btn-sm font-weight-normal font-size-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
																<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover py-5">
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-drop"></i>
																				</span>
																				<span class="navi-text">New Group</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-list-3"></i>
																				</span>
																				<span class="navi-text">Contacts</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-rocket-1"></i>
																				</span>
																				<span class="navi-text">Groups</span>
																				<span class="navi-link-badge">
																					<span class="label label-light-primary label-inline font-weight-bold">new</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-bell-2"></i>
																				</span>
																				<span class="navi-text">Calls</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-gear"></i>
																				</span>
																				<span class="navi-text">Settings</span>
																			</a>
																		</li>
																		<li class="navi-separator my-3"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-magnifier-tool"></i>
																				</span>
																				<span class="navi-text">Help</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-bell-2"></i>
																				</span>
																				<span class="navi-text">Privacy</span>
																				<span class="navi-link-badge">
																					<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																				</span>
																			</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
														</div>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-2">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless mb-0">
																<tbody>
																	<!--begin::Item-->
																	<tr>
																		<!--begin::Icon-->
																		<td class="align-middle w-50px pl-0 pr-2 pb-6">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50 symbol-light-success">
																				<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-26.jpg')"></div>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<!--end::Icon-->
																		<!--begin::Content-->
																		<td class="align-middle pb-6">
																			<div class="font-size-lg font-weight-bolder text-dark-75 mb-1">Special Meal</div>
																			<div class="font-weight-bold text-muted">Quona Rice</div>
																		</td>
																		<td class="font-weight-bold text-muted align-middle text-right pb-6">
																			<span class="svg-icon">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Close.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																							<rect x="0" y="7" width="16" height="2" rx="1" />
																							<rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																						</g>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="text-success font-size-h5 font-weight-bolder ml-1">5</span>
																		</td>
																		<td class="text-right align-middle pb-6">
																			<div class="font-weight-bold text-muted mb-1">To Pay</div>
																			<div class="font-size-lg font-weight-bolder text-dark-75">$600.00</div>
																		</td>
																		<!--end::Content-->
																	</tr>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<tr>
																		<!--begin::Icon-->
																		<td class="align-middle w-50px pl-0 pr-2 pb-6">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50 symbol-light-success">
																				<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-3.jpg')"></div>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<!--end::Icon-->
																		<!--begin::Content-->
																		<td class="align-middle pb-6">
																			<div class="font-size-lg font-weight-bolder text-dark-75 mb-1">Orange Wholesale</div>
																			<div class="font-weight-bold text-muted">Blue Orange</div>
																		</td>
																		<td class="font-weight-bold text-muted align-middle text-right pb-6">
																			<span class="svg-icon">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Close.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																							<rect x="0" y="7" width="16" height="2" rx="1" />
																							<rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																						</g>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="text-success font-size-h5 font-weight-bolder ml-1">200</span>
																		</td>
																		<td class="text-right align-middle pb-6">
																			<div class="font-weight-bold text-muted mb-1">To Pay</div>
																			<div class="font-size-lg font-weight-bolder text-dark-75">$6400.00</div>
																		</td>
																		<!--end::Content-->
																	</tr>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<tr>
																		<!--begin::Icon-->
																		<td class="align-middle w-50px pl-0 pr-2">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50 symbol-light-success">
																				<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-5.jpg')"></div>
																			</div>
																			<!--end::Symbol-->
																		</td>
																		<!--end::Icon-->
																		<!--begin::Content-->
																		<td class="align-middle">
																			<div class="font-size-lg font-weight-bolder text-dark-75 mb-1">Avocado Box</div>
																			<div class="font-weight-bold text-muted">From Spain</div>
																		</td>
																		<td class="font-weight-bold text-muted align-middle text-right">
																			<span class="svg-icon">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Close.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																							<rect x="0" y="7" width="16" height="2" rx="1" />
																							<rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																						</g>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																			<span class="text-success font-size-h5 font-weight-bolder ml-1">2</span>
																		</td>
																		<td class="text-right align-middle">
																			<div class="font-weight-bold text-muted mb-1">To Pay</div>
																			<div class="font-size-lg font-weight-bolder text-dark-75">$800.00</div>
																		</td>
																		<!--end::Content-->
																	</tr>
																	<!--end::Item-->
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::List Widget 20-->
											</div>
										</div>
										<!--end::Section-->
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
