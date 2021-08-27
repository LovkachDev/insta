<?php
$name = $_POST['name'];
$telegram = $_POST['telegram'];
$message = $_POST['message'];

$token = "1748461575:AAFnv-4FmXVyGegGdmkF0GqQ5iZajKlInpI";
$chat_id = "-410147878";
$arr = array(
  'Имя: ' => $name,
  'Связь: ' => $telegram,
  'Сообщение: ' => $message

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


if(mb_strlen($name) < 2 || mb_strlen($name) > 12)
{
  echo "Недопустимое значение имени (2-12 символов)";
}
else if(mb_strlen($telegram) < 4 || mb_strlen($telegram) > 20)
{
  echo "Недопустимое значение Логина в телеграм (4-20 сиволов)";
}
else if(mb_strlen($message) < 10 || mb_strlen($message) > 100)
{
  echo "Недопустимое значение сообщения (10-40 символов)";
}
else{
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

  if ($sendToTelegram)
  {
    header('Location: /');
  }
  else {
    alert('Ошибка');
  }
  exit();
}
?>
