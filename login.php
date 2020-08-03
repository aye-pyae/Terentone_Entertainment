<?php 


require "Views/header.view.php";

require "database.php";

session_start();


$config = require "config.php";


if(isset($_SESSION['is_logged_in']) && isset($_SESSION['interest'])){


	header("Location: Source/".ucwords($_SESSION['interest'])."/".$_SESSION['interest'].".php");

} 


if($_SERVER['REQUEST_METHOD']==='POST'){

	$user_name=htmlspecialchars($_POST['username']);
	$pass_word=htmlspecialchars($_POST['password']);
    


    $db = new Database($config);    

    $db -> set_table('users');

    $all_users = $db -> get_all_users();

    
    if($all_users){

        foreach($all_users as $users){

            if (($user_name == $users[1] || $user_name == $users[2])  && $pass_word == $users[3] && isset($users[4])){
            
                $_SESSION['usernames'] = trim($user_name);

                $_SESSION['interest'] = trim($users[4]); 

                $_SESSION['is_logged_in']=true;


                header("Location: Source/".ucwords($_SESSION['interest'])."/".$_SESSION['interest'].".php");        

            } else{

            $status = "Incorrect User Name or Password!";

            }   

        
        }


    } else{

        echo "Couldn't get any users data.";
    }

    
} 


include 'Views/login_view.php';


?>