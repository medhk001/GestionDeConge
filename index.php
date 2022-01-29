<?php 
require_once './autoload.php';
require_once './controllers/HomeControllers.php';
require_once './views/includes/alerts.php';
$home = new HomeControllers();

$pages = ['home','login','update','allEmp','addUser','delete','dashboard','calendrier'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('home');
}
?>