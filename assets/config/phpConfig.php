<?php
    //required functions before running a site
    error_reporting(E_ALL ^ E_NOTICE);  
    ob_start(); 
    if (session_status() === PHP_SESSION_NONE) {session_start();}
    session_destroy();

    //change languages
    function switchLang($th,$vi,$en){
        if (isset($_GET['lang'])) {
            switch (explode('/', $_GET['lang'])[0]) {
                case 'th':
                    echo $th;
                    break;
                case 'vi':
                    echo $vi;
                    break;
                default:
                    echo $en;
                    break;
            }
        } else {header('location:/en/welcome/');}
    }

    //Format Title 
    function assignTitle(){
        $titleName = '';
        $title = 'myhero.academia';
        $actual_uri = $_SERVER['REQUEST_URI'];
                
        if (strpos($actual_uri, '/homepage') === 3) {
            $homepage = explode('/', $actual_uri)[1];
            switch ($homepage) {
                case 'th':
                    $homepage = 'หน้าหลัก';
                    $title = 'มายฮีโร่อคาเดเมีย';
                    break;
                case 'vi':
                    $homepage = 'trang chủ';
                    break;
                default:
                    $homepage = 'homepage';
                    break;
            }
            $titleName = $title.' | '.$homepage;
            
        } elseif (strpos($actual_uri, '/about') === 3) {
            $homepage = explode('/', $actual_uri)[1];
            switch ($homepage) {
                case 'th':
                    $homepage = 'เกี่ยวกับ';
                    $title = 'มายฮีโร่อคาเดเมีย';
                    break;
                case 'vi':
                    $homepage = 'giới thiệu';
                    break;
                default:
                    $homepage = 'about me';
                    break;
            }
            $titleName = $title.' | '.$homepage;
        }
        return $titleName;
    }
    function getInner() {
        $innerPath = $_SERVER['REQUEST_URI'];
        if ($innerPath[strlen($innerPath)-1]!="/") {
            $innerPath .= "/";
        }
        return substr($innerPath, 3); 
    }
    // clear cache
    function clearCache() {
        return date('d_m_Y').'_'.date('h_m_s');
    }
?>
<?php
    $title = assignTitle();
    $id = clearCache();
    $path = getInner();
    echo '<meta charset="utf-8"/>';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
    echo '<meta name="author" content="houtarouhyouka.1203">';
    echo '<meta name="owner" content="sinnohsatoshi.1203">';
    echo '<meta name="google" content="notranslate"/> ';
    echo '<meta name="language" content="en-US">';
    echo '<meta name="distribution" content="global">';
    echo '<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />';
    echo '<meta name="copyright" content="copyright © 2023 - present by houtarouhyouka.1203"/>';
    
    // dynamic meta tags
    echo "<title>$title</title>";
    echo '<meta name=\'og:title\' content="'.$title.'"> ';
    echo '<meta name=\'og:site_name\' content="'.$title.'"> ';
    echo '<meta name=\'og:description\' content="the official website of bnha.fansite">';

    // favicon
    //echo "<link rel=\"shortcut icon\" type=\"text/css\" href=\"/assets/images/favicon.png?updates=$id\">";
    echo "<link rel=\"shortcut icon\" href=\"/assets/images/favicon.png?updates=$id\">";
    echo "<meta name=\"og:image\" content=\"/assets/images/favicon.png?updates=$id\">";

    // link to mustadd css configuration files
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/format/reset_format.css?updates=$id\">"; //reset_format.css
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/format/default_page.css?updates=$id\">"; //default_page.css
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/format/navigation_bar.css?updates=$id\">"; //navigation_bar.css
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/format/sample_button.css?updates=$id\">";  //sample_button.css

    //link to mussadd js configuration files
    echo "<link rel=\"stylesheet\" href=\"//unpkg.com/swiper@8/swiper-bundle.min.css\"/>";
    echo "<script src=\"//code.jquery.com/jquery-1.8.2.js\"></script>";
    echo "<script src=\"//unpkg.com/swiper@8/swiper-bundle.min.js\"></script>";

    //link to mussadd js header files
    echo "<script src=\"/assets/scripts/search_controls.js?updates=$id\"></script>";
    echo "<script src=\"/assets/scripts/one_for_all.js?updates=$id\"></script>";
    echo "<script src=\"/assets/scripts/navigation_bar.js?updates=$id\"></script>";
    echo "<script src=\"/assets/scripts/search_controls.js?updates=$id\"></script>";

    //link to mussadd js local files
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$path."index.css?updates=$id\">";
    echo "<script src=\"".$path."index.js?updates=$id\"></script>";


?>