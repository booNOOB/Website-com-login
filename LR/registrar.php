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
<div id="corpo-form-cad">
    <h1>Registrar</h1>
    <form method="POST">
        <input type="text" name ="usuario" placeholder="Usuário" maxlength="16">
        <input type="text" name ="telefone" placeholder="Telefone" maxlength="30">
        <input type="email" name ="email" placeholder="Email" maxlength="40">
        <input type="password" name ="senha" placeholder="Senha" maxlength="16">
        <input type="password" name ="confsenha" placeholder="Confirmar Senha" maxlength="16">
        <input type="submit" value="Cadastrar">
    </form>
</div>
<?php
// vefiricar se clicou no botão
if (isset($_POST['email']))
{
    $usuario = addslashes($_POST['usuario']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confsenha']);
    //verificar se ta vazio
    if(!empty($usuario) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $x->conectar("loginkrl","localhost","root",""); // para conectar com o banco de dados 
        if($x->msgErro == "")// sem erro
        {
            if($senha == $confirmarSenha)
            {
                if ($x->registrar($usuario,$telefone,$email,$senha))
                {
                ?>
                    <div id="msg-sucesso">
                    Cadastrado com sucesso! Acesse para entrar!
                    </div>
                <?php
                }
                else 
                {
                ?>
                    <div id="msg-erro">
                    Email ja cadastrado!
                    </div>
                <?php
                }
            }
            else 
            {
                ?>
                    <div id="msg-erro">
                    Senha e confimar senha não correspondem
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
    } else{
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