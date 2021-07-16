
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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


<div class="modal fade" id="kt_detail_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" style = "max-width: 1600px;"role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">寸法編集</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_detail_form">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-psd text-primary"></i>
                                    </span>
                                    <h3 class="card-label">希望寸法</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">丈(背)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[back]" placeholder="丈(背)"/>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">丈(肩)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[shoulder]" placeholder="丈(肩)"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                     <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">裄</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[yuki]" placeholder="裄"/>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">肩巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[shawl]" placeholder="肩巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[sleeve_width]" placeholder="袖巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖丈</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[sleeve_Length]" placeholder="袖丈"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖付</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[with_sleeves]" placeholder="袖付"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">前巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[front_width]" placeholder="前巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">後巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[back_width]" placeholder="後巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">褄下</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[under_hood]" placeholder="褄下"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">抱巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[hug]" placeholder="抱巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">衽巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[width]" placeholder="衽巾"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">繰越</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[carry_forward]" placeholder="繰越"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">ヒップ</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[hips]" placeholder="ヒップ"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">バスト</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[bust]" placeholder="バスト"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">ウエスト</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[west]" placeholder="ウエスト"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">身長</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="hope[height]" placeholder="身長"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-psd text-primary"></i>
                                    </span>
                                    <h3 class="card-label">実寸</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">丈(背)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[back]" placeholder="丈(背)"/>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">丈(肩)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[shoulder]" placeholder="丈(肩)"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                     <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">裄</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[yuki]" placeholder="裄"/>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">肩巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[shawl]" placeholder="肩巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[sleeve_width]" placeholder="袖巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖丈</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[sleeve_Length]" placeholder="袖丈"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">袖付</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[with_sleeves]" placeholder="袖付"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">前巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[front_width]" placeholder="前巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">後巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[back_width]" placeholder="後巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">褄下</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[under_hood]" placeholder="褄下"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">抱巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[hug]" placeholder="抱巾"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">衽巾</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[width]" placeholder="衽巾"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">繰越</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[carry_forward]" placeholder="繰越"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">ヒップ</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[hips]" placeholder="ヒップ"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">バスト</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[bust]" placeholder="バスト"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">ウエスト</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[west]" placeholder="ウエスト"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-2">
                                    <div class="input-group">
                                        <label class="col-form-label text-right col-sm-4">身長</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="real[height]" placeholder="身長"/>
                                        </div>
                                    </div>
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