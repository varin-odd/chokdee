<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .material-icons.orange600 { color: #FB8C00; }
    </style>
    <title>ข้อมูลผู้ซื้อ</title>
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <div class="d-block mx-auto mb-4"><i class="material-icons orange600">check_circle</i></div>
            <h2>ตรวจสอบสถานะผู้ซื้อ</h2>
            <p class="lead">ข้อมูลเบื้องต้นสำหรับการเช่าซื้อ</p>
        </div>

        <div class="row">

            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">คะแนน</span>
                <span class="badge badge-secondary badge-pill">4</span>
                </h4>
                <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <h6 class="my-0">เกณฑ์อายุ</h6>
                    <small class="text-muted">น้อยกว่า 21 มาพร้อมมารดา</small>
                    </div>
                    <span class="text-muted">ผ่านเกณฑ์</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div class="text-danger">
                    <h6 class="my-0">อาชีพ</h6>
                    <small class="text-danger">ไม่มีเบอร์ 02</small>
                    </div>
                    <span class="text-danger">อิสระ</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <h6 class="my-0">เครดิตเดิม</h6>
                    <small class="text-muted">เคยผ่อนรถ, บ้าน</small>
                    </div>
                    <span class="text-muted">6 เดือน</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                    <h6 class="my-0">ที่อยู่</h6>
                    <small>ตรวจสอบได้จริง</small>
                    </div>
                    <span class="text-success">นัดถ่ายรูป</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>รวม</span>
                    <strong>1</strong>
                </li>
                </ul>

                <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ลดรุ่น">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">เพิ่มดาวน์</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">ข้อมูลผู้ซื้อ</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-1 mb-3">เพศ</div>
                        <div class="col-md-2 mb-3">
                            <div class="custom-control custom-radio">
                                <input id="male" name="gender" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="male">ชาย</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="custom-control custom-radio">
                                <input id="female" name="gender" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="female">หญิง</label>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">ไฟแนนซ์</div>
                        <div class="col-md-2 mb-3">
                            <div class="custom-control custom-radio">
                                <input id="ge" name="finance" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="ge">อยุธยา</label>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="custom-control custom-radio">
                                <input id="tl" name="finance" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="tl">ทีลิสซิ่ง</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="age">อายุ</label>
                            <select class="browser-default custom-select custom-select mb-3">
                                <option value="1" selected>น้อยกว่า 21 ปี</option>
                                <option value="2">มากกว่าเท่ากับ 21 ปี</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="age">ผ่านการเกณฑ์ทหาร</label>
                            <select class="browser-default custom-select custom-select mb-3">
                                <option value="1" selected>ผ่านแล้ว</option>
                                <option value="2">ยังไม่ผ่าน</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="age">มารดามาด้วยหรือไม่</label>
                            <select class="browser-default custom-select custom-select mb-3">
                                <option value="1" selected>มา</option>
                                <option value="2">ไม่มา</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="fullName">ชื่อ-สกุล</label>
                            <input type="text" class="form-control" id="fullName" placeholder="" value="" required>
                            <div class="invalid-feedback">กรุณาระบุชื่อ-สกุล</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tel">เบอร์โทร</label>
                            <input type="tel" class="form-control" id="tel" placeholder="0XX-XXX-XXXX">
                            <div class="invalid-feedback">กรุณาระบุเบอร์โทรศัพท์</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="current-addr">ที่อยู่ปัจจุบัน <span class="text-muted">(ต้องเป็น กทม. เท่านั้น*)</span></label>
                        <input type="text" class="form-control" id="current-addr" placeholder="อพาร์ทเมนต์ หรือ ห้องเช่า" required>
                        <small class="text-muted">ใช้กรณีการตรวจสอบสถานที่อยู่จริง</small>
                        <div class="invalid-feedback">กรุณาระบุที่อยู่ปัจจุบัน</div>
                    </div>

                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="refName1">ชื่อ-สกุล <span class="text-muted">(บุคคลอ้างอิง 1)</label>
                            <input type="text" class="form-control" id="refName1" placeholder="" value="" required>
                            <div class="invalid-feedback">กรุณาระบุชื่อ-สกุล</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="refTel1">เบอร์โทร</label>
                            <input type="tel" class="form-control" id="refTel1" placeholder="0XX-XXX-XXXX">
                            <div class="invalid-feedback">กรุณาระบุเบอร์โทรศัพท์</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="relation1">ความสัมพันธ์</label>
                            <input type="tel" class="form-control" id="relation1" placeholder="หัวหน้า">
                            <div class="invalid-feedback">กรุณาระบุความสัมพันธ์</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="refName2">ชื่อ-สกุล <span class="text-muted">(บุคคลอ้างอิง 2)</label>
                            <input type="text" class="form-control" id="refName2" placeholder="" value="" required>
                            <div class="invalid-feedback">กรุณาระบุชื่อ-สกุล</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="refTel2">เบอร์โทร</label>
                            <input type="tel" class="form-control" id="refTel2" placeholder="0XX-XXX-XXXX">
                            <div class="invalid-feedback">กรุณาระบุเบอร์โทรศัพท์</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="relation2">ความสัมพันธ์</label>
                            <input type="tel" class="form-control" id="relation2" placeholder="แฟน">
                            <div class="invalid-feedback">กรุณาระบุความสัมพันธ์</div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="mb-3">
                        <label for="social-addr">ที่อยู่ตามบัตรประชาชน <span class="text-muted">(ใช้ออกบิล)</span></label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">ที่อยู่เดียวกับที่อยู่ปัจจุบัน</label>
                        </div>
                        <input type="text" class="form-control" id="social-addr" placeholder="12/34 ถนน. XX">
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Checker ตรวจสอบขั้นที่ 2</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 โชคดี รามคำแหง 53</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="/chokdee">รุ่นมอเตอร์ไซต์</a></li>
            <li class="list-inline-item"><a href="/chokdee/info.php">ตรวจสอบสถานะผู้ซื้อ</a></li>
            <li class="list-inline-item"><a href="/chokdee/bill_form.php">ออกบิล</a></li>
        </ul>
        <br>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>