<?phpQuestão 2
$valor = trim(fgets(STDIN));

$valor = intval($valor);

echo $valor . "\n";

$cedulas = [100, 50, 20, 10, 5, 2 , 1];


foreach ($cedulas as $cedula){

  $quantidade_cedulas = intdiv($valor, $cedula);

  $valor %= $cedula;

  echo $quantidade_cedulas . " nota(s) de R$ " . $cedula . ",00\n";
}?>