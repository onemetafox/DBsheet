<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create PDF from View in CodeIgniter Example</title>

    <link href="<?=asset_url()?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url()?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 297mm;
                font-size: 15px;
                display:table;
                table-layout:fixed;
                font-size: 15px !important;
            }
            .d-flex{
                height: 170px;
            }
        }
        .content {
            padding: 7px;
            height: 15%;
            width: 100%;
        }
        @media print {
          section {page-break-before: always;}
        }
        p {
            font-size: 15px !important;
        }
    </style>
</head>

<body onload="window.print()" style="margin-left: 1.5cm; margin-bottom: 1.5cm;">
        <?php for ($i = 1 ; $i <= count($users); $i=$i+3 ) { ?>
            <?php if ($i % 8 == 1)  { ?>
                <section class="d-flex" style="margin-top: 10mm;">
                    <?php if ($i <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;"><?= $users[$i]["post_code"]?></p>
                            <p style="padding: 5px;"><?= $users[$i]["address"]?></p>
                            <p style="padding: 5px;"><b><?= $users[$i]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                    <?php if ($i+1 <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;"><?= $users[$i+1]["post_code"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><?= $users[$i+1]["address"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><b><?= $users[$i+1]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                    <?php if ($i+2 <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;" style="padding: 5px;"><?= $users[$i+2]["post_code"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><?= $users[$i+2]["address"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><b><?= $users[$i+2]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                </section>
            <?php } else { ?>
                <div class='d-flex'>
                    <?php if ($i <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;" style="padding: 5px;"><?= $users[$i]["post_code"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><?= $users[$i]["address"]?></p>
                            <p style="padding: 5px;" style="padding: 5px;"><b><?= $users[$i]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                    <?php if ($i+1 <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;"><?= $users[$i+1]["post_code"]?></p>
                            <p style="padding: 5px;"><?= $users[$i+1]["address"]?></p>
                            <p style="padding: 5px;"><b><?= $users[$i+1]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                    <?php if ($i+2 <= count($users)) { ?>
                        <div style="width: 30%;">
                            <p style="padding: 5px;"><?= $users[$i+2]["post_code"]?></p>
                            <p style="padding: 5px;"><?= $users[$i+2]["address"]?></p>
                            <p style="padding: 5px;"><b><?= $users[$i+2]["name"]?></b>&nbsp;&nbsp;&nbsp;様</p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
</body>
</html>