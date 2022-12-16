<?php
    header('Content-Type:text/plain; charset=utf-8');

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCodeFirst'];
    $tel = $_POST['tel'];
    $now= date("Y-m-d H:i:s");
    

    // MySQL DB에 데이터 저장 [ 테이블명 : user_data ]
    $db= mysqli_connect("localhost", "jspstudio", "qawsedrftg#3", "jspstudio"); //host, id, pasword, filename
    mysqli_query($db, "set names utf8");

    // 데이터들 삽입하는 쿼리문
    $sql= "INSERT INTO user_data(id, pw, name, email, addr, zipcode, tel, date) VALUES('$id','$password','$name','$email', '$address', '$zipCode', '$tel', '$now')";
    $result= mysqli_query($db, $sql);

    mysqli_close($db);
    
?>