<?php

class User{
    static public function login($data){
        $Matricul = $data['Matricul'];
        try{
            $query = 'SELECT * FROM gc WHERE Matricul=:Matricul';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':Matricul' => $Matricul));
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