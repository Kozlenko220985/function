<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.08.2017
 * Time: 15:03
 *  Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 *  Директория и искомое слово задаются как параметры функции
 */

if (isset($_POST['input'])) {
    $dir = $_POST['input']['dir'];
    $file = $_POST['input']['file'];
}


function findFile($dir, $str)
{
    $res = [];
    if ($dir === '' && $str === '') {
        echo "введите данные";
    } else {
        $arrDir = [];
        $arrDir = scandir($dir);
//        var_dump($arrDir);
        $strcmp = '';
        foreach ($arrDir as $key => $item) {
            $strcmp = strpos($item, $str);
            if ($strcmp !== false) {
                $res[] = $arrDir[$key];
            }
        }
    }
    return $res;
}

if (isset($dir) && isset($file)) {
    var_dump(findFile($dir, $file));
}