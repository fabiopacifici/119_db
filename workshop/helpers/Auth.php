<?php

class Auth
{
  public static function check($connection, $username, $password)
  {

    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    $hashedPassword = md5($password);

    $sql = "SELECT `id`, `username` from `users` WHERE `username` = '$username' and `password` = '$hashedPassword'";
    //dd($sql);

    $result = $connection->query($sql);


    if ($result->num_rows > 0) {
      // i found the user
      //var_dump('here in results');
      //dd($result->fetch_assoc(), 'here');
      $userData = $result->fetch_assoc();
      //TODO: check if thesession is alreay active
      $_SESSION['userId'] = $userData['id'];
      $_SESSION['userName'] = $userData['username'];
    } else {
      // user not found 
      $_SESSION['userId'] = 0;
      $_SESSION['userName'] = '';
    }

    //dd($result, $username, $password);
  }
}
