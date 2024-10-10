<?php

try {
    $banco = new PDO("sqlite:".__DIR__."/banco.db");
} catch(\PDOException $e) {
    echo "Deu erro no bando".$e->getMessage();
}

?>