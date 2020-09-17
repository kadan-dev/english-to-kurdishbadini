<?php
$url = $_POST['link'];
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;

            $source = 'bn';
            $target = 'ku';
            $text = $url;
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);

            echo $result;
?>
