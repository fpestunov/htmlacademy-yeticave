<?php

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';
    if (!is_readable($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require $name;
    $result = ob_get_clean();
    return $result;
}

function format_sum(int $number):string
{
    $decimals = 0;
    $dec_point = ".";
    $thousands_sep = " ";

    $result = number_format(
        ceil($number),
        $decimals,
        $dec_point,
        $thousands_sep
    );

    return $result . '<b class="rub">р</b>';
}

function esc($str)
{
    return htmlspecialchars($str);
}
