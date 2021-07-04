
<?php 
    $user["update_status"] = "1";
    $this->admin->updateData($user);
?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="検索..." id="search" onkeypress="goSearch(event)">
                        <span>
                            <i class="flaticon2-search-1 text-muted"></i>
                        </span>
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="<?=base_url()?>admin/products/edit" class="btn btn-transparent-white font-weight-bold py-3 px-6">新規</a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
           <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-psd text-primary"></i>
                        </span>
                        <h3 class="card-label">家族</h3>
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
            <div class="row">
                <div class="col-lg-12">
                <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Events
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="kt_calendar"></div>
                        </div>
                    </div>
                <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<link href="<?=asset_url()?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<script src="<?=asset_url()?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?=asset_url()?>/scripts/calendar.js"></script>
<script src="<?=asset_url()?>/scripts/landing.js"></script>
<script type="text/javascript">
    function goSearch(e){
        if (e.keyCode == 13) {
            window.location = "<?=base_url()?>admin/products/search?q=" + $("#search").val();
        }
    }
</script>
