<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $name = htmlspecialchars($name);
    $number = htmlspecialchars($number);
    $name = urldecode($name);
    $number = urldecode($number);
    $name = trim($name);
    $number = trim($number);
    /echo $name;
    /echo "<br>";
    /echo $number;
    mail("Lex142@inbox.ru", "Заявка с сайта", "Имя:".$name.". Номер: ".$number ,"From: example2@mail.ru \r\n");
    if (mail("Lex142@inbox.ru", "Заказ с сайта", "Имя:".$name.". Номер: ".$number ,"From: example2@mail.ru \r\n"))
    {
    echo "сообщение успешно отправлено";
    } 
    else {
    echo "при отправке сообщения возникли ошибки";
}

