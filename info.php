<?php
    session_start();
    $nameerror = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["username"]) && !empty($_POST["username"])){
            $_SESSION["username"] = getData(ucwords($_POST["username"]));
            header('Location: home.php');
        }else{
            $nameerror = "Please enter a name";
        }
    }
    
    
    function getData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>