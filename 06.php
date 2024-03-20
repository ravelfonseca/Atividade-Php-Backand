<?phpQuestão 6
$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));
$impar = 0;
for ($i = min($X, $Y) + 1; $i < max($X, $Y); $i++) {
   if ($i % 2 != 0) {
     $impar += $i;
     }
}
  echo $impar . "\n";?>