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
        }else{
            return 'err';
        }
    }

    public function addEm(){
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
            $result = Employe::add($data);
            if($result === 'ok'){
                Session::set('succes','Employe Ajoute');
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }

    public function updateEm(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST[('id')],
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
            $result = Employe::update($data);
            if($result === 'ok'){
                Session::set('succes','Employe Modifier');
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }

    public function deleteEm(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Employe::delete($data);
            if($result === 'ok'){
                Session::set('succes','Employe Supprime');
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
}
?>