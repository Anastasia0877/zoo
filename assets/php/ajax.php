<?php

$headers = 'index.html';
$name = $_POST['fname'];
$email = $_POST['email'];
$order = $_POST['order'];

function parser($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if($result == false){
      echo "Ошибка отправки запроса: " . curl_error($curl);
      return false;
    }
    else{
      echo "<script>
      alert('Данные успешно отправлены')
document.location.href='/index.html'
      </script>";


      return true;
    }
}
$text .= "";
$text .= "Имя: ".$name."   ";
$text .= "Email: ".$email."   ";
$text .= "Проблема: ".$order;

$token = "6375759702:AAFzjOmKQSajA4Yy6NLD6MfFqjFQv_d_0YQ";
/*идентификатор группы*/
$chat_id = "5937573503";
/*делаем запрос и отправляем сообщение*/
parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}");
 ?>