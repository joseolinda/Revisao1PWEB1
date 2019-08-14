<?php 
    
    function __e($input){
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = stripcslashes($input);
        return $input;
    }

    $first_name = __e($_POST['first_name']);
    $last_name = __e($_POST['last_name']);
    $email = __e($_POST['email']);
    $password = __e($_POST['password']);
    $confirm_password = __e($_POST['confirm_password']);
    $terms = __e($_POST['terms']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            color: #666;
		    background: #f5f5f5;
		    font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
	    }

        .resumo {
            display: flex;
            flex-direction: column;
            background: #fff;
            padding: 20px;
            box-shadow: 5px 5px 5px #0002;
            border-radius: 8px;
            margin-top: 40px;
        }

        .resumo h2 {
            color: #666;
        }

        .title_attr {
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>
    <div class="resumo">
        <h2>Resumo do cadastro do usuário <?php echo $first_name; ?></h2>
        <p>
            <span class="title_attr">Nome completo:</span>
            <?php echo $first_name." ".$last_name; ?>
        </p>
        <p>
            <span class="title_attr">Email:</span>
            <?php echo $email; ?>
        </p>
        <p>
            <span class="title_attr">Senha:</span>
            <?php echo $password; ?>
        </p>
        <p>
        <span class="title_attr">Termos de uso:</span>
        <?php 
            if ($terms==true) {
                echo " Aceitos";
            } else {
                echo "Negados";
            }
        ?></p>
    </div>
</body>
</html>