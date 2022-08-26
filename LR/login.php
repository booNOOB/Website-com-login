<?php
    require_once 'classes/usuarios.php';
    $x = new Usuario;
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Trinity | Oficial</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/logotest.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div id="corpo-form-login">
    <h1>Entrar</h1>
    <form method="POST">
        <input type="email" placeholder="Email" name ="email">
        <input type="password" placeholder="Senha" name ="senha">
        <input type="submit" value="Entrar">
        <a href="registrar.php">Ainda não tem uma conta?<strong> Fazer Conta</strong></a>
    </form>
</div>
<?php
// vefiricar se clicou no botão
if (isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verificar se ta vazio
    if(!empty($email) && !empty($senha))
    {
        $x->conectar("loginkrl","localhost","root",""); // para conectar com o banco de dados
        if($x->msgErro == "")// sem erro
        {
            if($x->logar($email,$senha))
            {
                header("location: ../tela_user.php");
            }
            else
            {
                ?>
                    <div id="msg-erro">
                    Email e/ou senha estão incorretos!
                    </div>
                <?php
            }
        }
        else 
        {
            ?>
                <div id="msg-erro">
                <?php echo "Erro: ".$x->msgErro;?>
                </div>
            <?php
        }
    } else
    {
        ?>
            <div id="msg-erro">
            Preencha todos os campos!
            </div>
        <?php
    }
}
?>
</body>
</html>