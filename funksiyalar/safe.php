<?php
    function az_deyistirme($text){
        $text=trim($text);
        $axtarilan=array('Ç','ç','Ğ','ğ','ı','İ','ə','Ə','Ş','ş','Ö','ö','Ü','ü');
        $evezlenen=array('C','c','G','g','i','I','e','E','S','s','O','o','U','u');
        $yeni_text=str_replace($axtarilan,$evezlenen,$text);
        return $yeni_text;
    }


    function safe($gelen){
        $giden=htmlspecialchars($giden);
        $giden=strip_tags($giden);
        return $giden;
    }

    function filedownload($islem,$gelenisim,$db,$id){
        $yuklemeklasoru="../img";
        $gecici_isim=$gelenisim['tmp_name'];
        $dosya_ismi=$gelenisim['name'];
        $sayi=rand(1000,999999);
        $isim=az_deyistirme($sayi.$dosya_ismi);
        move_uploaded_file($gecici_isim,"$yuklemeklasoru/$isim");

    }

?>