<?php
$user_name=$_POST['pass'];
$res = '';
if(strlen($user_name)==0){
    $res = 'Вы ввели пустой пароль';
}
else if(strlen($user_name)<5){
    $res ="Слишком короткий пароль";
}
if(strlen($res)==0){
    $newURL = 'map.php';
    header('Location: '.$newURL);
}

?>