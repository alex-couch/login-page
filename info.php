<?php
    
    $username = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["username"]) && !empty($_POST["username"])){
            $username = getData($_POST["username"]);
            $username = ucwords($username);
        }
    }
    
    
    function getData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>