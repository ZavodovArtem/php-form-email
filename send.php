<?php

$fio = $_POST['fio'];
$email = $_POST['email'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$email = urldecode($email);

$fio = trim($fio);
$email = trim($email);

echo $fio;
echo $email;

if (mail('arti.zavodov@mail.ru', 'Заявка с сайта', 'ФИО:'.$fio.'. E-mail:'.$email, 'from: arti.zavodov@mail.ru \r\n'))
        { echo 'сообщение успешно отправлено';
    }else{
        echo 'при отправке сообщения возникли ошибки';
    }
?>
