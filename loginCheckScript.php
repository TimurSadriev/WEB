<?php

session_start();
   function check($login,$password,$baza){
       $fl=false;
       foreach ($baza as $i)
       if ($login==$i['login'] &&$password==$i['password']){
           $_SESSION['userId']=$i['login'];
           $fl=true;
       }
       if($fl==true)
           echo "Добро пожаловать, ".$_SESSION['userId'];
       else
           echo "Неверный логин/пароль";
   }
?>