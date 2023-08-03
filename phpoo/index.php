<?php

class Fruta 
{
    public $nome;
    public $cor;


    function set_name($nome)
    {
        $this->nome = $nome;
    }

    function set_cor($cor)
    {
        $this->cor = $cor;
    }
    function get_name()
    {
        return $this->nome;
    }
    function get_cor()
    {
        return $this->cor;
    }
}

$maca = new Fruta ();
$maca->set_name("maca_ifsp","vermelho");
echo "<br>".$maca->get_name()."<br>".amanda."<br>".besta;
?>