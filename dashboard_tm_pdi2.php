<?php

session_start();
include "config/koneksi.php";
$level = $_SESSION['level'];
$aksi = $_GET['aksi'];
$kopname = $_SESSION['kopname'];
$tgl = date_default_timezone_set('Asia/Jakarta');
$date = new DateTime();

$tgl_m = date_format($date, 'm');
$tgl_y = date_format($date, 'Y');;
$Tgl_now = date_format($date, 'Y-m-d h:i:s');

if (empty($_SESSION['kopname']) || empty($_SESSION['level'])) {

    header("location:dashboard_tm.php");
} else {

    $form_code = $_REQUEST['form_code'];
    $inspection_number = $_REQUEST['inspection_number'];
    $aksi = $_GET['aksi'];
    $en = $_REQUEST['en'];
    $em = $_REQUEST['em'];
    $area = $_REQUEST['area'];
    $dt = $_REQUEST['dt'];
    $ip = $_REQUEST['ip'];
    $supply_num = $_REQUEST['supply_num'];
    $sts = $_REQUEST['sts'];
}
?>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    .box {
        min-height: 150px;
        width: 100%;
    }

    .tm-search {
        margin: 8px 0 12px;
        padding: 8px;
        background: #fff;
        border: 1px solid #ddd;
    }

    .tm-search input {
        height: 42px;
        font-size: 22px;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
        background: #fff !important;
    }

    .tm-keyboard {
        display: grid;
        grid-template-columns: 1fr 1.35fr;
        gap: 8px;
        margin-top: 6px;
    }

    .tm-key-left,
    .tm-key-numpad {
        display: grid;
        gap: 5px;
    }

    .tm-key-left {
        grid-template-columns: 1fr 1fr;
    }

    .tm-key-numpad {
        grid-template-columns: repeat(3, 1fr);
    }

    .tm-keyboard button {
        min-height: 38px;
        padding: 4px 8px;
        font-size: 16px;
        font-weight: bold;
    }

    .tm-key-left span {
        min-height: 38px;
    }

    @media screen and (max-width: 600px) {
        .tm-keyboard {
            grid-template-columns: 1fr;
        }
    }

    @media screen and (min-width: 800px) {
        .container {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
        }
    }
</style>

