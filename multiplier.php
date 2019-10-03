<?php
echo "> Ik ga twee getallen met elkaar vermenigvuldigen" . PHP_EOL;
echo "> Eerste getal?" . PHP_EOL;
$line = readline("> ");
if (!empty($line)) {
  readline_add_history($line);
}
echo "> Tweede Getal?" . PHP_EOL;
$bruh = readline("> ");
if (!empty($bruh)) {
  readline_add_history($bruh);
}
echo "> Uw resultaat is: ";
echo ($line * $bruh);
?>