<?php
if(isset($_GET["limit"]) && $_GET["limit"] == !null){
    $limit = $_GET["limit"];
}else{
    $limit = 50;
}
if(isset($_GET["search"]) && $_GET["search"] == !null){
    $search = $_GET["search"];
    if(isset($_GET["type"])){
        $type = $_GET["type"];
        $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?q=$search&type=$type&limit=$limit");
        $data = json_decode($json);
    }
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?q=$search&limit=$limit");
    $data = json_decode($json);
}elseif(isset($_GET["id"])){
    $id = $_GET['id'];
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?q=$id");
    $data = json_decode($json);
}elseif(isset($_GET["type"]) && $_GET["search"] == null){
    $type = $_GET["type"];
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?type=$type&limit=$limit");
    $data = json_decode($json);
}elseif(isset($_GET["type"])){
    $type = $_GET['type'];
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?type=$type&limit=$limit");
    $data = json_decode($json);
}elseif(isset($_GET["department"])){
    $department = $_GET['department'];
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?department=$department&limit=$limit");
    $data = json_decode($json);
}else{
    $json = file_get_contents("https://openaccess-api.clevelandart.org/api/artworks/?q=&limit=$limit");
    $data = json_decode($json);
}
?>