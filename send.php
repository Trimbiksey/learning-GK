<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['phone'];
// $email = $_POST['email'];
// $text = $_POST['text'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'sam_kuznec@mail.ru'; // Логин на почте
    $mail->Password   = 'repz19831'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('sam_kuznec@mail.ru', 'Андрей соловьянюк'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('trimbiksey@gmail.com');  
    
   
// if (!empty($_FILES['myfile']['name'][0])) {
//     for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
//         $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
//         $filename = $_FILES['myfile']['name'][$ct];
//         if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
//             $mail->addAttachment($uploadfile, $filename);
//         } else {
//             $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
//         }
//     }   
// }
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заголовок письма';
        $mail->Body    = "<b>Имя:</b> $name <br>";



        if ($mail->send()) {
            echo "$msg";
        } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
        }
        
        } catch (Exception $e) {
            echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }

?>