<?php

/* https://api.telegram.org/bot1295442542:AAGPGPgKWiGFEVgAU95c0tc2zCuExrIBYuY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1295442542:AAGPGPgKWiGFEVgAU95c0tc2zCuExrIBYuY";
$chat_id = "-428406147";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);
$txt = "";

foreach($arr as $key => $value) {
  $txt .= "%0A".$key."%0A".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location:  index.html');
} else {
  echo "Error";
}
?>