<?php
//PHP tags
//<?php
//<? - short tag - sempre ativa apos 5.4.0
// <script type="php">
//<?= - sempre ativo - segunda short open tag

//Strings
// aspas simples valor full literal
//duplas faz o parser em variavel

//Scalar types 
//integer
//boolean
//float
//string
//Compound
//array
//object
//Other types
//resource
//null

// $a  = 'Por  valor';
// $b  = &$a;  //  Criando a referência  para  $a
// $b  = 'E  agora ?';
// print $a; //  E agora ?
// print $b; //  E agora ?

// //operadores aritméticos
// $soma = 10  + 10; //  20
// $subtracao  = 5 - 10; //  -5
// $multiplicacao  = 10  * 10; //  100
// $modulo = 10  % 2;  //  0

//http://php.net/manual/pt_BR/language.operators.bitwise.php)
//7 * 2 ^ 9 - calculo matematico
// print (7 <<  9);
// // 4 / 2 ^9
// print (4  >>  6);
//~x  = -x  - 1.
// print (~30);

//Construtores de saida
//exit();
//die(); -> apelido para exit
//echo()
//return()
//print()

//Construtores de avaliação
//empty()
//eval()
//include e include_once - gera somente warning
//require e require_once - gera fatal error
//isset()
//unset()
//list()
//Constantes mágicas
// echo preg_replace('/[\d\w\-\/]+(?=basics\.php)/', '', __FILE__);
//__LINE__
//__FILE__
//__DIR__
//__FUNCTION__
//__CLASS__
//__TRAIT__
//__METHOD__
//__NAMESPACE
// echo __FILE__;

//PECL
//instalar pear

//opCache ja vem habiliado pelo que vi ao instalar os pacotes do php no linux
// print_r(opcache_get_status()); echo PHP_EOL;
// print_r(opcache_get_configuration());
// opcache_reset();
//opcache_compile_file('meu_arquivo.php');
//http://php.net/manual/pt_BR/opcache.configuration.php
// $data = '020';  
// $var  = (string)  $data;
// echo $var;
// $a =     9;
// $b =     10;
// echo $a & $b;
// estudar bitwise
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0  1    0   =10

// result   8  

// only bit they share together is the 8 bit. So 8 gets returned.

//   $a =     36;
// $b =     103;
// echo $a & $b;

// place value   128  64  32  16   8    4   2   1
// $a             0   0    1   0   0    1   0   0   =36
// $b             0   1    1   0   0    1   1   1   =103

// result  32+4 = 36
// the only bits these two share together are the bits 32 and 4 which when added together return 36.

// $a =     9;
// $b =     10;
// echo $a | $b;

// place value   128  64  32  16   8  4   2   1
// $a             0   0    0  0    1  0   0   1   =9
// $b             0   0    0  0    1  0   1   0   =10

// result 8+2+1 = 11
// 3 bits set, in the 8, 2, and 1 column.add those up 8+2+1 and you get 11

// $a =     9;
// $b =     10;
// echo $a ^ $b;

// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0   1   0   =10

// result  2+1 = 3
// the 2 bit and the 1 bit that they each have set but don't share. Soooo 2+1 = 3
// echo 5  & 3;

//Paginas para ler
//http://php.net/manual/pt_BR/language.operators.precedence.php
//http://php.net/manual/pt_BR/configuration.file.per-user.php
//http://php.net/manual/pt_BR/language.control-structures.php)

echo  true ? 0 : true ? 1 : 2;