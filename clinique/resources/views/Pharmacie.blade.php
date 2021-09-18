
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
					<div class="header-bottom">

						<div class="container">

								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">

										<ul class="menu-nav">


                                            @foreach (App\Categorie::all()  as $categorie)


											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{route('Pharmacie.index', ['categorie'=>$categorie->slug])}}" class="menu-link">
													<span class="menu-text" style="padding-left: 15%;">{{$categorie->nom}}</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
                                            @endforeach

										</ul>

									</div>

								</div>

							</div>

						</div>
						<!--end::Bottom-->
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
                <!--begin::Aside-->
                <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                    <!--begin::Forms Widget 13-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column mb-3">
                                <span class="card-label font-size-h3 font-weight-bolder text-dark">Ajouter un produit</span>
                                <span class="text-muted mt-5 font-weight-bolder font-size-lg">Image du produit</span>
                            </h3>
                        </div>

                        <div class="card-body pt-4">

                            <form action="/Pharmacie" method="POST">
                                @csrf
                                <div class="d-flex mb-8 justify-content-between">

                                    <div class="custom-file">



                                            <input type="file" id="image" name="image" value="">
                                    </div>

                                </div>

                                <div class="mt-6">
                                    <div class="text-muted mb-4 font-weight-bolder font-size-lg">Infos du produit</div>

                                    <div class="form-group mb-8">
                                        <label class="font-weight-bolder">Nom</label>
                                        <input type="text" name="nomprod" class="form-control form-control-solid form-control-lg" placeholder="" />
                                    </div>
                                    <div class="form-group mb-8">
                                        <label class="font-weight-bolder">Sous-nom</label>
                                        <input type="text" name="slug" class="form-control form-control-solid form-control-lg" placeholder="" />
                                    </div>
                                    <div class="form-group mb-8">
                                        <label class="font-weight-bolder">Catégorie</label>
                                        <select name="nom" class="form-control form-control-solid form-control-lg">
                                            <option value="Analgésiques">Analgésiques</option>
                                            <option value="Anti-inflamatoires">Anti-inflamatoires</option>
                                            <option value="Antibiotiques">Antibiotiques</option>
                                            <option value="Antibactériens">Antibactériens</option>
                                            <option value="Antimicosiques">Antimicosiques</option>
                                            <option value="Antiviraux">Antiviraux</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-8">
                                        <label class="font-weight-bolder">Quantité</label>
                                        <input type="number" class="form-control form-control-solid form-control-lg" placeholder="" />
                                    </div>
                                    <div class="form-group mb-8">
                                        <label for="exampleTextarea" class="font-weight-bolder">Description</label>
                                        <textarea name="description" class="form-control form-control-solid form-control-lg" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bolder">Prix (FCFA)</label>
                                        <input type="text" name="prix" class="form-control form-control-solid form-control-lg" placeholder="" />
                                    </div>



                                    <button type="submit" class="btn btn-primary font-weight-bolder mr-2 px-8">Enrégistrer</button>
                                    <button type="reset" class="btn btn-clear font-weight-bolder text-muted px-8">Rénitialiser</button>

                                </div>

                            </form>

                        </div>

                    </div>
                    <!--end::Forms Widget 13-->
                    <!--begin::List Widget 21-->
                    <div class="card card-custom gutter-b">

                     <!--   <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column mb-5">
                                <span class="card-label font-weight-bolder text-dark mb-1">Recent Products</span>
                                <span class="text-muted mt-2 font-weight-bold font-size-sm">New Arrivals</span>
                            </h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
>
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--end::Header-->
                        <!--begin::Body-->
                      <!--  <div class="card-body pt-2">

                            <div class="d-flex mb-8">

                                <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="d-flex flex-column">
                                        <div class="symbol-label mb-3" style="background-image: url('assets/media/stock-600x400/img-23.jpg')"></div>
                                        <a href="#" class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Edit</a>
                                    </div>
                                </div>


                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Darius the Great</a>
                                    <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank credibility is one glaring error</span>
                                    <span class="text-muted font-weight-bold font-size-lg">Price:
                                    <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                </div>

                            </div>


                            <div class="d-flex">

                                <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="d-flex flex-column">
                                        <div class="symbol-label mb-3" style="background-image: url('assets/media/stock-600x400/img-25.jpg')"></div>
                                        <a href="#" class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Edit</a>
                                    </div>
                                </div>


                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Nike Airmax</a>
                                    <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank credibility is one glaring error</span>
                                    <span class="text-muted font-weight-bold font-size-lg">Price:
                                    <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                </div>

                            </div>

                        </div>-->

                    </div>

                </div>
                <!--end::Aside-->
                <!--begin::Layout-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-body">
                            <!--begin::Engage Widget 15-->
                            <div class="card card-custom mb-12">
                                <div class="card-body rounded p-0 d-flex" style="background-color:#DAF0FD;">
                                    <div class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-500px p-10 p-md-20">
                                        <h1 class="font-weight-bolder text-dark">Chercher un produit</h1>
                                        <div class="font-size-h4 mb-8">Trouver rapidemant un produit</div>
                                        <!--begin::Form-->
                                        <form class="d-flex flex-center py-2 px-6 bg-white rounded" action="{{route('Pharmacie.search')}}" method="POST">
                                            @csrf
                                            <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                <!--end::Svg Icon-->
                                            </span>
                                            <input type="text" name="q" class="form-control border-0 font-weight-bold pl-2" placeholder="" value="{{ request()->q ?? '' }}" />
                                            <button type="submit" class="btn btn-info"><i class="fa fa-seaech " aria-hidden="true"></i></button>
                                        </form>
                                        @if (request()->input())
                                            <h6>{{$produits->total()}} résultat(s) pour la rcherche "{{ request()->q }}"</h6>

                                        @endif
                                        <!--end::Form-->
                                    </div>
                                    <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover" style="background-image: url(assets/media/svg/illustrations/progress.svg);"></div>
                                </div>
                            </div>
                            <!--end::Engage Widget 15-->
                            <!--begin::Section-->
                            <div class="mb-11">
                                <!--begin::Heading-->
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Produits pharmaceutiques</h2>
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                <!--    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder">View All</a>-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Products-->
                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-10">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Nom</th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">Prix</th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">Catégorie </th>
                                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Panier</th>
                                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Détails</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($produits as $produit)
                                                    <tr class="font-weight-boldest">
                                                        <td class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                            <div class="symbol-label" style="background-image: url('{{$produit->image}}')"></div>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        {{$produit->nomprod}}</td>
                                                        <td class="text-right pt-7 align-middle">
                                                            {{$produit->getprix()}}
                                                        </td>
                                                        <td class="text-right pt-7 align-middle">
                                                            @foreach ($produit->categories as $categorie)
                                                            {{ $categorie->nom }}
                                                            @endforeach</td>
                                                        <td class="text-primary pr-0 pt-7 text-right align-middle">
                                                            <form action="{{route('cart.store')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="produit_id" value="{{$produit->id}}">
                                                                <button type="submit" class="btn font-weight-bolder  btn-light-primary">Ajouter</button>
                                                            </form>
                                                        </td>
                                                        <td class="text-right pt-7 align-middle">

                                                        <a class="fa fa-eye" title="" href="{{route('Pharmacie.show', $produit->slug)}}"></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--end::Products-->
                            </div>
                            <!--end::Section-->
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
