<?php
   function check($login,$password)
   {
       $data= getArray('SELECT id,login,pass FROM users');
      foreach ($data as $i) {
           var_dump($i);echo "<br>";
           $i['login'];
           if ($login==$i['login'] &&$password==$i['pass']){
               $_SESSION['userId']=$i['id'];
               echo "Добро пожаловать, ".$i['login'];
               return;
           }
       }
       echo "Неверный логин/пароль";
   }
?>