<?php

class EmController{
    public function getAllEm(){
            $employes = Employe::getAll();
            return $employes;
    }
}
?>