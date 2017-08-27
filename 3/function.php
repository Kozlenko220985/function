<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.08.2017
 * Time: 12:46
 *  Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение
 */

if (isset($_POST['inputNumb'])) {
    $number = $_POST['inputNumb'];
    echo $number;
}

function delete_word_len($fileName, $number)
{

    $file = file_get_contents($fileName);
    $arrWords = [];
    $arrWords = explode(' ', $file);
    foreach ($arrWords as $k => $item) {

        if (mb_strlen($item, 'UTF-8') == $number) {
            unset($arrWords[$k]);
        }
    }
    $newFile = fopen('2.txt', 'a+');
    $newText = file_put_contents('2.txt', implode(' ', $arrWords));
    fwrite($newFile, $newText);
    fclose($newFile);

}
if (isset($number)) {
    delete_word_len('1.txt', $number);
}