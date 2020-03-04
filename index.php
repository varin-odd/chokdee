<?php
    $mkt_name = '
    { label: "Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทเท้า ดรัมเบรก)", category: "HONDA", modelId: "AFS110KDFL 2TH", cash: 37500, cost: 35700, gePrice: 49500 },
    { label: "Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทเท้า ดิสก์เบรกหน้า)", category: "HONDA", modelId: "AFS110KSEL TH", cash: 41000, cost: 39300, gePrice: 49900 },
    { label: "Wave110I (เวฟ 110ไอ ล้อซี่ลวด สตาร์ทมือ ดิสก์เบรกหน้า)", category: "HONDA", modelId: "AFS110MSFL TH", cash: 41000, cost: 42000, gePrice: 51900 },
    { label: "Wave110I (เวฟ 110ไอ ล้อแม๊ก สตาร์ทมือ ดิสก์เบรกหน้า)", category: "HONDA", modelId: "AFS110MCFL TH", cash: 41000, cost: 43900, gePrice: 54400 },
    { label: "YZF-R15", category: "YAMAHA", modelId: "(รอเลือกสี)", cash: 97000, cost: 93500, gePrice: 107000 },
    { label: "YZF-R3", category: "YAMAHA", modelId: "B5L600", cash: 97500, cost: 182500, gePrice: 107500 }';
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
        <a class="navbar-brand" href="#">
            <i class="material-icons">motorcycle</i>
            Testing System
            <i class="material-icons">sports_motorsports</i>
        </a>
    </nav>
    <br>
    <form class="opening">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-1">รุ่น</div>
            <div class="col-7 input-group input-group-sm">
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
            <div class="col-1">สี</div>
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
            <div class="col-1">โค้ด</div>
            <div class="col-3 bd-callout" id="model-id"></div>
            <div class="col-6 text-right">
                <span class="badge badge-pill badge-success" id="cc100">100 CC</span>
                <span class="badge badge-pill badge-light" id="cc150">150 CC</span>
                <span class="badge badge-pill badge-light" id="cc200">200 CC</span>
                <span class="badge badge-pill badge-light" id="cc250">250 CC</span>
                <span class="badge badge-pill badge-light" id="cc300">300 CC</span>
            </div>
        </div>
        <br>
        <div class="row align-items-center">
            <div class="col-1">ราคา</div>
            <div class="col-2">
                <button type="button" class="btn btn-success btn-sm btn-block" id="cash-price">97,000
                    <span class="badge badge-pill badge-danger" id="cost-price">8.5</span>
                </button>
            </div>
            <div class="col-3">+ทะเบียน,พรบ.,ประกัน</div>
            <div class="col-4">
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                    <label class="btn btn-outline-success btn-sm active">
                        <input type="radio" name="additional" id="additional1" checked>1,500
                        <span class="badge badge-pill badge-light">1 ปี</span>
                    </label>
                    <label class="btn btn-outline-success btn-sm">
                        <input type="radio" name="additional" id="additional2">2,500
                        <span class="badge badge-pill badge-light">2 ปี</span>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row align-items-center">
            <div class="col-1">ไฟแนนซ์</div>
            <div class="col-9">
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                    <label class="btn btn-outline-success btn-sm">
                        <input type="radio" name="leasing" value="CASH">เงินสด
                    </label>
                    <label class="btn btn-outline-primary btn-sm active">
                        <input type="radio" name="leasing" value="GE" checked>กรุงศรี
                    </label>
                    <label class="btn btn-outline-primary btn-sm">
                        <input type="radio" name="leasing" value="TL">ทีลิสซิ่ง
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div id="leasing-sections">
            <div class="row align-items-center">
                <div class="col-1">ดาวน์</div>
                <div class="col-9">
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
                <div class="col-1">ผ่อน</div>
                <div class="col-9">
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
    <nav class="navbar fixed-bottom navbar-light bg-light" style="display:none">
        <form class="form-inline">
            <span class="navbar-text">Scoring</span>
            <button class="btn btn-sm btn-outline-success" type="button" disabled>Main button</button>
            <button class="btn btn-sm btn-outline-secondary" type="button" disabled>Second button</button>
        </form>
    </nav>
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
            if (leasing == 'CASH') {
                $("#leasing-sections").hide();
            } else if (leasing == 'GE') {
                interest = 1.95;
                $("#leasing-sections").show();
            } else if (leasing == 'TL') {
                interest = 1.99;
                $("#leasing-sections").show();
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
                $("#cost-price").text((object.cash - object.cost) / 1000);
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