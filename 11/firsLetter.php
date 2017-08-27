<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23.08.2017
 * Time: 19:53
 * Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
 * что каждое новое предложение начиняется с большой буквы.
 *
 * Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
 * что предложения идут в обратном порядке
 */

//$string = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

$string = 'i felt horrified. i asked the bird-catcher what he received for the birds. he said one dollar a dozen for the snowbirds. sixty cents a dozen for the shore larks and redpolls.';
echo '<pre>';
echo $string;
echo '</pre>';

/*
 * param str
 * return str
 *
 */

function firsLetter($str)
{
    $arr = explode('. ', $str);
    foreach ($arr as $k => $item){
        $arr[$k] = ucfirst(strtolower($item));
    }
    $stringUpperCase = implode('. ',$arr);
    return $stringUpperCase;
}
$upperCase = firsLetter($string);
echo '<pre>';
echo $upperCase;


/*
 * param str
 * return reverse str
 */
function reverse ($str){

    $arr = explode('. ',$str);
    $arr = array_reverse($arr);
    $strReverse = implode('. ',$arr);
    return $strReverse;
}

echo '<pre>';
echo reverse($upperCase);
echo '</pre>';
