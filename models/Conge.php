<?php

class Conge{

    static public function deleteCon($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM demande WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id'=> $id));
            if($stmt->execute()){
                return 'ok'; 
                $stmt->close();
                $stmt = null;
            }
        }catch(PDOException $ex){
            echo 'erreur'.$ex->getMEssage();
        }
    }

    static public function updateConge($data){
    // $id = $data['id'];
        $stmt = DB::connect()->prepare('UPDATE demande SET datedepart = :datedepart, dateretour = :dateretour, typeConge = :typeConge, etat = :etat  WHERE id = :id'); 
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':datedepart',$data['datedepart']);
        $stmt->bindParam(':dateretour',$data['dateretour']);
        $stmt->bindParam(':etat',$data['etat']);
        $stmt->bindParam(':typeConge',$data['typeConge']);
       if($stmt->execute()){
            return 'ok';
        }else{
            return 'Error';
        }
        $stmt->close();
        $stmt = null;

    }

    static public function getAllConge(){
        $stmt = DB::connect()->prepare('SELECT * FROM demande');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null; 
    }

    static public function getMonConge($data){
            $id = $data['id'];
            try{
                $query = 'SELECT * FROM demande WHERE id=:id';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(':id'=> $id));
                $employe = $stmt->fetch(PDO::FETCH_OBJ);
                return $employe;
                $stmt->close();
                $stmt = null;
                // if($employe->execute()){
                //     return 'ok';
                // }else{
                //     return 'Error';
                // }
                // $stmt->close();
                // $stmt = null;
            }catch(PDOException $ex){
                echo 'erreur'.$ex->getMEssage();
            }
        }
  

    static public function conge($data){
        // die(print_r($data));
        $stmt = DB::connect()->prepare('INSERT INTO demande (Matricul,datedepart,dateretour,dateajout,etat,typeConge) VALUES (:Matricul,:datedepart,:dateretour,:dateajout,:etat,:typeConge)'); 
        $stmt->bindParam(':Matricul',$data['Matricul']);
        $stmt->bindParam(':datedepart',$data['datedepart']);
        $stmt->bindParam(':dateretour',$data['dateretour']);
        $stmt->bindParam(':dateajout',$data['dateajout']);
        $stmt->bindParam(':etat',$data['etat']);
        $stmt->bindParam(':typeConge',$data['typeConge']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'Error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function solde($data){
        $Matricul = $data['Matricul'];
        try{
            $stmt = DB::connect()->prepare('SELECT * FROM demande WHERE Matricul=:Matricul'); 
            $stmt->execute(array(':Matricul'=> $Matricul));
            $sold = $stmt->fetch(PDO::FETCH_OBJ);
            return $sold;
            $stmt->close();
            $stmt = null;
        }catch(PDOException $ex){
            echo 'erreur'.$ex->getMEssage();
        }
    }
}
?>