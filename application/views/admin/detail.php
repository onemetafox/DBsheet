
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="card card-custom gutter-b">
    
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
            </span>
        </div>
        <div class="card-toolbar">
            <span class="switch switch-icon">
                <span class="mr-2">制作中</span>
                <label>
                    <input type="checkbox" name="making" onchange="setMaking(this.value)">
                    <span></span>
                </label>
            </span>
           <!-- <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="setMaking">制作中</a> -->
           <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="setDate">完成予定日</a>
           <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="new_detail">+ 追加</a>
           <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="del_detail">- 削除</a>
           <a class="btn btn-light-primary font-weight-bolder btn-sm mr-5" id="edit_detail"> 編集</a>
        </div>
    </div>
    <div class="card-body">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link " id="ex1-tab-1" data-mdb-toggle="tab" href="javascript:switchView(1)" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
                cm
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex1-tab-2" data-mdb-toggle="tab" href="javascript:switchView(2)" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
                尺寸
            </a>
          </li>
        </ul>
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show " id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1" >
                <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important"></table>
            </div>
            <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
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
                <input type="hidden" name="product_id" id="product_id" value="<?=$product_id?>">
                <input type="hidden" name="user_id" id="user_id" value="<?=$user_id?>">
                <div class="modal-body">
                       
                    <div class="form-group row">
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">丈(背)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id = "h-back" name="hope[back]" placeholder="希望寸法"/>    
                                    <input type="text" class="form-control mt-2" id = "r-back" name="real[back]" placeholder="実寸"/>   
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">丈(肩)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id = "h-shoulder" name="hope[shoulder]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-shoulder" name="real[shoulder]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                             <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">裄</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-yuki" name="hope[yuki]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-yuki" name="real[yuki]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">肩巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-shawl" name="hope[shawl]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-shawl" name="real[shawl]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">袖巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-sleeve_width" name="hope[sleeve_width]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-sleeve_width" name="real[sleeve_width]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">袖丈</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-sleeve_length" name="hope[sleeve_length]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-sleeve_length" name="real[sleeve_Length]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">袖付</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-with_sleeves" name="hope[with_sleeves]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-with_sleeves" name="real[with_sleeves]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">前巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"id="h-front_width" name="hope[front_width]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-front_width" name="real[front_width]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">後巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-back_width" name="hope[back_width]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-back_width" name="real[back_width]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">褄下</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-under_hood" name="hope[under_hood]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-under_hood" name="real[under_hood]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">抱巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-hug" name="hope[hug]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-hug" name="real[hug]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">衽巾</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-width" name="hope[width]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-width" name="real[width]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">繰越</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-carry_forward" name="hope[carry_forward]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-carry_forward" name="real[carry_forward]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">ヒップ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-hips" name="hope[hips]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-hips" name="real[hips]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">バスト</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-bust" name="hope[bust]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-bust" name="real[bust]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">ウエスト</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-west" name="hope[west]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-west" name="real[west]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">身長</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id = "h-height" name="hope[height]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-height" name="real[height]" placeholder="実寸"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <div class="input-group">
                                <label class="col-form-label text-right col-sm-4">備考</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="h-remark" name="hope[remark]" placeholder="希望寸法"/>
                                    <input type="text" class="form-control mt-2" id="r-remark" name="real[remark]" placeholder="実寸"/>
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