<?php

class Cpf
{

    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpfNumero(): string
    {
        return $this->cpf;
    }

    public function validaCpf(string $numero): string
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            echo "CPF inválido";
            exit();
        }

        return $this->numero = $numero;
    }
    
}

?>
