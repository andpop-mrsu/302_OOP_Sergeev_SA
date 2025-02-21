<?php

declare(strict_types=1);

use Task02\Vector;

function runTest(): void
{
   $v1 = new Vector(1, 2, 3);
   echo "Ожидается: (1; 2; 3)" . PHP_EOL;
   echo "Получено: " . $v1 . PHP_EOL;
   echo PHP_EOL;

   $v2 = new Vector(1, 4, -2);
   $v3 = $v1->add($v2);
   echo "Ожидается: (2; 6; 1)" . PHP_EOL;
   echo "Получено: " . $v3 . PHP_EOL;
   echo PHP_EOL;

   $v4 = $v1->sub($v2);
   echo "Ожидается: (0; -2; 5)" . PHP_EOL;
   echo "Получено: " . $v4 . PHP_EOL;
   echo PHP_EOL;

   $v5 = $v1->product(6);
   echo "Ожидается: (6; 12; 18)" . PHP_EOL;
   echo "Получено: " . $v5 . PHP_EOL;
   echo PHP_EOL;

   $scalar = $v1->scalarProduct($v4);  
   echo "Ожидается: 11" . PHP_EOL;
   echo "Получено: " . $scalar . PHP_EOL;
   echo PHP_EOL;
   
   $v6 = $v1->vectorProduct($v3);
   echo "Ожидается: (-16; 5; 2)" . PHP_EOL;
   echo "Получено: " . $v6 . PHP_EOL;
   echo PHP_EOL;
} ?>