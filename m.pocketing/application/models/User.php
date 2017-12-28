<?php
class User{
function clean($value = "") { 
$value = trim($value); 
$value = stripslashes($value); 
$value = strip_tags($value); 
$value = htmlspecialchars($value); 

return $value; 
} 
public static function register($email,$password)
{  ?> <script>alert('Спасибо за регистрацию на нашем сайте!', top.location.href="http://localhost/m.pocketing/index.php" )</script><?php
    file_put_contents("textfile.txt", $email." ".$password."\r\n",FILE_APPEND); 
    
    $db = Db::getConnection();
    $sql = 'INSERT INTO user (email,password) VALUES (:email, :password)';
    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    return $result->execute();
    
  
}

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

