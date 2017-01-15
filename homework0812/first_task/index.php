<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1</title>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: darkgrey;
        }

        div.container {
            border-radius: 0.5em;
            background-color: white;
            padding-top: 0.25em;
            padding-left: 2.25em;
            padding-right: 2.25em;
            padding-bottom: 0.25em;
            width: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>

<div class="container">
    <ol>
        <li>
            <p>Даны два числа. Найти их сумму и произведение.</p>

            <p>
                <?php
                $a = 7;
                $b = 9;
                echo "a = {$a} , b = {$b}";
                echo '<br>';
                echo 'a + b = ' . ($a + $b);
                echo '<br>';
                echo 'a * b = ' . ($a * $b);
                ?>
            </p>
        </li>
        <li>
            <p>Даны два числа. Найдите сумму их квадратов.</p>

            <p>
                <?php
                $a = 7;
                $b = 9;
                echo "a = {$a} , b = {$b}";
                echo '<br>';
                echo 'a<sup>2</sup> + b<sup>2</sup> = ' . ($a * $a + $b * $b);
                ?></p>
        </li>
        <li>
            <p>Даны три числа. Найдите их среднее арифметическое.</p>

            <p>
                <?php
                $a = 7;
                $b = 9;
                $c = 8;
                echo "a = {$a} , b = {$b}, c = {$c}";
                echo '<br>';
                echo '(a + b + c)/3 = ' . ($a + $b + $c) / 3;
                ?></p>
        </li>
        <li>
            <p>Дано натуральное число. Найдите остатки от деления его на 3 и на 5.</p>

            <p>
                <?php
                $a = 7;

                echo "a = {$a}";
                echo '<br>';
                echo 'a % 3 = ' . ($a % 3);
                echo '<br>';
                echo 'a % 5 = ' . ($a % 5);

                ?></p>
        </li>
        <li>
            <p>Дано число. Увеличьте его на 30%, на 120%.</p>

            <p>
                <?php
                $a = 7;
                echo "a = {$a}";
                echo '<br>';
                echo 'a + 30% = ' . ($a * 1.3);
                echo '<br>';
                echo 'a + 120% = ' . ($a * 2.2);

                ?>
            </p>
        </li>
        <li>
            <p>Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.</p>

            <p>
                <?php
                $a = 7;
                $b = 9;
                echo "a = {$a} , b = {$b}";
                echo '<br>';
                echo "a*0.4 + b*0.84 = " . ($a * 0.4 + $b * 0.84);
                ?>
            </p>
        </li>

    </ol>


</div>

</body>
</html>