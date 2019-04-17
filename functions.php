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

function secs_to_midnight()
{
    $ts_midnight = strtotime('tomorrow');
    $secs_to_midnight = $ts_midnight - time();

    return $secs_to_midnight;
}


function format_timer(int $secs_to_midnight): string
{
    $hours = floor($secs_to_midnight / 3600);
    $minutes = floor(($secs_to_midnight % 3600) / 60);

    if ($hours < 10) {
        $hours = sprintf("%02d", $hours);
    }

    if ($minutes < 10) {
        $minutes = sprintf("%02d", $minutes);
    }

    return "{$hours}:{$minutes}";
}

function add_css_timer_finishing(int $secs_to_midnight)
{
    $one_hour = 60 * 60;

    $is_less_one_hour = $secs_to_midnight <= $one_hour;

    return $is_less_one_hour ? "timer--finishing" : "";
}
