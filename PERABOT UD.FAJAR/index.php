
                <?php
                session_start();
                if (isset($_GET['x']) && $_GET['x'] == 'home') {
                    $page = "home.php";
                    include "main.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "order.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "user.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'dapur') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "dapur.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "report.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'katalog') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "katalog.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
                    include "login.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
                    include "proses/proses_logout.php";
                } elseif (isset($_GET['x']) && $_GET['x'] == 'katproduk') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "katproduk.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'orderitem') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "order_item.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } elseif (isset($_GET['x']) && $_GET['x'] == 'viewitem') {
                    if ($_SESSION['level_decafe'] == 1) {
                        $page = "view_item.php";
                        include "main.php";
                    } else {
                        $page = "home.php";
                        include "main.php";
                    }
                } else {
                    $page = "home.php";
                    include "main.php";
                }
                ?>