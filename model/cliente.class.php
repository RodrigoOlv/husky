<?php
class Cliente {
    private $id;
    private $nome;
    private $origem;
    private $destino;

    public function __construct() {}
    public function __destruct() {}

    public function get($atrib) {
        return $this->atrib;
    }

    public function __set($atrib, $value) {
        $this->$atrib = $value;
    }

    public function __toString() {
        return nl2br(
            "Nome: $this->nome
            Endereço de Origem: $this->origem
            Endereço de Destino: $this->destino"
        );
    }
}