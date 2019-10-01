<?php
$conexao = mysqli_connect("localhost","id10995407_pizzaria","pizzaria","id10995407_pizzaria");
//onde esta o banco   usuario do banco   senha   nome do banco

$sabor = $_GET['sabor'];
$valor = $_GET['valor'];

$query = "insert into tb_pizza values (null,'Portuguesa',10.00)";


mysqli_query($conexao,$query);

echo "Registro salvo com sucesso!";

