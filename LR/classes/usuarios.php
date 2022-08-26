<?php
    Class Usuario
    {
        private $pdo;
        public $msgErro = "";

        public function conectar($usuario, $host, $email, $senha)
        {
            global $pdo;
            global $msgErro;
            try {
                $pdo = new PDO("mysql:dbname=".$usuario.";host=".$host,$email,$senha);
            } catch (PDOException $e) {
                $msgErro = $e->getMessage();
            }
        }

        public function registrar($usuario, $telefone, $email, $senha)
        {
            global $pdo;
            global $msgErro;
            //verficar se tem um cadrastro
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e",$email);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; //ja esta cadastrado 
            }
            else {
                //caso não, fazer o cadrastro
                $sql = $pdo->prepare("INSERT INTO usuarios (usuario, telefone, email, senha) VALUES (:u, :t, :e, :s)");
                $sql->bindValue(":u",$usuario);
                $sql->bindValue(":t",$telefone);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",sha1($senha));
                $sql->execute();
                return true;// tudo ok
            }
        }   
        
        public function logar($email, $senha)
        {
            global $pdo;
            global $msgErro;
            //verificar se o email e a senha ta cadastrado, se sim
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",sha1($senha));
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                //entrar no sistema (sessao)
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                return true; // ta logado 
            }
            else {
                return false; // não foi encontrado 
            }
        }
    }
?>