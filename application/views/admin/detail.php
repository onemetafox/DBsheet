
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5"><?=$product["name"]?></h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a  class="text-white text-hover-white opacity-75 hover-opacity-100"><?= $product["content"]?></a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <div class="d-flex align-items-center">
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-5">トップ画面に戻る</a>
                <a href="<?=base_url()?>admin/product/edit/<?=$user_id?>" class="btn btn-transparent-white font-weight-bold py-3 px-6">戻る</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom gutter-b">
                <input type="hidden" name="product_id" id="product_id" value="<?=$product_id?>">
                <input type="hidden" name="user_id" id="user_id" value="<?=$user_id?>">
                <div class="card-header">
                    <div class="card-toolbar">
                       <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="setMaking">制作中</a>
                       <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="setDate">完成予定日</a>
                       <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="new_detail">+ 追加</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs navs -->
                    <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="javascript:switchView(1)" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
                            cm表示
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="javascript:switchView(2)" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
                            鯨尺表示
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content" id="ex1-content">
                        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1" >
                            <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important"></table>
                        </div>
                        <div class="tab-pane fade show" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                            <table class="table table-bordered table-hover table-checkable" id="kt_datatable_1" style="margin-top: 13px !important;"></table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom gutter-b">
                <div class="d-flex card-body justify-content-between flex-wrap">
                    <?php for ($i = 1; $i <= 8; $i++){ ?>
                        <div class="image-input image-input-outline m-5" id="kt_image_<?=$i?>" style="background-image: url(<?=asset_url()?>media/users/blank.png)">
                            <div class="image-<?=$i?> image-input-wrapper" style="background-image: url(<?=upload_url()?><?=isset($images[$i-1])?$images[$i-1]:''?>)"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="アバターを変更する">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" id = "profile_avatar_<?=$i?>" name="profile_avatar_<?=$i?>" accept=".heic, .jpg, .jpeg, .tiff"/>
                                <input type="hidden" name="profile_avatar_remove"/>
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="アバターをキャンセルする">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="アバターを削除する">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
            <div class="card card-custom gutter-b">
                <input type="hidden" name="product_id" id="product_id" value="<?=$product_id?>">
                <input type="hidden" name="user_id" id="user_id" value="<?=$user_id?>">
                
                <div class="card-body">
                    <textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 147px;"><?=$remark?></textarea>
                </div>
                <div class="card-footer">
                    <div class="card-toolbar float-right">
                       <a href="javascript:saveData()"class="btn btn-light-primary font-weight-bolder btn-sm" id="save_detail">保 存</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_detail_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">詳細を編集</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_detail_form">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">丈(背)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="back" placeholder="丈(背)"/>    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">丈(肩)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="shoulder" placeholder="丈(肩)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                             <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">裄</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="yuki" placeholder="裄"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">肩巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="shawl" placeholder="肩巾"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">袖巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sleeve_width" placeholder="袖巾"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">袖丈</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sleeve_Length" placeholder="袖丈"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">袖付</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="with_sleeves" placeholder="袖付"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">前巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="front_width" placeholder="前巾"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">後巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="back_width" placeholder="後巾"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">褄下</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="under_hood" placeholder="褄下"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">抱巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="hug" placeholder="抱巾"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">衽巾</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="width" placeholder="衽巾"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">繰越</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="carry_forward" placeholder="繰越"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">ヒップ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="hips" placeholder="ヒップ"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">バスト</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="bust" placeholder="バスト"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">ウエスト</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="west" placeholder="ウエスト"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-3">身長</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="height" placeholder="身長"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
                <button type="submit" class="btn btn-primary px-15">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_delivery_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">詳細を編集</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_date_form">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-12 input-group">
                            <label class="col-form-label text-right col-md-3">完成予定</label>
                            <input type="text" class="form-control col-md-9" name="delivery_date"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary px-15">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>scripts/detail.js"></script>
<script src="<?=asset_url()?>scripts/image_input.js"></script>