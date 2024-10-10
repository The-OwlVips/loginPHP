<?php

class ValidarUser {
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../DataBase/Conectar.php";
        $this->pdo = $banco;
    } 

    public function verificarSeExiste($usuario, $senha){
        $sql = "SELECT * FROM usuarios WHERE username = :U AND senha = :S AND perfil_ativo = true";
        $comando = $this->pdo->prepare($sql);
        
        $comando->bindValue("U", $usuario);
        $comando->bindValue("S", $senha);

        $comando->execute();
        
        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>