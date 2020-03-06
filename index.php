<?php
    $mkt_name = "
    { label: 'Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทเท้า ดรัมเบรก)', category: 'HONDA', modelId: 'AFS110KDFL2TH', cc: 110, cash: 37500, cost: 35700, gePrice: 44500, tlPrice: 44500 },
    { label: 'Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทเท้า ดิสก์เบรกหน้า)', category: 'HONDA', modelId: 'AFS110KSFLTH', cc: 110, cash: 41000, cost: 39300, gePrice: 49900, tlPrice: 49800 },
    { label: 'Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทมือ ดิสก์เบรกหน้า)', category: 'HONDA', modelId: 'AFS110MSFLTH', cc: 110, cash: 44000, cost: 42000, gePrice: 51900, tlPrice: 51800 },
    { label: 'Wave110I (เวฟ 110ไอ ล้อแม๊ก สตาร์ทมือ ดิสก์เบรกหน้า)', category: 'HONDA', modelId: 'AFS110MCFLTH', cc: 110, cash: 45500, cost: 43900, gePrice: 54400, tlPrice: 54300 },
    { label: 'WAVE 125I (เวฟ 125 ไอ ล้อซี่ลวด สตาร์ทมือ ดิสก์เบรกหน้า)', category: 'HONDA', modelId: 'AFS125MSFLTH', cc: 125, cash: 54500, cost: 53000, gePrice: 59600, tlPrice: 59500 },
    { label: 'WAVE 125I (เวฟ 125 ไอ ล้อแม็ก สตาร์ทมือ ดิสก์เบรกหน้า)', category: 'HONDA', modelId: 'AFS125CSFLTH', cc: 125, cash: 57500, cost: 56000, gePrice: 62000, tlPrice: 61900 },
    { label: 'Scoopy I Urban Team (ล้อซี่ลวด คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACF110BTKTH', cc: 110, cash: 48400, cost: 46400, gePrice: 55200, tlPrice: 54300 },
    { label: 'Scoopy I Prestige (ล้อซี่ลวด คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACF110BTK2TH', cc: 110, cash: 48900, cost: 46900, gePrice: 55700, tlPrice: 54800 },
    { label: 'Scoopy I CLUB 12 (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACF110CBTKTH', cc: 110, cash: 52000, cost: 49900, gePrice: 60500, tlPrice: 60500 },
    { label: 'Scoopy I KUMAMON SPECIAL EDITION (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACF110CBTK2TH', cc: 110, cash: 54500, cost: 52200, gePrice: 56500, tlPrice: 63000 },
    { label: 'CLICK150I (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACB150CBTLTH', cc: 150, cash: 61500, cost: 59000, gePrice: 69600, tlPrice: 69500 },
    { label: 'CLICK125I (ล้อซี่ลวด คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACB125BTLTH', cc: 125, cash: 51500, cost: 49400, gePrice: 58500, tlPrice: 58500 },
    { label: 'CLICK125I (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACB125CBTLTH', cc: 125, cash: 55000, cost: 53200, gePrice: 61500, tlPrice: 61500 },
    { label: 'Zoomer-X (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'ACG110CBTLTH', cc: 110, cash: 56000, cost: 53600, gePrice: 62100, tlPrice: 62000 },
    { label: 'MSX125 H', category: 'HONDA', modelId: 'MSX125JTH', cc: 125, cash: 67500, cost: 66500, gePrice: 78500, tlPrice: 78500 },
    { label: 'MSX125 AH', category: 'HONDA', modelId: 'MSX125AJTH', cc: 125, cash: 74500, cost: 73500, gePrice: 86200, tlPrice: 86000 },
    { label: 'PCX 150 (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'WW150LTH', cc: 150, cash: 97500, cost: 91000, gePrice: 97500, tlPrice: 97500 },
    { label: 'PCX HYBRID (ล้อแม็ก คอมบายเบรก Idling Stop)', category: 'HONDA', modelId: 'WW150HVJTH', cc: 150, cash: 114000, cost: 106000, gePrice: 114000, tlPrice: 114000 },
    { label: 'CBR150R (ล้อแม็ก ดิสก์เบรก)', category: 'HONDA', modelId: 'CBR150RKTH', cc: 150, cash: 92570, cost: 87500, gePrice: 94500, tlPrice: 94500 },
    { label: 'CBR150R (ล้อแม็ก ดิสก์เบรก ABS)', category: 'HONDA', modelId: 'CBR150RAK3TH', cc: 150, cash: 99610, cost: 94000, gePrice: 100900, tlPrice: 109000 },
    { label: 'CBR150R (ล้อแม็ก ดิสก์เบรก ABS)', category: 'HONDA', modelId: 'CBR150RAK5TH', cc: 150, cash: 99610, cost: 94000, gePrice: 100900, tlPrice: 109000 },
    { label: 'CB150R (ล้อแม็ก ดิสก์เบรก)', category: 'HONDA', modelId: 'CBF150NKTH', cc: 150, cash: 102960, cost: 97500, gePrice: 102000, tlPrice: 102000 },
    { label: 'CB150R MORIWAKI LIMITED EDITION (ล้อแม็ก ดิสก์เบรก)', category: 'HONDA', modelId: 'CBF150NKTH1', cc: 150, cash: 110960, cost: 105000, gePrice: 108000, tlPrice: 108000 },
    { label: 'CB150R (ล้อแม็ก ดิิสก์เบรก ABS)', category: 'HONDA', modelId: 'CBF150NAKTH', cc: 150, cash: 113270, cost: 107000, gePrice: 113000, tlPrice: 113000 },
    { label: 'YZF-R15 ดำ เหลืองดำ', category: 'YAMAHA', modelId: 'B9B500', cc: 155, cash: 97000, cost: 93500, gePrice: 98400, tlPrice: 98500 },
    { label: 'MT-15', category: 'YAMAHA', modelId: 'B7D100', cc: 155, cash: 98500, cost: 94200, gePrice: 102000, tlPrice: 102000 },
    { label: 'XSR155', category: 'YAMAHA', modelId: 'B1V100', cc: 155, cash: 91500, cost: 87000, gePrice: 93500, tlPrice: 93500 },
    { label: 'GT125', category: 'YAMAHA', modelId: 'B21400', cc: 125, cash: 45500, cost: 44000, gePrice: 52000, tlPrice: 51500 },
    { label: 'GT125', category: 'YAMAHA', modelId: 'B21500', cc: 125, cash: 46100, cost: 44500, gePrice: 52000, tlPrice: 52000 },
    { label: 'GT125', category: 'YAMAHA', modelId: 'B2H300', cc: 125, cash: 47100, cost: 45600, gePrice: 53000, tlPrice: 53500 },
    { label: 'FINO125 ACTIVE FASHION', category: 'YAMAHA', modelId: 'BB9800', cc: 125, cash: 46000, cost: 45000, gePrice: 50900, tlPrice: 51000 },
    { label: 'FINO รุ่นใหม่ ล้อลวด', category: 'YAMAHA', modelId: 'BB9900', cc: 125, cash: 47000, cost: 45700, gePrice: 51900, tlPrice: 51500 },
    { label: 'FINO รุุ่่นใหม่ ล้อแม็ค', category: 'YAMAHA', modelId: 'BS9300', cc: 125, cash: 52500, cost: 50700, gePrice: 58000, tlPrice: 57500 },
    { label: 'FREE GO', category: 'YAMAHA', modelId: 'BOP100', cc: 125, cash: 51200, cost: 49200, gePrice: 57200, tlPrice: 56800 },
    { label: 'LEXI ABS', category: 'YAMAHA', modelId: 'B4H300', cc: 125, cash: 67900, cost: 65900, gePrice: 74000, tlPrice: 74000 },
    { label: 'LEXI รุ่นใหม่ สีแดง', category: 'YAMAHA', modelId: 'B4H400', cc: 125, cash: 60100, cost: 58700, gePrice: 65200, tlPrice: 65500 },
    { label: 'LEXI รุ่นใหม่ สีน้ำเงิน,ดำ', category: 'YAMAHA', modelId: 'B4H500', cc: 125, cash: 63900, cost: 61900, gePrice: 68900, tlPrice: 69200 },
    { label: 'QBIX รุ่นใหม่', category: 'YAMAHA', modelId: 'BM9B00', cc: 125, cash: 54000, cost: 52500, gePrice: 62000, tlPrice: 62000 },
    { label: 'QBIX S รุ่นใหม่', category: 'YAMAHA', modelId: 'BM9C00', cc: 125, cash: 56500, cost: 55000, gePrice: 65100, tlPrice: 65000 },
    { label: 'QBIX ABS รุ่นใหม่', category: 'YAMAHA', modelId: 'BM9D00', cc: 125, cash: 60400, cost: 58800, gePrice: 69600, tlPrice: 69600 },
    { label: 'AEROX 155 STD. รุ่นใหม่', category: 'YAMAHA', modelId: 'BF6C00', cc: 155, cash: 64500, cost: 61000, gePrice: 73000, tlPrice: 73000 },
    { label: 'AEROX 155 R VERSION รุ่นใหม่', category: 'YAMAHA', modelId: 'BF6D00', cc: 155, cash: 67500, cost: 64000, gePrice: 76000, tlPrice: 76000 },
    { label: 'AEROX 155 ABS รุ่นใหม่', category: 'YAMAHA', modelId: 'BF6E00', cc: 155, cash: 74500, cost: 70500, gePrice: 84000, tlPrice: 84000 },
    { label: 'AEROX 155 ABS รุ่นใหม่ สีดำ MOTO GP', category: 'YAMAHA', modelId: 'BF6J00', cc: 155, cash: 68900, cost: 65500, gePrice: 77000, tlPrice: 77500 },
    { label: 'FINN ลวด', category: 'YAMAHA', modelId: 'B6F900', cc: 115, cash: 43000, cost: 40900, gePrice: 50900, tlPrice: 49700 },
    { label: 'FINN รุ่นใหม่ แม็ค', category: 'YAMAHA', modelId: 'B6FB00', cc: 115, cash: 45000, cost: 42800, gePrice: 53500, tlPrice: 51300 },
    { label: 'FINN รุ่นใหม่ แม็ค', category: 'YAMAHA', modelId: 'B6FC00', cc: 115, cash: 45500, cost: 43300, gePrice: 53800, tlPrice: 53500 },
    { label: 'EXCITER 150 รุ่นใหม่', category: 'YAMAHA', modelId: 'B15800', cc: 150, cash: 63000, cost: 61500, gePrice: 64700, tlPrice: 64600 },
    { label: 'EXCITER 150 รุ่นใหม่', category: 'YAMAHA', modelId: 'B15A00', cc: 150, cash: 63000, cost: 61500, gePrice: 64700, tlPrice: 64600 },
    ";
    $isAdmin = False;
    if (!empty($_GET["id"]) && $_GET["id"]=="admin") {
        $isAdmin = True;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .ui-autocomplete-category {
            font-weight: bold;
            padding: .2em .4em;
            margin: .8em 0 .2em;
            line-height: 1.5;
        }
        i {
            vertical-align: sub;
        }
    </style>
    <title>Chokdee</title>
  </head>
  <body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand font-weight-light" href="#">
            <i class="material-icons">motorcycle</i>
            โชคดี รามคำแหง 53
            <i class="material-icons">sports_motorsports</i>
        </a>
    </nav>
    <br>
    <form class="opening">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-1 font-weight-lighter">รุ่น</div>
            <div class="col-9 input-group input-group-sm">
                <input class="form-control" id="search" placeholder="ค้นหา">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-success btn-sm" id="search-icon">
                    <i class="material-icons">search</i>
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm" id="clear">
                    <i class="material-icons">delete</i>
                </button>
            </div>
        </div>
        <br>
        <div class="row align-items-center" style="display:none" id="color-section">
            <div class="col-1 font-weight-lighter">สี</div>
            <div class="col">
                <div style="display:none" class="btn-group btn-group-toggle model-group" id="model1234" data-toggle="buttons">
                    <label class="btn btn-secondary model model1 active">
                        <input type="radio" name="model" id="model1" value="1" checked>ดรัมเบรค
                    </label>
                    <label class="btn btn-secondary model model2">
                        <input type="radio" name="model" id="model2" value="2">ดิสก์เบรค
                    </label>
                    <label class="btn btn-secondary model model3">
                        <input type="radio" name="model" id="model3" value="3">เกียร์มือ
                    </label>
                    <label class="btn btn-secondary model model4">
                        <input type="radio" name="model" id="model4" value="4">ล้อแม็ก
                    </label>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-1 font-weight-lighter">โค้ด</div>
            <div class="col-3 bd-callout font-weight-bolder" id="model-id"></div>
            <div class="col-8 text-right">
                <span class="badge badge-pill badge-light badge-cc" id="cc100">100 CC</span>
                <span class="badge badge-pill badge-light badge-cc" id="cc150">150 CC</span>
                <span class="badge badge-pill badge-light badge-cc" id="cc200">200 CC</span>
                <span class="badge badge-pill badge-light badge-cc" id="cc250">250 CC</span>
                <span class="badge badge-pill badge-light badge-cc" id="cc300">300 CC</span>
            </div>
        </div>
        <br>
        <div class="row align-items-center">
            <div class="col-1 font-weight-lighter">ราคา</div>
            <div class="col-2">
                <button type="button" class="btn btn-success btn-sm btn-block">
                    <span id="cash-price">&nbsp;</span>
                    <?php if ($isAdmin) { ?>
                        <br><span class="badge badge-pill badge-danger" id="cost-price"></span>
                    <?php } ?>
                </button>
            </div>
            <div class="col-1 text-center"><span class="badge badge-pill badge-dark">+</span></div>
            <div class="col-2 text-center font-weight-lighter">ทะเบียน&พรบ.</div>
            <div class="col-2">
                <button type="button" class="btn btn-success btn-sm btn-block">
                    <span id="cc-price">1,000</span>
                </button>
            </div>
            <div class="col-2 text-center font-weight-lighter">ประกันรถหาย</div>
            <div class="col-2">
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                    <label class="btn btn-outline-success btn-sm active">
                        <input type="radio" name="additional" id="additional1" checked>
                        <span id="wty-1year-price">1,800</span><br>
                        <span class="badge badge-pill badge-light">1 ปี</span>
                    </label>
                    <label class="btn btn-outline-success btn-sm">
                        <input type="radio" name="additional" id="additional2">
                        <span id="wty-2year-price">2,500</span><br>
                        <span class="badge badge-pill badge-light">2 ปี</span>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row align-items-center">
            <div class="col-1 font-weight-lighter">ไฟแนนซ์</div>
            <div class="col-11">
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                    <label class="btn btn-outline-success btn-sm">
                        <input type="radio" name="leasing" value="CASH">เงินสด
                        <?php if ($isAdmin) { ?>
                            <br><span class="badge badge-pill badge-warning" id="cash-price2"></span>
                        <?php } ?>
                    </label>
                    <label class="btn btn-outline-primary btn-sm active">
                        <input type="radio" name="leasing" value="GE" checked>กรุงศรี
                        <?php if ($isAdmin) { ?>
                            <br><span class="badge badge-pill badge-warning" id="ge-price"></span>
                        <?php } ?>
                    </label>
                    <label class="btn btn-outline-primary btn-sm">
                        <input type="radio" name="leasing" value="TL">ทีลิสซิ่ง
                        <?php if ($isAdmin) { ?>
                            <br><span class="badge badge-pill badge-warning" id="tl-price"></span>
                        <?php } ?>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div id="leasing-sections">
            <div class="row align-items-center">
                <div class="col-1 font-weight-lighter">ดอกเบี้ย</div>
                <div class="col-5">
                    <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons" id="interest-ge-section">
                        <label class="btn btn-outline-primary btn-sm active">
                            <input type="radio" name="down" value="2.3" checked>2.3%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">3.2</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="2.1">2.1%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">3.0</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="1.95">1.95%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">1.5</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="1.85">1.85%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">1.0</span>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                    <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons" id="interest-tl-section">
                        <label class="btn btn-outline-primary btn-sm active">
                            <input type="radio" name="down" value="1.99" checked>1.99%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">3.2</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="1.85">1.85%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">2.7</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="1.59">1.59%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">2.2</span>
                            <?php } ?>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="1.70">1.70%
                            <?php if ($isAdmin) { ?>
                                <br><span class="badge badge-pill badge-danger">0.0</span>
                            <?php } ?>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-1 font-weight-lighter">ดาวน์</div>
                <div class="col-11">
                    <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-sm active">
                            <input type="radio" name="down" value="0" checked>
                            <span class="badge badge-pill badge-light">ฟรี</span>
                            <br>
                            <span id="down1"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="5">
                            <span class="badge badge-pill badge-light">5%</span>
                            <br>
                            <span id="down2"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="10">
                            <span class="badge badge-pill badge-light">10%</span>
                            <br>
                            <span id="down3"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="15">
                            <span class="badge badge-pill badge-light">15%</span>
                            <br>
                            <span id="down4"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="down" value="20">
                            <span class="badge badge-pill badge-light">20%</span>
                            <br>
                            <span id="down5"></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-1 font-weight-lighter">ผ่อน</div>
                <div class="col-11">
                    <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-sm active">
                            <input type="radio" name="period" value="0" checked>
                            <span class="badge badge-pill badge-light">1 ปี</span>
                            <br>
                            <span id="install1"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="period" value="5">
                            <span class="badge badge-pill badge-light">1.5 ปี</span>
                            <br>
                            <span id="install2"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="period" value="10">
                            <span class="badge badge-pill badge-light">2 ปี</span>
                            <br>
                            <span id="install3"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="period" value="15">
                            <span class="badge badge-pill badge-light">2.5 ปี</span>
                            <br>
                            <span id="install4"></span>
                        </label>
                        <label class="btn btn-outline-primary btn-sm">
                            <input type="radio" name="period" value="20">
                            <span class="badge badge-pill badge-light">3 ปี</span>
                            <br>
                            <span id="install5"></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    </form>
    <?php if ($isAdmin) { ?>
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <form class="form-inline">
                <span class="navbar-text">Scoring</span>
                <button class="btn btn-sm btn-outline-success" type="button" disabled>Main button</button>
                <button class="btn btn-sm btn-outline-secondary" type="button" disabled>Second button</button>
            </form>
        </nav>
    <?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function ceil(leasing, amount) {
            if (leasing == 'TL') {
                return Math.ceil(amount / 5) * 5;
            }
            return Math.ceil(amount);
        }
        function calculate(price, leasing, down, int, period) {
            var loan = price - (price * down / 100);
            var installment = ((loan * int / 100 * period) + loan) / period;
            return ceil(leasing, installment);
        }
        function radioChanged() {
            var cash_price = Number($("#cash-price").text().replace(/,/g, ''));
            var leasing = $("input[name='leasing']:checked").val().toUpperCase();
            var down = $("input[name='down']:checked").val();
            var interest = 0;
            $("#interest-ge-section").hide();
            $("#interest-tl-section").hide();
            if (leasing == 'CASH') {
                $("#leasing-sections").hide();
            } else if (leasing == 'GE') {
                interest = 1.95;
                $("#leasing-sections").show();
                $("#interest-ge-section").show();
            } else if (leasing == 'TL') {
                interest = 1.99;
                $("#leasing-sections").show();
                $("#interest-tl-section").show();
            }
            $("#down1").text("ฟรี");
            $("#down2").text(numberWithCommas(cash_price * 0.05));
            $("#down3").text(numberWithCommas(cash_price * 0.10));
            $("#down4").text(numberWithCommas(cash_price * 0.15));
            $("#down5").text(numberWithCommas(cash_price * 0.20));
            $("#install1").text(numberWithCommas(calculate(cash_price, leasing, down, interest, 12)));
            $("#install2").text(numberWithCommas(calculate(cash_price, leasing, down, interest, 18)));
            $("#install3").text(numberWithCommas(calculate(cash_price, leasing, down, interest, 24)));
            $("#install4").text(numberWithCommas(calculate(cash_price, leasing, down, interest, 30)));
            $("#install5").text(numberWithCommas(calculate(cash_price, leasing, down, interest, 36)));
        }
        $( function() {
            //$("input[name='leasing']").click(function(){
            $("input[type='radio']").click(function(){
                radioChanged();
            });

            $.widget( "custom.catcomplete", $.ui.autocomplete, {
                _create: function() {
                    this._super();
                    this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
                },
                _renderMenu: function( ul, items ) {
                    var that = this,
                        currentCategory = "";
                    $.each( items, function( index, item ) {
                        var li;
                        if ( item.category != currentCategory ) {
                            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                            currentCategory = item.category;
                        }
                        li = that._renderItemData( ul, item );
                        if ( item.category ) {
                            li.attr( "aria-label", item.category + " : " + item.label );
                        }
                    });
                }
            });

            var data = [
                <?php echo $mkt_name; ?>
            ];

            $( "#search" ).catcomplete({
                delay: 0,
                source: data
            });

            function searchValueInArray(nameKey, myArray){
                for (var i=0; i < myArray.length; i++) {
                    if (myArray[i].label === nameKey) {
                        return myArray[i];
                    }
                }
            }

            function searchClicked() {
                $(".model-group").hide();
                $(".model").removeClass("active");
                var typename = $("#search").val();
                var object = searchValueInArray(typename, data);
                $("#model-id").text(object.modelId);
                $("#cash-price").text(numberWithCommas(object.cash));
                $("#cash-price2").text($("#cash-price").text());
                $("#ge-price").text(numberWithCommas(object.gePrice));
                $("#tl-price").text(numberWithCommas(object.tlPrice));
                $("#cost-price").text((object.cash - object.cost) / 1000);
                $(".badge-cc").removeClass("badge-light");
                $(".badge-cc").removeClass("badge-success");
                $(".badge-cc").addClass("badge-light");
                if (object.cc < 150) {
                    $("#cc100").removeClass("badge-light");
                    $("#cc100").addClass("badge-success");
                    $("#cc-price").text("1,000");
                    $("#wty-1year-price").text("1,800");
                    $("#wty-2year-price").text("2,500");
                } else if (object.cc < 200) {
                    $("#cc150").removeClass("badge-light");
                    $("#cc150").addClass("badge-success");
                    $("#cc-price").text("1,500");
                    $("#wty-1year-price").text("2,500");
                    $("#wty-2year-price").text("3,500");
                } else if (object.cc < 250) {
                    $("#cc200").removeClass("badge-light");
                    $("#cc200").addClass("badge-success");
                    $("#cc-price").text("1,500");
                    $("#wty-1year-price").text("2,500");
                    $("#wty-2year-price").text("3,500");
                } else if (object.cc < 300) {
                    $("#cc250").removeClass("badge-light");
                    $("#cc250").addClass("badge-success");
                    $("#cc-price").text("1,500");
                    $("#wty-1year-price").text("2,500");
                    $("#wty-2year-price").text("3,500");
                } else {
                    $("#cc300").removeClass("badge-light");
                    $("#cc300").addClass("badge-success");
                    $("#cc-price").text("2,000");
                    $("#wty-1year-price").text("3,600");
                    $("#wty-2year-price").text("4,500");
                }
                radioChanged();
                if(typename == 'Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทเท้า ดรัมเบรก)') {
                    $("#model1234").show();
                    $(".model1").addClass("active");
                    $(".model1").find("input").prop("checked", true);
                } else if(typename == 'Wave 125i') {
                    $("#model1234").show();
                    $(".model2").addClass("active");   
                    $(".model2").find("input").prop("checked", true);                 
                } else if(typename == 'R15') {  
                    $(".model3").addClass("active");
                    $(".model3").find("input").prop("checked", true);
                }
            }

            $("#search").change(function() {
                searchClicked();
            });

            $("#search-icon").click(function() {
                searchClicked();
            });

            $("#clear").click(function() {
                $("#search").val("");
            });
        } );
    </script>
  </body>
</html>