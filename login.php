<?php

    include("includes/dbconfig.php");

    if(isset($_POST['done'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

           
            try{

                $auth = $firebase->getAuth();
            

                if ($auth->verifyPassword($email, $password)) {
                    header("Location:home.html");
                    exit;
                }
            

            }catch(exception $e){
                echo "Error! something went wrong ...";
            }
            
            

    }

?>