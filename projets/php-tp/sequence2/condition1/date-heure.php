<?php
echo "Aujourd'hui nous sommes le ". date("d/m/Y");
echo PHP_EOL;
echo "Il est ". date("H:i:s");
echo PHP_EOL;
if (date("H:i:s") >= date("13:i:s"))  {
echo "Je vous souhaite un bon après-midi !";
} else {
echo "Je vous souhaite une bonne matinée !";
}
