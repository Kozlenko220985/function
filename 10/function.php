<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.08.2017
 * Time: 16:52
 * Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
 * Текст должен вводиться с формы
 */
if (isset($_POST['text'])) $text = $_POST['text'];


function unique ($text){

    $arrText = explode(' ', $text);
    $arr = array_unique($arrText);
    return sizeof($arr);
}

if (isset($text)) {
    echo unique($text);
}