<?php

claass AuthController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['Email'] = $_POST['Email'];
            $result = User::login($data);
            if($result->Email === $_POST['Email'] && password_verify($_POST['password']))
        }
    }
}
?>