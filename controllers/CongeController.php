<?php

class CongeController{

    public function getAllConge(){
                $Conge = Conge::getAllConge();
                return $Conge;
    }

    public function getMonConge(){
        if(isset($_SESSION['Matricul'])){
            $data['Matricul'] =$_SESSION['Matricul'];
            $MonConge = Conge::getMonConge($data);
            return $MonConge;
        }
    }

    public function demande(){
        $data = array(
            'Matricul' => $_POST['Matricul'],
            'datedepart' => $_POST['datedepart'],
            'dateretour' => $_POST["dateretour"],
            'dateajout' => $_POST["dateajout"],
            'typeConge' => $_POST['typeConge'],
            'etat' => 'Encours de traitement',
        );
        $result = Conge::conge($data);
        if($result === 'ok'){
            //Session::set('success','Employe Ajoute');
            header('location:'.BASE_URL.'mesConge');
        }else{
            echo $result;
        }
    }

    public function monsolde(){
        if(isset($_POST['Matricul'])){
            $data = array(
                'Matricul' => $_POST['Matricul']
            );
            $sold = Conge::solde($data);
            return $sold;
        }else{
            return 'err';
        }
    }

    public function updateConge(){
            $data = array(
                'id' => $_POST['id'],
                'datedepart' => $_POST['datedepart'],
                'dateretour' => $_POST["dateretour"],
                'typeConge' => $_POST['typeConge'],
                'etat' => $_POST['etat']
            );
            $result = Conge::updateConge($data);
            if($result === 'ok'){
              //  Session::set('success','Employe Modifier');
                header('location:'.BASE_URL.'allEmp');
            }else{
                echo $result;
            }
        }
    

    public function deleteCong(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Conge::deleteCon($data);
            if($result === 'ok'){
               // Session::set('success','Employe Supprime');
                header('location:'.BASE_URL."acceptationConge");
            }else{
                echo $result;
            }
        }
    }
}
?>