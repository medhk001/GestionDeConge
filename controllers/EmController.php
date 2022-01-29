<?php

class EmController{
    public function getAllEm(){
            $employes = Employe::getAll();
            return $employes;
    }

    public function getEm(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $employe = Employe::get($data);
            return $employe;
        }
    }
    
    public function add(){
        if(isset($_POST['submit'])){
            $data = array(
                'Nom' => $_POST[('Nom')],
                'Prenom' => $_POST[('Prenom')],
                'Matricul' => $_POST[('Matricul')],
                'Sexe' => $_POST[('Sexe')],
                'date_Emb' => $_POST[('date_Emb')],
                'Addres' => $_POST[('Addres')],
                'Email' => $_POST[('Email')],
                'pwd' => $_POST[('pwd')],
                'Departement' => $_POST[('Departement')],
                'Poste' => $_POST[('Poste')],
                'Statut' => $_POST[('Statut')],
                'Etat' => $_POST[("Etat")],

            );
            $result = employe::add($data);
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
}
?>