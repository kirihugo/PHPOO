<?php
class ProdutoRepositorio
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
}
?>