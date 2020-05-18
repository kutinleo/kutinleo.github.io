<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$name = urldecode($name);
$surname = urldecode($surname);
$name = trim($name);
$surname = trim($surname);
//echo $name;
//echo "
";
//echo $surname;
if (mail("", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$surname ,"From: info@dezund.cf \r\n"))
{ echo "сообщение успешно отправлено";
} else {
echo "при отправке сообщения возникли ошибки";
}?>