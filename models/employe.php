<?php
class Employe{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM gc');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null; 
    }

    static public function get($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM gc WHERE id=:id';
            $stmt =  $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id'=> $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        }catch(PDOException $ex){
            echo 'erreur'.$ex->getMEssage();
        }
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO gc (Nom,Prenom,Matricul,Email,Sexe,date_Emb,pwd,Addres,Departement,Poste,Statut,Etat) VALUES (:Nom,:Prenom,:Matricul,:Email,:Sexe,:date_Emb,:pwd,:Addres,:Departement,:Poste,:Statut,:Etat)'); 
        $stmt->bindParam(':Nom',$data['Nom']);
        $stmt->bindParam(':Prenom',$data['Prenom']);
        $stmt->bindParam(':Matricul',$data['Matricul']);
        $stmt->bindParam(':Email',$data['Email']);
        $stmt->bindParam(':Sexe',$data['Sexe']);
        $stmt->bindParam(':date_Emb',$data['date_Emb']);
        $stmt->bindParam(':pwd',$data['pwd']);
        $stmt->bindParam(':Addres',$data['Addres']);
        $stmt->bindParam(':Departement',$data['Departement']);
        $stmt->bindParam(':Poste',$data['Poste']);
        $stmt->bindParam(':Statut',$data['Statut']);
        $stmt->bindParam(':Etat',$data['Etat']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'Error';
        }
        $stmt->close();
        $stmt = null;

    }

}

?>