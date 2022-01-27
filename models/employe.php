<?php
class Employe{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM gc');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null; 
    }
}

?>