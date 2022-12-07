<?php

    header('content-Type:text/html; charset=utf-8');

    $name= $_POST['id'];
    $password= $_POST['pw'];
    $gender= $_POST['gen'];
    $message= $_POST['msg'];
    $car= $_POST['car'];

    // textarea 는 줄바꿈을 \n으로 만듬. 그대로 echo하면 브라우저에서 줄바꿈 안됨
    // /n --> <br> 로 변환해주는 기능함수가 php언어에 이미 존재함
    $message= nl2br($message);

    echo "<h4>$name <h4>";
    echo "$password <br>";
    echo "$gender <br>";
    echo "$messag <br>";
    echo "$car <br>";

    //multiple choice 에 의해 다중 선택된 값들을 배열로 전달받기
    $fruits= $_POST['fruits'];
    // 배열의 개수를 얻어오기
    $len= count($fruits);
    for($i=0; $i <$len; $i++){
        echo $fruits[$i] . ",";

    }

?>