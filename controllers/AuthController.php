<?php

class AuthController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['Matricul'] = $_POST['Matricul'];
            $result = User::login($data);
            if($result->Matricul === $_POST['Matricul'] && password_verify($_POST['Password'],$result->pwd)){
                $_SESSION['logged'] = true;
                $_SESSION['Matricul'] = $result->Matricul;
                if($result->Statut === "Admin"){
                    $_SESSION['Admin'] = true;
                    $URL = BASE_URL."dashboard";
                }else{
                    $_SESSION['Admin'] = false;
                    $URL = BASE_URL;
                }
                // Redirect::to('home');
                header('location:'.$URL);
            }else {
                // Session::set('error','Matricul ou mot de passe est incorrect');
                // Redirect::to('login');
                echo 'err';
            }
        }
    }

    static public function logout(){
        session_destroy();
    }
}
?>