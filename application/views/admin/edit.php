
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=asset_url()?>/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
<?php 
    $user["update_status"] = "2";
    $this->admin->updateData($user);
?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card Body-->
                <div class="card-body p-0">
                    <!--begin::Wizard 5-->
                    <div class="wizard wizard-5 d-flex flex-column flex-lg-row flex-row-fluid" id="kt_wizard">
                        <!--begin::Aside-->
                        <div class="wizard-aside bg-white d-flex flex-column flex-row-auto w-100 w-lg-300px w-xl-400px w-xxl-250px">
                            <!--begin::Aside Top-->
                            <div class="d-flex flex-column-fluid flex-column px-10">
                                <!--begin: Wizard Nav-->
                                <div class="wizard-nav d-flex d-flex justify-content-center pt-10 pt-lg-20 pb-5">
                                    <!--begin::Wizard Steps-->
                                    <div class="wizard-steps">
                                        <!--begin::Wizard Step 1 Nav-->
                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">1</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">Account Settings</h3>
                                                    <div class="wizard-desc">Setup Your Account Details</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 1 Nav-->
                                        <!--begin::Wizard Step 2 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">2</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">Address Details</h3>
                                                    <div class="wizard-desc">Setup Residence Address</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 2 Nav-->
                                        <!--begin::Wizard Step 3 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">3</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">Completed!</h3>
                                                    <div class="wizard-desc">Review and Submit</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 3 Nav-->
                                    </div>
                                    <!--end::Wizard Steps-->
                                </div>
                                <!--end: Wizard Nav-->
                            </div>
                            <!--end::Aside Top-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form class="pb-5 w-100 w-md-450px w-lg-500px" novalidate="novalidate" id="kt_form">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter full name"/>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <input type="text" class="form-control" name="nick_name" placeholder="Enter nick name"/>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <input type="email" class="form-control" name="email" placeholder="Enter contact email"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="address" name="address" placeholder="Enter your address"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="post_code" placeholder="Enter your postcode"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-mobile-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="sex" placeholder="Enter your sexual"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="phone" placeholder="Enter your tel"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="birdthday" placeholder="Enter your birthday"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="card card-custom gutter-b">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <!-- <span class="card-icon">
                                                        <i class="flaticon2-psd text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">家族</h3> -->
                                                </div>
                                                <div class="card-toolbar">
                                                    <!--begin::Button-->
                                                    <a href="#" class="btn btn-primary font-weight-bolder">
                                                    <i class="la la-plus"></i>New Record</a>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Nick Name</th>
                                                            <th>Ship City</th>
                                                            <th>Birthday</th>
                                                            <th>Sexual</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <!--end: Datatable-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="card card-custom gutter-b">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <!-- <span class="card-icon">
                                                        <i class="flaticon2-psd text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">家族</h3> -->
                                                </div>
                                                <div class="card-toolbar">
                                                    <!--begin::Button-->
                                                    <a href="#" class="btn btn-primary font-weight-bolder">
                                                    <i class="la la-plus"></i>New Record</a>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Nick Name</th>
                                                            <th>Ship City</th>
                                                            <th>Birthday</th>
                                                            <th>Sexual</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <!--end: Datatable-->
                                            </div>
                                        </div>  
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between pt-3">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
                                            <span class="svg-icon svg-icon-md mr-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                                        <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>Previous</button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit">Submit
                                            <span class="svg-icon svg-icon-md ml-2">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span></button>
                                            <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Next Step
                                            <span class="svg-icon svg-icon-md ml-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span></button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wizard 5-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    
    <!--end::Entry-->
</div>
    <!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>/scripts/edit.js"></script>
<script src="<?=asset_url()?>js/pages/custom/wizard/wizard-5.js"></script>
