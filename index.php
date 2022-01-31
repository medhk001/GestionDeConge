<?php 

require_once './views/includes/alerts.php';
require_once './autoload.php';
require_once './controllers/HomeControllers.php';

$home = new HomeControllers();

$pages = ['home','login','update','allEmp','addUser','delete','dashboard','calendrier','Contact','Profile','demandeConge','acceptationConge','deleteConge','updateConge','mesConge'];

// if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

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

// }else{
//     $home->index('login');
// }

?>