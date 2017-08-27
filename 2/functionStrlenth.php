<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.08.2017
 * Time: 14:09
 * Создать форму с элементом 1.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */


if (isset($_POST['textarea'])) {
    $text = $_POST['textarea']['text'];
}


function long_word($text)
{
    $arrWord = explode(" ", $text);
    for ($i = 0; $i < count($arrWord); $i++) {
        for ($a = 0; $a < count($arrWord) - 1; $a++) {
            if (mb_strlen($arrWord[$i], 'UTF-8') < mb_strlen($arrWord[$a + 1], 'UTF-8')) {
                $c = $arrWord[$a];
                $arrWord[$a] = $arrWord[$a + 1];
                $arrWord[$a + 1] = $c;
            }
        }
    }

    return array_slice($arrWord, 0, 3);
}
 if (isset($text)) {
     var_dump(long_word($text));
 }
