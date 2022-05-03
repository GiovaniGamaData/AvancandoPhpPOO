<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Funcionario.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';



//$endereco = new Endereco('SAO PAULO', 'GUAIANASES', 'RUA JERONIMO DIAS RIBEIRO', '196');
//$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
//$primeiraConta = new Conta($vinicius);
//$primeiraConta->deposita(500);
//$primeiraConta->saca(300); // isso é ok
//
//echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
//echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;
//
//$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco );
//$segundaConta = new Conta($patricia);
//var_dump($segundaConta);
//
//$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
//unset($segundaConta);
//echo Conta::recuperaNumeroDeContas();

$funcionario = new Funcionario('Giovani', new CPF("495.906.748-95"), "Desenvolvedor Jr");
var_dump($funcionario);
