<?php

namespace App\Services;


// Честно признаюсь алгоритм не мой, с просторов инета


class QuickSortService
{
    public function sort($array)
    {

        $left = 0;
        $right = count($array) - 1;

        $this->qsort($array, $left, $right);

        return $array;
    }



    public  function qsort(&$array, $left, $right)
    {

        //Создаем копии пришедших переменных, с которыми будем манипулировать в дальнейшем.
        $l = $left;
        $r = $right;

        //Вычисляем 'центр', на который будем опираться. Берем значение ~центральной ячейки массива.
        $center = $array[(int)($left + $right) / 2];

        //Цикл, начинающий саму сортировку
        do {

            //Ищем значения больше 'центра'
            while ($array[$r] > $center) {
                $r--;
            }

            //Ищем значения меньше 'центра'
            while ($array[$l] < $center) {
                $l++;
            }

            //После прохода циклов проверяем счетчики циклов
            if ($l <= $r) {

                //И если условие true, то меняем ячейки друг с другом.
                list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

                //И переводим счетчики на следующий элементы
                $l++;
                $r--;
            }

            //Повторяем цикл, если true
        } while ($l <= $r);

        if ($r > $left) {
            //Если условие true, совершаем рекурсию
            //Передаем массив, исходное начало и текущий конец
            $this->qsort($array, $left, $r);
        }

        if ($l < $right) {
            //Если условие true, совершаем рекурсию
            //Передаем массив, текущие начало и конец
            $this->qsort($array, $l, $right);
        }

        //Сортировка завершена

    }
}
