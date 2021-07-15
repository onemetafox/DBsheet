<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create PDF from View in CodeIgniter Example</title>
    <style type="text/css">
       *{ font-family: MS PMincho; font-size: 18px;}
       @page {
            size: A4 portrait;
            margin: 0;
        }
    </style>

</head>
<body onload="window.print()">
    <div style="margin-top: 350px;">
        <div  name="detail">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column"   style="text-align: center;">
                <div style="margin: auto;  text-align: left; width: 265px; height: 113px;">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center pr-2 mb-6">
                        <span class="text-muted font-weight-bold font-size-lg flex-grow-1" name="date"><?=$user["post_code"]?></span>
                    </div>
                    <!--end::Info-->
                    <p class="text-dark font-weight-bolder text-hover-primary font-size-h4" name="title" ><?= $user["address"]?>
                    </p>
                    <!--begin::Desc-->
                    <p class="text-dark-50 font-weight-normal font-size-lg mt-6" name="content"><b style="font-size : 22"><?=$user["name"]?></b>様
                    </p>
                    <!--end::Desc-->
                </div>
            </div>
            <!--end::Body-->
        </div>
    </div>
</body>
</html>