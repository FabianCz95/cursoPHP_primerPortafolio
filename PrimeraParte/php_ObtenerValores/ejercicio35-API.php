<?php
// Url de api
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";
// Se quitan los permisos de ssl
$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
// Se decodifica el content a una string
$respuesta=file_get_contents($url,false,stream_context_create($opciones));

// Se convierte en json el string
$objRespuesta= json_decode($respuesta);
// Se imprime objeto json
// print_r($objRespuesta);

?>

<ul>
    <?php 
        foreach($objRespuesta->list as $video){ ?>
            <li><?php echo ($video->title); ?> | <?php echo ($video->channel); ?> </li>
    <?php } ?>
</ul>