<?php
    function valida($input) {   
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    }

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $first_name = valida($_POST["first_name"]);
        $last_name = valida($_POST["last_name"]);
        $email = valida($_POST["email"]);
        $password = valida($_POST["password"]);
        $confirm_password = valida($_POST["confirm_password"]);
    }

    function Exibir() {
        global $first_name, $last_name, $email, $password, $confirm_password;
        echo $first_name." ".$last_name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $confirm_password;
    }

    if($password===$confirm_password){
        Exibir();
    } 
?>
