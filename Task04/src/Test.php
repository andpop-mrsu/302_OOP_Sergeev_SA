<?php

use App\Stack;

function runTest()
{

    $stack = new Stack(1, 2, 3, 4);
    $temp = '[4->3->2->1]';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $stack . PHP_EOL . PHP_EOL;

    $stack->push(5, 6);
    $temp = '[6->5->4->3->2->1]';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $stack . PHP_EOL . PHP_EOL;

    $elem = $stack->pop();
    $temp = '[5->4->3->2->1]';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '6';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->top();
    $temp = '[5->4->3->2->1]';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '5';
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->isEmpty();
    $temp = false;
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $elem . PHP_EOL . PHP_EOL;

    $stack_null = new Stack();
    $elem = $stack_null->isEmpty();
    $temp = true;
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $elem . PHP_EOL . PHP_EOL;

    $temp = new Stack(99, 66, 44);
    $stack_copy = $temp->copy();
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $stack_copy . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#c", "ade##c");
    $temp = true;
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $result . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#c", "c");
    $temp = false;
    echo "Ожидается ответ: " . $temp . PHP_EOL;
    echo "Полученный ответ: " .  $result . PHP_EOL . PHP_EOL;
}