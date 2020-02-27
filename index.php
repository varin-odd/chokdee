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
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>ดรัมเบรค
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">ดิสก์เบรค
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">เกียร์มือ
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">ล้อแม็ก
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
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
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
            <div class="col-1"><button type="button" class="btn btn-outline-success">1,500</button></div>
            <div class="col-1"><button type="button" class="btn btn-outline-secondary">2,500</button></div>
            <div class="col-1">บาท</div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">LEASING</div>
            <div class="col-2">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>GE
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off">TL
                    </label>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-1">DOWN</div>
            <div class="col-5">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
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
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
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
            <div class="col-1"><button type="button" class="btn btn-outline-secondary">3,000</button></div>
            <div class="col-1"><button type="button" class="btn btn-outline-secondary">2,500</button></div>
            <div class="col-1"><button type="button" class="btn btn-outline-secondary">2,000</button></div>
            <div class="col-1"><button type="button" class="btn btn-outline-secondary">1,500</button></div>
            <div class="col-1"><button type="button" class="btn btn-outline-success">1,000</button></div>
            <div class="col">บาท/เดือน</div>
        </div>
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
            { label: "anders", category: "" },
            { label: "andreas", category: "" },
            { label: "antal", category: "" },
            { label: "Wave 110i", category: "2018" },
            { label: "Wave 125i", category: "2018" },
            { label: "Wave 110i", category: "2019" },
            { label: "Wave 125i", category: "2019" },
            { label: "annttop C13", category: "Products" },
            { label: "anders andersson", category: "People" },
            { label: "andreas andersson", category: "People" },
            { label: "andreas johnson", category: "People" }
        ];

        $( "#search" ).catcomplete({
            delay: 0,
            source: data
        });
        } );
    </script>
  </body>
</html>