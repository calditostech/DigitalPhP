<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome) && empty($idade))
{
    $_SESSION['mensagemDeErro'] = 'O nome não pode ser vazio, por favor informe um nome e idade';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagemDeErro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagemDeErro'] = "O nome é muito extenso";
     header('location: index.php');
     return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagemDeErro'] = "informe um numero para idade";
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <= 12)
{
   for($i = 0; $i <= count($categorias); $i++)
   {
       if($categorias[$i] == 'infantil')
       echo "O nadador ".$nome."compete na categoria infantil";
   }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
       if($categorias[$i] == 'adolescente')
       echo "O nadador ".$nome."compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
       if($categorias[$i] == 'adulto')
       echo "O nadador ".$nome."compete na categoria adulto";
    }
}
