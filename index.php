<?php
declare();
# Объявление типа параметра
# string, int, bool, float,
function AnyFunction(int ...$params)
{
    return array_sum($params);
}

function arraySum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}
