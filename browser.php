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

?>
