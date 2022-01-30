<?php

class AuthController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['Matricul'] = $_POST['Matricul'];
            // die(print_r($data));
            $result = User::login($data);
            if($result->Matricul === $_POST['Matricul'] && password_verify($_POST['Password'],$result->password)){
                $_SESSION['logged'] = true;
                $_SESSION['Matricul'] = $result->Matricul;
                // Redirect::to('home');
                header('location:'.BASE_URL);
            }else {
                // Session::set('error','Matricul ou mot de passe est incorrect');
                // Redirect::to('login');
                echo 'err';
            }
        }
    }
}
?>