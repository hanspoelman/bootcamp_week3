<?php
                    session_start();
                    if ($_SESSION["code"] == $_POST["captchascript.php"]) {
                        echo "succesvol verzonden";
                    } else {
                        die("fouttieve invoer");
                    }
                    ?>