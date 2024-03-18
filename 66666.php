<?php
// Определение функции для проверки простого числа
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

// Пример использования функции
$number = 19;
if (isPrime($number)) {
    echo "$number является простым числом";
} else {
    echo "$number не является простым числом";
}
?>
