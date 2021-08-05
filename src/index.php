<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();

$padding = $climate->padding(20);

$padding->label('Somar valores')->result('[1]');
$padding->label('sair')->result('[q]');

$climate->br();

$input = $climate->input('Selecione uma opção do MENU');

$input->accept([1,'q']);
$input->strict();

$response = $input->prompt();

switch ($response) {
    case '1';
    $primeiroNumero = $climate->input('Primeiro valor:');

    $valorPrimeiroNumero = $primeiroNumero->prompt();

    $segundoNumero = $climate->input('Segundo valor:');

    $valorSegundoNumero = $segundoNumero->prompt();

    $soma = $valorPrimeiroNumero + $valorSegundoNumero;

    $climate->output(sprintf('soma %s com %s é igual: %s', $valorPrimeiroNumero, $valorSegundoNumero, $soma));


        break;
    default;
        $climate->out('Sistema encerrado.');
        break;    
}