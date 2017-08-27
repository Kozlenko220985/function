<?php
$stopWord = ['stop'];

if (isset($_POST['input'])) {
    $message = $_POST['input'];
    if ($data = sanitaze($message, $stopWord)) {
        save(...array_values($data));
        if (isset($comments)) {
            $comments = array_merge($comments, read());
        }
        read();
    } else {
        $error = 'Некорректный комментарий';
    }
}

/*
 * param string
 * param array
 * return true|false
 */

function cansor($string, $stopWord)
{
    foreach ($stopWord as $word) {
        if (is_int(strpos(strtolower($string), $word))) {
            return false;
        }
    }
    return true;
}

/*
 * param array
 * param array
 * return array|null
 */

function sanitaze($data, $stopWord)
{
    $arr = null;
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            if (!cansor($value, $stopWord)) {
                return null;
            }
            $data[$key] = htmlspecialchars(strip_tags(trim($value)));
        }
    }
    $arr = $data;
    return $arr;
}

/*
 * param string
 * param string
 * return newLine
 */
function save($user, $text)
{
    $save = json_encode(['name' => $user, 'text' => $text]) . PHP_EOL;
    return file_put_contents('message.txt', $save, FILE_APPEND);
}

/*
 * return array
 */

function read()
{
    $arr = [];
    $file = fopen('message.txt', 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $arr[] = json_decode($line, true);
        }
    }
    fclose($file);
    return $arr;
}

$comments = read();