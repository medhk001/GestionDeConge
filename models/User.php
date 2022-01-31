<?php

class User{
    static public function login($data){
        // $Matricul = $data['Matricul'];
        // die(print_r($data));

        try{
            $query = 'SELECT * FROM gc WHERE Matricul=:Matricul';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':Matricul' => $data['Matricul']));
            // die(print_r($stmt->fetch(PDO::FETCH_OBJ)));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute()){
                return 'ok'; 
                $stmt->close();
                $stmt = null;
            }
        }catch(PDOException $ex){
            echo "Error";

        }
    }
}
?>