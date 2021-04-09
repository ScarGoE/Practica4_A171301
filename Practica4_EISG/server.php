<?php
    require_once "lib/nusoap.php";
    function GetJuegos ($datos){
        if ($datos == "Titulos"){
            return Join(",", array (
                "Genshin Impact",
                "World of Warcraft",
                "Star Wars Battlefront II",
                "Minecraft"
            ));
        }
        else {
            return "No hay titulos";
        }
    }
    $server = new soap_server();
    $server->register("GetJuegos");
    if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>