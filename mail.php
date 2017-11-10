
<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$userName=$_POST['userName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$user_messege=$_POST['user_messege'];
//Тут указываем на какой ящик посылать письмо
$to = "mr.gardas@mail.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($userName)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a><br />
Email: ".htmlspecialchars($email)."
user_messege: ".htmlspecialchars($user_messege).";

// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <vk@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт

header('Location: thanks.html');
exit();
?>
