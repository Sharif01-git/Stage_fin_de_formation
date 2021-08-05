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
                        <h3 class="card-title">Ordonnance</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <!--begin: Code-->
                            <div class="example-code mb-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
                                </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_js">
                                        <div class="example-highlight">
                                            <pre style="height:400px">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Code-->
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Full Name:</label>
                                <div class="col-lg-4">
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Email address:</label>
                                <div class="col-lg-4">
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Contact</label>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-chain"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Phone number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-2 col-form-label text-right">Communication:</label>
                                <div class="col-xl-8 col-lg-8 col-sm-12 col-md-12 d-flex align-items-center">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                        <input type="checkbox" name="comm1_email" />
                                        <span></span>Email</label>
                                        <label class="checkbox">
                                        <input type="checkbox" name="comm1_sms" />
                                        <span></span>SMS</label>
                                        <label class="checkbox">
                                        <input type="checkbox" name="comm1_phone" />
                                        <span></span>Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-8"></div>
                            <div id="kt_repeater_1">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right">Contacts:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item="" class="form-group row align-items-center">
                                            <div class="col-md-3">
                                                <label>Name:</label>
                                                <input type="email" class="form-control" placeholder="Enter full name" />
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Number:</label>
                                                <input type="email" class="form-control" placeholder="Enter contact number" />
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" name="primary" checked="checked" />
                                                    <span></span>Primary</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                <i class="la la-trash-o"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                        <i class="la la-plus"></i>Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="reset" class="btn font-weight-bold btn-success mr-2">Soumettre</button>
                                    <button type="reset" class="btn font-weight-bold btn-secondary">Retour</button>
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
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
