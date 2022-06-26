<?php
class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

/**
 * @author Caio Benevides <caiovenevides@hotmail.com>
 * @date
 */
class CPF extends Documento
{

    /**
     * @description Função p/ validar o CPF
     * @return bool
     * @uses $cpf = new CPF()->validar();
     */
    public function validar(): bool
    {
        $numeroCPF = $this->getNumero();
        return true;
    }

    /**
     * @override
     * @return mixed
     */
    public function getNumero()
    {
        $this->numero = $this->numero + 10;
        parent::getNumero();
    }
}
$doc = new CPF();
$doc->setNumero("12382828998");
var_dump ($doc->validar());
echo "<br>";
echo $doc->getNumero();
?>