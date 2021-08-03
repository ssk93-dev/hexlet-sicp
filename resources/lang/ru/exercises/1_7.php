<?php

return [
    'title' => 'Квадратный корень',
    'description' => [
        '1' =>
        'Проверка ',
        '2' =>
        ', которую мы использовали для вычисления квадратных корней, будет довольно неэффективна для поиска квадратных корней от очень маленьких чисел. ' .
        'Кроме того, в настоящих компьютерах арифметические операции почти всегда вычисляются с ограниченной точностью. ' .
        'Поэтому наш тест оказывается неадекватным и для очень больших чисел. ' .
        'Альтернативный подход к реализации ',
        '3' =>
        ' состоит в том, чтобы следить, как от одной итерации к другой изменяется ',
        '4' =>
        ', и остановиться, когда изменение оказывается небольшой долей значения приближения. ' .
        'Разработайте процедуру вычисления квадратного корня ',
        '5' =>
        ', которая использует такой вариант проверки на завершение. ' .
        'Верно ли, что на больших и маленьких числах она работает лучше?',
    ],
];
