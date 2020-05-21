     <?php

$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");

if( $iPod || $iPhone || $iPad ){
        header('Location: https://apps.apple.com/app/id1491355970');
}else if($Android){
        header('Location: http://play.google.com/store/apps/details?id=com.spartannash.go');
}else{
    header('Location: https://go.spartannash.com/');
}

?> 
