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
            }
        }
        .content {
            padding: 7px;
            height: 15%;
            width: 100%;

        }
        @media print {
            tr.page-break  { display: inline; page-break-before: always; }
            tr>td{
                width: 30%;
            }
            table { page-break-inside:auto }
        } 
    </style>
</head>
<body onload="window.print()" style=" margin-top: 1.27cm; margin-bottom: 1.31cm;">
    <div class="container">
        <table>
            <?php for ($i = 1 ; $i <= count($users); $i = $i +3 ){ ?>        
            <tr class = "<?= $i % 8 == 0?'page-break1':''?>">
                <td>
                    <div class="content">
                        <p><?= $users[$i]["post_code"]?></p>
                        <p><?= $users[$i]["address"]?></p>
                        <p><?= $users[$i]["name"]?></p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p><?= $users[$i+1]["post_code"]?></p>
                        <p><?= $users[$i+1]["address"]?></p>
                        <p><?= $users[$i+1]["name"]?></p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p><?= $users[$i+2]["post_code"]?></p>
                        <p><?= $users[$i+2]["address"]?></p>
                        <p><?= $users[$i+2]["name"]?></p>
                    </div>
                </td>
            </tr>

            <!-- <div class="content">
                <p><?= $users[$i]["post_code"]?></p>
                <p><?= $users[$i]["address"]?></p>
                <p><?= $users[$i]["name"]?></p>
            </div> -->
            <?php } ?>
        </table>
    </div>
</body>
</html>