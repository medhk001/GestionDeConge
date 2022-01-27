<?php

class HomeControllers{
    public function index($page){
        include('views/'.$page.'.php');
    }
}
?>