<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MKM INspection</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body bgcolor="#990000">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="dashboard_tm_pdi2.php" class="nav-link">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    Dashboard</a>
            </li>


            <li class="nav-item">
                <a href="dashboard_tm_ok_pdi.php" class="nav-link">TM Test OK</a>
            </li>
            <li class="nav-item">
                <a href="crul2.php" class="nav-link">Log Out</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <?php
        if (empty($aksi)) {
        ?>

            </p>

            <table border="0">
                <tr>

                    <td></td>

                </tr>
                <tr>

                    <td>TM STATUS PDI</td>

                </tr>

            </table>
            <p>

                <?php include "barcode_code128_reader.php"; ?>

            <div class="tm-search">
                <form method="get" action="dashboard_tm_pdi2.php" id="tm-search-form">
                    <input type="hidden" name="pilih" value="2.6">
                    <input type="hidden" name="halaman" value="1">
                    <input type="hidden" name="kopname" value="<?php echo $kopname; ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="tm-search-input" value="" placeholder="M025-B10001 / 0001" readonly inputmode="none" autocomplete="off">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Cari</button>
                            <button type="button" class="btn btn-success" id="tm-open-code">Buka</button>
                        </div>
                    </div>
                </form>
                <div class="tm-keyboard" id="tm-keyboard">
                    <div class="tm-key-left">
                        <button type="button" class="btn btn-outline-dark" data-key="M025-">M025</button>
                        <button type="button" class="btn btn-outline-dark" data-key="A">A</button>
                        <button type="button" class="btn btn-outline-dark" data-key="M035-">M035</button>
                        <button type="button" class="btn btn-outline-dark" data-key="B">B</button>
                        <span></span>
                        <button type="button" class="btn btn-outline-dark" data-key="C">C</button>
                        <span></span>
                        <span></span>
                        <button type="button" class="btn btn-warning" data-action="back">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-action="clear">Clear</button>
                    </div>
                    <div class="tm-key-numpad">
                        <button type="button" class="btn btn-outline-dark" data-key="7">7</button>
                        <button type="button" class="btn btn-outline-dark" data-key="8">8</button>
                        <button type="button" class="btn btn-outline-dark" data-key="9">9</button>
                        <button type="button" class="btn btn-outline-dark" data-key="4">4</button>
                        <button type="button" class="btn btn-outline-dark" data-key="5">5</button>
                        <button type="button" class="btn btn-outline-dark" data-key="6">6</button>
                        <button type="button" class="btn btn-outline-dark" data-key="1">1</button>
                        <button type="button" class="btn btn-outline-dark" data-key="2">2</button>
                        <button type="button" class="btn btn-outline-dark" data-key="3">3</button>
                        <span></span>
                        <button type="button" class="btn btn-outline-dark" data-key="0">0</button>
                        <span></span>
                        <button type="button" class="btn btn-outline-dark" data-key="X">X</button>
                        <button type="button" class="btn btn-outline-dark" data-key="Y">Y</button>
                        <button type="button" class="btn btn-outline-dark" data-key="Z">Z</button>
                    </div>
                </div>
                <div id="tm-search-message" style="margin-top:8px;font-weight:bold;color:#990000;"></div>
            </div>

            <form class="form-inline" role="form">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr bgcolor="#990000">
                            <th><a href="#">
                                    <font color="#FFFFFF">No</font>
                                </a></th>
                            <th><a href="#">
                                    <font color="#FFFFFF">TM Number</font>
                                </a></th>
                            <th><a href="#">
                                    <font color="#FFFFFF">Description</font>
                                </a></th>
                            <th><a href="#">
                                    <font color="#FFFFFF">Status</font>
                                </a></th>
                            <th colspan="3"><a>
                                    <font color="#FFFFFF">Action</font>
                                </a></th>
                        </tr>

                    </thead>
                    <tbody><?php

                            $result = mysql_query("SELECT count(*) as total FROM transmisi_proses_inspection_header where inspection_status = 'PDI' ");
                            $__tot_row = mysql_fetch_array($result);
                            $total = $__tot_row['total'];

                            $query = mysql_query("SELECT * FROM transmisi_proses_inspection_header where inspection_status = 'PDI' ORDER BY inspection_engine_number desc");
                            $no = 1;
                            while ($data = mysql_fetch_array($query)) {

                                $test = $data['form_code'];
                            ?>
                            <tr data-tm-row="<?php echo htmlspecialchars($data['inspection_engine_number'], ENT_QUOTES); ?>">
                                <td align="center"><?php echo $no; ?></td>
                                <td><?php echo $data['inspection_engine_number']; ?></td>
                                <td><?php echo $data['desc_running']; ?></td>
                                <td><?php echo $data['inspection_status']; ?></td>
                                <td align="center">


                                    <a class="btn btn-success btn-xs" href="dashboard_tm_pdi2.php?aksi=updatetpsdi&form_code=<?php echo $data['form_code']; ?>&inspection_number=<?php echo $data['inspection_number']; ?>&en=<?php echo $data['inspection_engine_number']; ?>&em=<?php echo $data['inspection_engine_model']; ?>&dt=<?php echo $data['inspection_date']; ?>&area=<?php echo $data['inspection_area']; ?>&kopname=<?php echo $kopname; ?>&ip=<?php echo $data['ip_number']; ?>&supply_num=<?php echo $data['faktor_koreksi']; ?>&sts=<?php echo $data['inspection_status']; ?>" style="background-color:#990000"><i class="glyphicon glyphicon-edit"></i> </a>

                                </td>
                            </tr>
                        <?php
                                $no++;
                            } //tutup while
                        ?>
                    </tbody>
                </table>
            </form>

            <div style="font-weight:bold;">
                Total : <?php echo $total; ?> data
            </div>
            <div id="tm-page-list" style="font-weight:bold;margin-top:6px;"></div>

            <script>
                (function() {
                    var input = document.getElementById('tm-search-input');
                    var form = document.getElementById('tm-search-form');
                    var keyboard = document.getElementById('tm-keyboard');
                    var openButton = document.getElementById('tm-open-code');
                    var message = document.getElementById('tm-search-message');
                    var pageList = document.getElementById('tm-page-list');
                    var pageSize = 100;
                    var currentPage = 1;

                    function setValue(value) {
                        input.value = value.toUpperCase().replace(/[^M0-9ABCXYZ-]/g, '').slice(0, 20);
                        currentPage = 1;
                        filterRows();
                    }

                    function filterRows() {
                        var keyword = input.value;
                        var rows = document.querySelectorAll('[data-tm-row]');
                        var matched = [];
                        var totalPages;

                        for (var i = 0; i < rows.length; i++) {
                            var show = keyword === '' || rows[i].getAttribute('data-tm-row').indexOf(keyword) !== -1;
                            rows[i].style.display = 'none';
                            if (show) matched.push(rows[i]);
                        }

                        totalPages = Math.max(1, Math.ceil(matched.length / pageSize));
                        if (currentPage > totalPages) currentPage = totalPages;

                        for (var j = (currentPage - 1) * pageSize; j < matched.length && j < currentPage * pageSize; j++) {
                            matched[j].style.display = '';
                        }

                        renderPages(totalPages);
                        message.textContent = keyword ? 'Tampil ' + matched.length + ' dari ' + rows.length + ' data.' : '';
                    }

                    function renderPages(totalPages) {
                        var html = 'Page : ';
                        for (var i = 1; i <= totalPages; i++) {
                            html += '<button type="button" class="btn btn-sm ' + (i === currentPage ? 'btn-danger' : 'btn-light') + '" data-page="' + i + '" style="margin:2px;">' + i + '</button>';
                        }
                        pageList.innerHTML = html;
                    }

                    form.onsubmit = function(event) {
                        event.preventDefault();
                        filterRows();
                    };

                    keyboard.onclick = function(event) {
                        var button = event.target;
                        if (button.tagName !== 'BUTTON') return;

                        if (button.getAttribute('data-action') === 'clear') {
                            setValue('');
                            return;
                        }

                        if (button.getAttribute('data-action') === 'back') {
                            setValue(input.value.slice(0, -1));
                            return;
                        }

                        var key = button.getAttribute('data-key');
                        if (!key) return;
                        if (key.indexOf('M0') === 0) {
                            setValue(key);
                            return;
                        }
                        setValue(input.value + key);
                    };

                    pageList.onclick = function(event) {
                        var page = event.target.getAttribute('data-page');
                        if (!page) return;
                        currentPage = parseInt(page, 10);
                        filterRows();
                    };

                    openButton.onclick = function() {
                        var code = input.value;
                        message.textContent = '';

                        if (!/^M0(25|35)-[ABC][1-9XYZ][0-9]{4}$/.test(code)) {
                            filterRows();
                            return;
                        }

                        $.post('ajax_tm_pdi_scan.php', {
                            code: code,
                            page: location.pathname.split('/').pop()
                        }, function(response) {
                            if (response.ok) {
                                window.location.href = response.url;
                                return;
                            }
                            message.textContent = response.message || 'Data PDI tidak ditemukan.';
                        }, 'json').fail(function() {
                            message.textContent = 'Gagal mencari data.';
                        });
                    };

                    filterRows();
                })();
            </script>

            </p>

        <?php
        } elseif ($aksi == 'tambah') {

        ?>
            <div class="container">

                <p class="login-box-msg"><strong>Pilih Formulir dibawah ini untuk Pengecekan</strong></p>
                <hr size="10px" style="background-color:#990000">
                <form action="gnrt_number.php" method="post">
                    <table border="0" align="center">
                        <tr>
                            <td><strong>Type Form</strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp; <input type="hidden" name="kopname" value="<?php echo $kopname; ?>" />
                                <select name="pilihanmenu">
                                    <?php
                                    //Membuat koneksi ke database akademik


                                    //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                    $hasil = mysql_query("select * from master_type_form order by id ASC");
                                    $no = 0;
                                    while ($dtcombo = mysql_fetch_array($hasil)) {
                                        $no++;
                                    ?>
                                        <option value="<?php echo $dtcombo['form_code']; ?>"><?php echo "Formulir" . " : " . $dtcombo['form_code']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">&nbsp;
                                <button class="btn btn-success">Create Form</button> &nbsp;&nbsp; <a class="btn btn-warning" href="dashboard.php">Back Front</a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </div>





        <?php
        } elseif ($aksi == 'updatetpsdi') {

        ?>

            <div class="container">

                <p class="login-box-msg"><strong>Edit Form </strong></p>
                <hr size="10px" style="background-color:#990000">
                <form action="tm_generate_edit_pdi.php" method="post">
                    <table border="0" align="center">
                        <tr>
                            <td><strong>Type Form</strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp; <?php echo $form_code; ?><input type="hidden" name="form_code" value="<?php echo $form_code; ?>" /><input type="hidden" name="kopname" value="<?php echo $kopname; ?>" /><input type="hidden" name="sts" value="<?php echo $sts; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Number<strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp;<?php echo $inspection_number; ?><input type="hidden" name="inspection_number" value="<?php echo $inspection_number; ?>" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>TM Number<strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp;<?php echo $en; ?><input type="hidden" name="en" value="<?php echo $en; ?>" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Variant<strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp;<?php echo $em; ?><input type="hidden" name="em" value="<?php echo $em; ?>" /><input type="hidden" name="dt" value="<?php echo $Tgl_now; ?>" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Area/Shop<strong></td>
                            <td>&nbsp;<strong>:</strong></td>
                            <td>&nbsp;<select name="area">
                                    <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                    <?php
                                    //Membuat koneksi ke database akademik


                                    //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                    $hasil = mysql_query("select * from transmisi_master_area order by id ASC");
                                    $no = 0;

                                    while ($dtcombo = mysql_fetch_array($hasil)) {
                                        $no++;
                                    ?>
                                        <option value="<?php echo $dtcombo['area_name']; ?>"><?php echo $dtcombo['area_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select> </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="3" align="center">&nbsp;
                                <button class="btn btn-success">Edit Form</button> &nbsp;&nbsp; <a class="btn btn-warning" href="dashboard_tm_pdi.php">Back Front</a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </div>




        <?php
        } elseif ($aksi == 'search') {

        ?>



        <?php
        }
        ?>





    </div>

</body>

</html>
