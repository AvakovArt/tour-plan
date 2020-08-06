<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];

// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Новое обращение Best Tour plan</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";
$titleEmail = "Заголовок письма";
$bodyEmail = "
<h2>Письмо пользователя</h2>
<b>Почта:</b> $email<br><br>
";
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'AA.UC.tshk.18@gmail.com'; // Логин на почте
    $mail->Password   = 'UnderCreated'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('AA.UC.tshk.18@gmail.com', 'Михаил Аваков'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('michaelsh1p@mail.ru');  

    // Отправка сообщения
    $mail->isHTML(true);
    if (!empty($email)) {
      $mail->Subject = $titleEmail;
      $mail->Body = $bodyEmail;
    } else {
      $mail->Subject = $title;  
      $mail->Body = $body;
    }
    
    
    


// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
if ($email) {
  header('Location: newsletter.html');
} else {
  header('Location: thankyou.html');
}
// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
// header('Location: thankyou.html');
?>
