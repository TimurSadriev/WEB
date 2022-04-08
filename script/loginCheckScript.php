<?php
   function check($login,$password)
   {
       $data= getArray('SELECT id,login,pass FROM users');
      foreach ($data as $i) {
           $i['login'];
           if ($login==$i['login'] &&$password==$i['pass']){
               $_SESSION['userId']=$i['id'];
               header("Refresh:0 url=PersonalArea.php");
               return void;
           }
       }
       echo "<script> alert('Неверный лоигин/пароль'); </script>";
   }
   function addClient($loginR, $passwordR,$passwordRC,$email){
       if($passwordR==$passwordRC){
           if(strlen($passwordRC)<3){
               echo "<script> alert('Пароль должен быть длиннее 3 символов'); </script>";
           }else {
               $newId = getArray("SELECT MAX(id) FROM users")[0]['MAX(id)'] + 1;
               mysqli_query($_SESSION["link"], "INSERT INTO users (id,login,pass,email,status) VALUES ('$newId','$loginR','$passwordR','$email','0')");
               $_SESSION['userId']=$newId;
               header("Refresh:0 url=PersonalArea.php");
           }
           }else{
           echo "<script> alert('Пароли не совпадают'); </script>";
       }
   }
?>