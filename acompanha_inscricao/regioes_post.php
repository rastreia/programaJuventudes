<?php include_once ("conexao.php"); 

$id_municipiu = $_REQUEST ['id_municipio'];

$a = "'";

$b = $a . $id_municipiu . $a;

$result_regiao = "SELECT DISTINCT `regiao` FROM `acoes` WHERE municipio = $b ";


$resultado_regiao = mysqli_query ($connect, $result_regiao);


while ($row_regiao = mysqli_fetch_array ($resultado_regiao) ):; {
    
    $regiao_post[] = array(
      'regiao' => $row_regiao[0],
      'value' => $row_regiao[0],
    );
} endwhile;

echo(json_encode($regiao_post));