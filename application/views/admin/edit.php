
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=asset_url()?>/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
<?php 
    $user["update_status"] = "2";
    $this->admin->updateData($user);
?>
<style type="text/css">
    
* {
    box-sizing: border-box;
}
.row > .column {
    padding: 0 8px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.column {
    float: left;
    width: 25%;
}

/* The Modal (background) */
#myModal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
}

/* Modal Content */
#myModal .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
}

/* The Close Button */
#myModal .close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

#myModal .close:hover,
#myModal .close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

#myModal .mySlides {
  display: none;
}

#myModal .cursor {
    cursor: pointer;
}

/* Next & previous buttons */
#myModal .prev,
#myModal .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
#myModal .next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
#myModal .prev:hover,
#myModal .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
#myModal .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

#myModal .caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

#myModal .demo {
  opacity: 0.6;
}

#myModal .active,
#myModal .demo:hover {
  opacity: 1;
}

#myModal img.hover-shadow {
  transition: 0.3s;
}

#myModal .hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#customer.active{
    color: #6993ff !important;
}
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <div class="input-icon">
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <?php if(isset($id)){?>
                    <a id="delete" class="btn btn-danger font-weight-bold py-3 px-6 mr-5">削 除</a>
                <?php } ?>
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6">トップ画面に戻る</a>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
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
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form class="pb-5 w-100 w-md-450px w-lg-1000px" novalidate="novalidate" id="kt_form">
                                    <input type="hidden" name="id" id="id" value="<?=isset($id)?$id:''?>">
                                    <!--begin: Wizard Step 1-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['name']:''?>" name="name" placeholder="名前"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['nick_name']:''?>" name="nick_name" placeholder="ふりがな"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="email" class="form-control" value="<?=isset($customer)?$customer['email']:''?>" name="email" inputmode="text" placeholder="メールアドレス"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['birthday']:''?>"  name="birthday" placeholder="生年月日"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <select class="form-control" name="sex">
                                                            <option value="1" <?=isset($customer) &&$customer['sex'] ==1?'selected':''?>>男</option>
                                                            <option value="2" <?=isset($customer) &&$customer['sex'] ==2?'selected':''?>>女</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['post_code']:''?>" name="post_code" inputmode="text" placeholder="郵便番号"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address']:''?>"  name="address" placeholder="住所"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"  placeholder="携帯電話1" value="<?=isset($customer)?$customer['mobile']:''?>" name="mobile" inputmode="text">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-mobile-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone4" placeholder="携帯電話2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="d-flex flex-grow-1 align-items-center rounded">
                                                        <div class="text-muted">お得意様</div>
                                                        <div class="mr-4 flex-shrink-0 text-center ml-10" style="width: 40px;" onclick="setCustomer()">
                                                            <i id="customer"  class="icon-2x  flaticon-star <?=isset($customer)&&($customer["customer"]=="2")?'active':'text-dark-50'?>"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone1" placeholder="電話自宅1"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone2']:''?>" name="phone2" placeholder="電話自宅2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="button" name="saveUser" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3">基本情報保管
                                           </button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">家族</h3>
                                            </div>
                                            <div class="card-toolbar">
                                               <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_family">+ 追加</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-bordered table-hover table-checkable" id="kt_family_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">購入履歴</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="javascript:showPurchase()" class="btn btn-light-primary font-weight-bolder btn-sm mr-5 btn-purchase">非表示</a>
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_product">+ 追加</a>
                                            </div>
                                        </div>
                                        <div class="card-body purchase collapse show">
                                            <!--begin: Datatable-->
                                            <table class="table table-separate table-head-custom table-foot-custom table-checkable" id="kt_product_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>  
                                    <div style="display:none;" id="detail_div">
                                        
                                    </div>
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">写真</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_photo">+ 追加</a>
                                            </div>
                                        </div>
                                        <div class="d-flex card-body justify-content-left flex-wrap photo-container">
                                            <?php if (isset($images)){
                                                end($images); 
                                                $key = key($images); 

                                                if($key >12){ 
                                                    $count = $key;
                                                }else{
                                                    $count = 12;
                                                } 
                                            } else{
                                                $count = 12;
                                            } ?>
                                            <?php for ($i = 1; $i <= $key; $i++){ ?>
                                                <div class="image-input image-input-outline m-5" id="kt_image_<?=$i?>" style="background-image: url(<?=asset_url()?>media/users)">
                                                    <div class="image-<?=$i?> image-input-wrapper" onclick="openModal();currentSlide(<?=$i?>)" style="background-image: url(<?=upload_url()?><?=isset($images->$i)?$images->$i:''?>);background-size: contain;"></div>

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="アバターを変更する">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" id = "profile_avatar_<?=$i?>" name="profile_avatar_<?=$i?>" accept=".heic, .jpg, .jpeg, .tiff"/>
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="アバターをキャンセルする">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" onclick="removeImg(<?=$i?>)" data-action="remove" data-toggle="tooltip" title="アバターを削除する">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">備考</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="javascript:showExtend()" class="btn btn-light-primary font-weight-bolder btn-sm mr-5  btn-extend">表示</a>
                                            </div>
                                        </div>
                                        <div class="card-body extend collapse">
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">趣 味</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="extend[hobby]" id="hobby">
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
                                                            <select class="form-control" name="extend[habit]" id="habit">
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
                                                            <select class="form-control" name="extend[age]" id="age">
                                                                <option value=""></option>
                                                                <option value="～20代" <?=isset($customer)&&($customer["age"]=="～20代")?'selected':''?>>～20代</option>
                                                                <option value="30代" <?=isset($customer)&&($customer["age"]=="30代")?'selected':''?>>30代 </option>
                                                                <option value="40代" <?=isset($customer)&&($customer["age"]=="40代")?'selected':''?>>40代 </option>
                                                                <option value="50代" <?=isset($customer)&&($customer["age"]=="50代")?'selected':''?>>50代 </option>
                                                                <option value="60代" <?=isset($customer)&&($customer["age"]=="60代")?'selected':''?>>60代 </option>
                                                                <option value="70代～" <?=isset($customer)&&($customer["age"]=="70代～")?'selected':''?>>70代～</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">体 型</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="extend[body]" id="body">
                                                                <option value=""></option>
                                                                <option value="細" <?=isset($customer)&&($customer["body"]=="細")?'selected':''?>>細</option>
                                                                <option value="普" <?=isset($customer)&&($customer["body"]=="普")?'selected':''?>>普 </option>
                                                                <option value="太" <?=isset($customer)&&($customer["body"]=="太")?'selected':''?>>太 </option>
                                                                <option value="もっと太め" <?=isset($customer)&&($customer["body"]=="もっと太め")?'selected':''?>>もっと太め </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">色の好み</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" name="extend[color]" id="color">
                                                                <option value=""></option>
                                                                <option value="青系" <?=isset($customer)&&($customer["color"]=="青系")?'selected':''?>>青系</option>
                                                                <option value="赤系" <?=isset($customer)&&($customer["color"]=="赤系")?'selected':''?>>赤系 </option>
                                                                <option value="黄系" <?=isset($customer)&&($customer["color"]=="黄系")?'selected':''?>>黄系 </option>
                                                                <option value="みどり系" <?=isset($customer)&&($customer["color"]=="みどり系")?'selected':''?>>みどり系 </option>
                                                                <option value="黒" <?=isset($customer)&&($customer["color"]=="黒")?'selected':''?>>黒 </option>
                                                                <option value="淡色" <?=isset($customer)&&($customer["color"]=="淡色")?'selected':''?>>淡色</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">性 格</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" name="extend[etc]" id="etc">
                                                                <option value=""></option>
                                                                <option value="せっかち" <?=isset($customer)&&($customer["etc"]=="せっかち")?'selected':''?>>せっかち</option>
                                                                <option value="細かい" <?=isset($customer)&&($customer["etc"]=="細かい")?'selected':''?>>細かい </option>
                                                                <option value="穏やか" <?=isset($customer)&&($customer["etc"]=="穏やか")?'selected':''?>>穏やか </option>
                                                                <option value="大雑把" <?=isset($customer)&&($customer["etc"]=="大雑把")?'selected':''?>>大雑把 </option>
                                                                <option value="金額にシビア" <?=isset($customer)&&($customer["etc"]=="金額にシビア")?'selected':''?>>金額にシビア </option>
                                                                <option value="沢山相談し" <?=isset($customer)&&($customer["etc"]=="沢山相談し")?'selected':''?>>沢山相談し</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">好 み</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="extend[active]" id="active">
                                                                <option value=""></option>
                                                                <option value="かわいい" <?=isset($customer)&&($customer["active"]=="かわいい")?'selected':''?>>かわいい</option>
                                                                <option value="きれい" <?=isset($customer)&&($customer["active"]=="きれい")?'selected':''?>>きれい </option>
                                                                <option value="シック" <?=isset($customer)&&($customer["active"]=="シック")?'selected':''?>>シック </option>
                                                                <option value="渋め" <?=isset($customer)&&($customer["active"]=="渋め")?'selected':''?>>渋め </option>
                                                                <option value="粋" <?=isset($customer)&&($customer["active"]=="粋")?'selected':''?>>粋 </option>
                                                                <option value="古典" <?=isset($customer)&&($customer["active"]=="古典")?'selected':''?>>古典</option>
                                                            </select>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">備考欄</label>
                                                        <div class="col-sm-8">
                                                            <textarea rows = "5" class="form-control form-control-solid form-control-lg" name="extend[extra]"  id="extra"><?=isset($customer)?$customer['extra']:''?></textarea> 
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer extend collapse">
                                            <div class="card-toolbar float-right">
                                               <a href="javascript:saveData()"class="btn btn-light-primary font-weight-bolder btn-sm" id="save_detail">保 存</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--begin: Wizard Actions-->
                                    <div class="justify-content-between pt-3 text-right" style="text-align: right;">
                                        <div>
                                            <button type="button"  id="confirm"  class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" >更 新
                                           </button>
                                            
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
    <!--begin::Modal-->
</div>
<div class="modal fade" id="kt_family_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">家族/追加・更新</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_family_form">
                <input type="hidden" name="family_id" id="family_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">名 前</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="name" id="name" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">ふりがな</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="nick_name" id="nick_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">生年月日</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="birthday" id="birthday" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">性 別</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" name="sex" id="sex">
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">続柄</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="content" id="content" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
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
<!--begin::Modal-->
<div class="modal fade" id="kt_product_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">購入履歴/追加・更新</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_product_form">
                <input type="hidden" name="product_id" id="product_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">家族</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" id="user_name" name="user_name">
                                
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上日</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="date" id="date" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上品</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="name" id="name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">名前</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" id="user_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上金額(円)</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="price" id="price" type="number" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                   <!--  <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Etc</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="etc" id="etc" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">特殊加工</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="content" id="content" value="">
                            <div class="fv-plugins-message-container"></div>
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
<div class="modal fade" id="kt_confirm_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">確 認</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_confirm_form">
                <input type="hidden" name="decide" id="decide">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">I D</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="admin_id" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Password</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="password" class="form-control form-control-solid form-control-lg" name="password" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
            <button type="submit" class="btn btn-primary px-15">送信</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_password_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">パスワード（4桁）を入力してください</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_password_form">
                <input type="hidden" name="show_type">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-12 input-group">
                            <input type="password" class="form-control col-md-9" maxlength="4" placeholder="パスワード（4桁）を入力してください" name="digit_pwd"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary px-15">確認</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="myModal" class="img_modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
         <?php if (isset($images)){
            end($images); 
            $key = key($images); 

            if($key >12){ 
                $count = $key;
            }else{
                $count = 12;
            } 
        } else{
            $count = 12;
        } ?>
        <?php for ($i = 1; $i <= $key; $i++){ ?>
            <div class="mySlides">
                <img src="<?=upload_url()?><?=isset($images->$i)?$images->$i:''?>" style="width:100%">
            </div>
        <?php } ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="caption-container">
            <p id="caption"></p>
        </div>
    </div>
</div>
    <!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>/scripts/edit_family.js"></script>
<script src="<?=asset_url()?>/scripts/edit_product.js"></script>
<script src="<?=asset_url()?>/scripts/edit.js"></script>
<script src="<?=asset_url()?>/scripts/image_input.js"></script>
