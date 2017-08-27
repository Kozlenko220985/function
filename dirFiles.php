<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.08.2017
 * Time: 14:58
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции
 */

function listFilesDirectory($dir){
    return scandir($dir);
}
var_dump(listFilesDirectory(__DIR__));