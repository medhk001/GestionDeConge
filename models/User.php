<?php

class User{
    static public function login($data){
        $Email = $data['Email'];
        try{
            $query = 'SELECT * FROM gc WHERE Email=:Email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':Email'=> $Email));
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