<?php
    $fromserver = '{ label: "Odd", category: "" },
    { label: "Orn", category: "" },
    { label: "Wave 110i", category: "HONDA" },
    { label: "Wave 125i", category: "HONDA" },
    { label: "R15", category: "YAMAHA" },
    { label: "R3", category: "YAMAHA" }';
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
    <style>
    .ui-autocomplete-category {
        font-weight: bold;
        padding: .2em .4em;
        margin: .8em 0 .2em;
        line-height: 1.5;
    }
    </style>
    <title>Chokdee</title>
  </head>
  <body>
    <h1>Testing System</h1>
    <div class="container">
        <div class="row">
            <div class="col-1">รุ่น</div>
            <div class="col-7"><input class="form-control" id="search"></div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">MODEL</div>
            <div class="col">
                <div style="display:none" class="btn-group btn-group-toggle model-group" id="model1234" data-toggle="buttons">
                    <label class="btn btn-secondary model model1 active">
                        <input type="radio" name="options" id="model1" autocomplete="off" value="1" checked>ดรัมเบรค
                    </label>
                    <label class="btn btn-secondary model model2">
                        <input type="radio" name="options" id="model2" autocomplete="off" value="2">ดิสก์เบรค
                    </label>
                    <label class="btn btn-secondary model model3">
                        <input type="radio" name="options" id="model3" autocomplete="off" value="3">เกียร์มือ
                    </label>
                    <label class="btn btn-secondary model model4">
                        <input type="radio" name="options" id="model4" autocomplete="off" value="4">ล้อแม็ก
                    </label>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">ราคา</div>
            <div class="col-1"><button type="button" class="btn btn-success">97,000</button></div>
            <div class="col-1">บาท</div>
            <div class="col-2">+ทะเบียน,พรบ.,ประกัน</div>
            <div class="col-2">
                <div class="btn-group btn-group-toggle" style="width:100%" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>1
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">2
                    </label>
                </div>
            </div>
            <div class="col-1">ปี</div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-2">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item active" style="width:100%">1,500</li>
                    <li class="list-group-item disabled" style="width:100%">2,500</li>
                </ul>
            </div>
            <div class="col-1">บาท</div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">LEASING</div>
            <div class="col-5">
                <div class="btn-group btn-group-toggle" style="width:100%" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>GE
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">T-Leasing
                    </label>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">DOWN</div>
            <div class="col-5">
                <div class="btn-group btn-group-toggle" style="width:100%" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>FREE
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">5%
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">10%
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">15%
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">20%
                    </label>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">PERIOD</div>
            <div class="col-5">
                <div class="btn-group btn-group-toggle" style="width:100%" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off">1
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">1.5
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">2
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">2.5
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off" checked>3
                    </label>
                </div>
            </div>
            <div class="col-1">ปี</div>
        </div>
        <div class="row">
            <div class="col-1">ผ่อน</div>
            <div class="col-5">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item" style="width:100%">3,000</li>
                    <li class="list-group-item" style="width:100%">2,500</li>
                    <li class="list-group-item" style="width:100%">2,000</li>
                    <li class="list-group-item" style="width:100%">1,500</li>
                    <li class="list-group-item active" style="width:100%">1,000</li>
                </ul>
            </div>
            <div class="col">บาท/เดือน</div>
        </div>
        <hr>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $( function() {
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
            <?php echo $fromserver; ?>
        ];

        $( "#search" ).catcomplete({
            delay: 0,
            source: data
        });

        $("#search").change(function() {
            $(".model-group").hide();
            $(".model").removeClass("active");
            var typename = $(this).val();
            if(typename == 'Wave 110i') {
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
        });

        } );
    </script>
  </body>
</html>