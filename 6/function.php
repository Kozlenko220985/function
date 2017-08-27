<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.08.2017
 * Time: 17:59
 *  Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные
 * фото должны помещаться в папку gallery и выводиться на странице в виде таблицы
 */

$dir = 'gallery/';
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['fileName']['tmp_name'])) {
        move_uploaded_file($_FILES['fileName']['tmp_name'], $path . $_FILES['fileName']['name']);
    }
}



function filePath($dir)
{
    $arrNames = [];
    if (!$dir) exit ('не найдена папка');
    $arrNames = scandir($dir);


    for ($i = 0; $i <= 1; $i++) {
        $arrDel = array_shift($arrNames);
    }

    $path = [];
    global $arrNum;
    $arrNum = count($arrNames) - 1;
    for ($i = 0; $i <= $arrNum; $i++) {
        $path[] = $dir . $arrNames[$i];
    }
    return $path;

}
//filePath($dir);
//var_dump(filePath($dir));

