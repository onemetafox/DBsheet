
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
<div class="card card-custom gutter-b">
    <div class="d-flex card-body justify-content-between flex-wrap">
        <?php for ($i = 1; $i <= 8; $i++){ ?>
            <div class="image-input image-input-outline m-5" id="kt_image_<?=$i?>" style="background-image: url(<?=asset_url()?>media/users/blank.png)">
                <div class="image-<?=$i?> image-input-wrapper" style="background-image: url(<?=upload_url()?><?=isset($images->$i)?$images->$i:''?>)"></div>

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
        <div class="form-group row">
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-3">趣 味</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="hobby">
                            <option value=""></option>
                            <option value="歌舞伎" <?=isset($customer)&&($customer["hobby"]=="歌舞伎")?'selected':''?>>歌舞伎</option>
                            <option value="能" <?=isset($customer)&&($customer["hobby"]=="能")?'selected':''?>>能</option>
                            <option value="文楽" <?=isset($customer)&&($customer["hobby"]=="文楽")?'selected':''?>>文楽 </option>
                            <option value="落語" <?=isset($customer)&&($customer["hobby"]=="落語")?'selected':''?>>落語 </option>
                            <option value="美術・工芸品" <?=isset($customer)&&($customer["hobby"]=="美術・工芸品")?'selected':''?>>美術・工芸品</option>
                        </select>
                        <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value="" required> -->
                        <div class="fv-plugins-message-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-4">習い事</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="habit">
                            <option value=""></option>
                            <option value="着付" <?=isset($customer)&&($customer["habit"]=="着付")?'selected':''?>>着付</option>
                            <option value="和裁" <?=isset($customer)&&($customer["habit"]=="和裁")?'selected':''?>>和裁 </option>
                            <option value="茶道" <?=isset($customer)&&($customer["habit"]=="茶道")?'selected':''?>>茶道 </option>
                            <option value="華道" <?=isset($customer)&&($customer["habit"]=="華道")?'selected':''?>>華道 </option>
                            <option value="三味線" <?=isset($customer)&&($customer["habit"]=="三味線")?'selected':''?>>三味線 </option>
                            <option value="琴" <?=isset($customer)&&($customer["habit"]=="琴")?'selected':''?>>琴</option>
                        </select>
                        <div class="fv-plugins-message-container"></div>
                    </div>    
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-4">年 代</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" value="<?=isset($customer)?$customer['age']:''?>" name="age" placeholder="年 代"/>
                        <div class="fv-plugins-message-container"></div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-3">体 型</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['body']:''?>" name="body" placeholder="体 型"/>
                        <div class="fv-plugins-message-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-4">色の好み</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['color']:''?>" name="color" placeholder="色の好み"/>
                        <div class="fv-plugins-message-container"></div>
                    </div>    
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="input-group">
                    <label class="col-form-label text-right col-sm-4">好 み</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['etc']:''?>" name="etc" placeholder="好み"/>
                        <div class="fv-plugins-message-container"></div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="card-toolbar float-right">
           <a href="javascript:saveData()"class="btn btn-light-primary font-weight-bolder btn-sm" id="save_detail">保 存</a>
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