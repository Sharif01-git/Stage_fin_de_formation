<!--begin::Content-->
<div id="app">

    @include('flash-message')


    @yield('content')

</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column" style="padding-left: 40%;">
                                <h3 class="card-label font-weight-bolder text-dark"  >Informations personnelles</h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Body-->
                            <div class="card-body" align="center">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                                            <div class="image-input-wrapper" style="background-image: url(assets/media/users/clinique1.png)"></div>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right" ><h4>Nom</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth()->user()->name}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-right col-lg-3 col-form-label"><h4>Prénom</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth()->user()->prenom}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-right col-lg-3 col-form-label"><h4>Adresse</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{auth()->user()->adresse}}" />

                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mt-10 mb-6">Contact</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-right col-lg-3 col-form-label"><h4>Téléphone</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid" value="{{auth()->user()->telephone}}" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-right col-lg-3 col-form-label"><h4>Email</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-at"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control form-control-lg form-control-solid" value="{{auth()->user()->email}}" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-right col-lg-3 col-form-label"><h4>Profil</h4></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="" value="{{auth()->user()->profil}}" />
                                           <!-- <div class="input-group-append">
                                                <span class="input-group-text">.com</span>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Personal Information-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
