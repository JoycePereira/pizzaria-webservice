<?php
$conexao = mysqli_connect("localhost","id11099541_projmobile","projmobile","id11099541_projmobile");

$codigo = $_POST['codigo'];

$query = "SELECT" * FROM tb_pizza where cd_pizza = $codigo";

$result = mysqli_query($conexao,$query);

while($linha = mysqli_fetch_assoc($result)){
  $registro = array(
    'pizza' => array(
      'codigo' => $linha['cd_pizza'],
      'sabor' => $linha['ds_sabor'],
      'valor' => $linha['vl_pizza'],

    )
  );
}

echo json_encode($registro);
