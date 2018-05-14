<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>login.php</title>

 </head>
 <body>
   <?php

  // Get username and password

     $username = $_POST['user'];
     $password = $_POST['pass'];

  // check to make sure login credentials are correct and open new html page

     if ($username == 'fitness' && $password == 'blog'){
       header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/addentry.html"); /* Redirect browser */
       exit();
     }



  header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/login.html"); /* Redirect browser */
  exit();
?>
</body>
</html>
