<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.08.2017
 * Time: 11:20
 * Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем
 */
$stopWord = [
    'stop',
    'word'
];

$message = [];
if (isset($_POST['send'])) {
    $message = [
        'name' => $_POST['input']['name'],
        'text' => $_POST['input']['text']
    ];
    if ((!cens($message,$stopWord))){
        echo "<div class='col-sm-4 offset-sm-4 alert alert-danger' role='alert'>!!!ERROR!!!</div>";
    }else{

        $file = fopen('1.txt', 'a+');
        $line = $message['name'] . '--' . $message['text'] . "--";
        fputs($file, $line);
        fclose($file);
    }
}


$textFile = file_get_contents('1.txt');
$arrComent = explode('--', $textFile);
$dellLast = array_pop($arrComent);

function createMessage($arrComent)
{
    if ($arrComent !== false) {
        $arrNum = count($arrComent) - 1;
        echo "<div class = 'col-sm-4 offset-sm-4 media-body'>";
        for ($i = 0; $i <= $arrNum; $i++) {

            if ($i % 2 == 0) {
                echo "<h5>";
                echo "Name: $arrComent[$i] <br>";
                echo "</h5>";
            } else {
                echo $arrComent[$i];
            }
        }
        echo "</div>";
    }
}




function cens ($array,$stopWord){

    foreach ($array as $value){
        foreach ($stopWord as $word){
            if (is_int(strpos(strtolower($value),$word))){
                return false;
            }
        }
    }
    return true;
}
