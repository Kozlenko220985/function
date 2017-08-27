<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.08.2017
 * Time: 10:46
 * Создать форму с двумя элементами 1. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами
 */



if (isset($_POST['textarea'])) {
    $text1 = $_POST['textarea']['text1'];
    $text2 = $_POST['textarea']['text2'];
}

function getCommonWords($a, $b)
{

    $arrText1 = explode(" ", $a);
    $arrText2 = explode(" ", $b);
    $commonArr = [];
    foreach ($arrText1 as $item) {
        foreach ($arrText2 as $value) {
            if ($item === $value) {
                $commonArr[] = $item;
            }
        }
    }
    return $commonArr;
}
if (isset($text1) && isset ($text2)) {
    var_dump(getCommonWords($text1, $text2));
}
