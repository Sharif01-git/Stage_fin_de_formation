


    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title" style="padding-left: 40%;">
                            <h3 class="card-label">Liste des patients</h3>
                        </div>
                        <div class="card-toolbar">
                        </div>
                    </div>
                    @if ($message = Session::get('suscess'))
                    <div class="alert alert-succes">
                        <p>{{message}}</p>
                    </div>
                    @endif
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Rechercher..." id="kt_datatable_search_query" />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Search Form-->
                        <!--begin: Datatable-->
                        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                            <thead>
                                <tr>

                                    <th title="Field #2">Nom</th>
                                    <th title="Field #3">Prénom</th>
                                    <th title="Field #4">Age</th>
                                    <th title="Field #5">Telephone</th>
                                    <th title="Field #7">Sexe</th>
                                    <th title="Field #8">Enrégistré le :</th>
                                    <th title="Field #9">Consultation</th>
                                    <th title="Field #9">Traitement</th>
                                    <th title="Field #10">Ordonnance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient )
                                <tr>

                                    <td>{{$patient->nomp}}</td>
                                    <td>{{$patient->prenomp}}</td>
                                    <td>{{$patient->age}}</td>
                                    <td>{{$patient->tel}}</td>
                                    <td>{{$patient->sexe}}</td>
                                    <td>{{$patient->created_at}}</td>
                                    <td>
                                        <a class="fa fa-link" href="{{route('consultation', $patient->id)}}"></a>
                                        <a class="fa fa-edit" href=""></a>
                                    </td>
                                    <td>
                                        <a class="fa fa-link" href="{{route('traitement', $patient->id)}}"></a>
                                        <a class="fa fa-edit" href=""></a>
                                    </td>
                                    <td>
                                        <a class="fa fa-list-alt" href="{{route('ordonnance', $patient->id)}}"></a>
                                        <a class="fa fa-edit" href=""></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted font-weight-bold mr-2">2021©</span>
                <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Sharif</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Nav-->
            <div class="nav nav-dark order-1 order-md-2">
                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">A propos</a>
                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contacte</a>
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
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
<script src="assets/js/pages/crud/ktdatatable/base/html-table.js"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
