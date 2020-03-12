<?php
    $fname = "";
    $lname = "";
    if (!empty($_POST["fname"])) { $fname = $_POST["fname"]; }
    if (!empty($_POST["lname"])) { $lname = $_POST["lname"]; }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Taviraj&display=swap" rel="stylesheet">
	<style>
        body {
            font-family: 'Taviraj', serif;
            font-size: 2.4em;
            white-space: nowrap;
            color: #000000;
        }
        .txt_date { top: 240px; left: 865px; position: absolute; font-size: 1.2em; }
        .txt_name { position: absolute; top: 305px; left: 444px; }
        .txt_addr { position: absolute; top: 355px; left: 200px; }
        .txt_road { position: absolute; top: 355px; left: 920px; }
        .txt_tambon { position: absolute; top: 410px; left: 120px; }
        .txt_ampher { position: absolute; top: 410px; left: 380px; }
        .txt_province { position: absolute; top: 410px; left: 680px; }
        .txt_mobile { position: absolute; top: 410px; left: 960px; }
        .txt_amt { position: absolute; top: 480px; left: 200px; font-size: 1.2em; }
        .txt_amt_desc { position: absolute; top: 485px; left: 560px; }
        .txt_brand { position: absolute; top: 530px; left: 320px; font-size: 1.2em; }
        .txt_model { position: absolute; top: 535px; left: 720px; }
        .txt_color { position: absolute; top: 535px; left: 1100px; }
        .txt_serial { position: absolute; top: 590px; left: 170px; }
        .txt_tank { position: absolute; top: 590px; left: 770px; }
        .txt_receiver { position: absolute; top: 650px; left: 260px; }
        .txt_finance { position: absolute; top: 705px; left: 240px; }
        .txt_period { position: absolute; top: 705px; left: 740px; }
        .txt_loan { position: absolute; top: 705px; left: 1040px; }
        .txt_remark { position: absolute; top: 805px; left: 240px; }
	</style>
</head>
<body>
    <div id="myDiv">
    <img id="myImg" src="bill_white.jpg">
        <div class="txt_date">
            <?php
                date_default_timezone_set("Asia/Bangkok");
                $month = array("ม.ค.", "ก.พ.", "มี.ค.", "เม.ษ.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
                echo date("d") . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $month[date("m")-1] . 
                "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . substr(date("Y")+543, 2);
            ?>
        </div>
    </img>
    <div class="txt_name"><?php echo $fname . " " . $lname; ?></div>
    <div class="txt_addr">200 หมู่ 4 อาคารจัสมินอินเตอร์เนชั่นแนล</div>
    <div class="txt_road">แจ้งวัฒนะ</div>
    <div class="txt_tambon">ปากเกร็ด</div>
    <div class="txt_ampher">ปากเกร็ด</div>
    <div class="txt_province">นนทบุรี</div>
    <div class="txt_mobile">0801234567</div>
    <div class="txt_amt">ฟรีดาวน์</div>
    <div class="txt_amt_desc">ฟรีทะเบียน ฟรีพรบ. ฟรีประกันรถหาย 1 ปี</div>
    <div class="txt_brand">YAMAHA</div>
    <div class="txt_model">CBF150NAJTH</div>
    <div class="txt_color">ดำ</div>
    <div class="txt_serial">KC32E-0017055</div>
    <div class="txt_tank">MLHKC288XJ5017055</div>
    <div class="txt_receiver">จิราพรรณ์</div>
    <div class="txt_finance">อยุธยา</div>
    <div class="txt_period">36</div>
    <div class="txt_loan">4,456</div>
    <div class="txt_remark">แถมหมวก 1 ใบ แถมเสื้อ 1 ตัว</div>
    </div>
    <div id="copyDiv"></div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="html2canvas.min.js"></script>
    <script>
        function resize() {
            var canvas = document.getElementById('myCanvas');
            var canvasRatio = canvas.height / canvas.width;
            var windowRatio = window.innerHeight / window.innerWidth;
            var width;
            var height;
            if (windowRatio < canvasRatio) {
                height = window.innerHeight;
                width = height / canvasRatio;
            } else {
                width = window.innerWidth;
                height = width * canvasRatio;
            }
            canvas.style.width = width + 'px';
            canvas.style.height = height + 'px';
            window.addEventListener('resize', resize, false);
        };
        $(function() {
            html2canvas($("body")[0]).then(function(canvas) {
                $("#copyDiv").append(canvas);
                $("#myDiv").hide();
                $("#copyDiv canvas").attr("id", "myCanvas");
                resize();
            });
        });
    </script>
</body>
</html>

