<?php
   function check($login,$password)
   {
       $data= getArray('SELECT id,login,pass FROM users');
      foreach ($data as $i) {
           $i['login'];
           if ($login==$i['login'] &&$password==$i['pass']){
               $_SESSION['userId']=$i['id'];
               header("Refresh:0 url=index.php");
               return void;
           }
       }
       echo "Неверный логин/пароль";
   }
?>