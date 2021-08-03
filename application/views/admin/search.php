<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1 mb-2">
                <div class="d-flex flex-column w-300">
                   <div class="input-icon input-icon-right mr-2">
                        <input type="text" class="form-control" placeholder="検索..." id="search" value="<?= $filter?>">
                        <span>
                            <i class="flaticon2-search-1 icon-md"></i>
                        </span>
                    </div>
                </div>
            
                <div class="d-flex align-items-center">
                    <!-- <a class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2" id="btn_search">検索</a> -->
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-5">トップ画面に戻る</a>
                <a href="<?=base_url()?>welcome/signout" class="btn btn-danger font-weight-bold py-3 px-6">ログアウト</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">検索結果</h3>
                    </div>
                    <div class="card-toolbar">
                        <!-- <h6>検索結果<strong style="color: red"></strong>件該当しました</h6> -->
                    </div>
                </div>
                <!-- <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable1" style="margin-top: 13px !important">
                       
                    </table>
                </div> -->
                <div class="card-body">
                                        <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <!-- <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    </div> -->
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>scripts/search.js"></script>