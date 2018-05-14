<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>addentry.php</title>

 </head>
 <body>
   <?php

   //get date
   date_default_timezone_set('UTC');
    $dateEntry = date('D, M jS, Y, h:i a e');

    //get title and body
    $title =  $_POST['entryTitle'];
    $body =  $_POST['entryText'];

   //connect to database
      $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
      $user   =   "dc306"  ;
      $pass   =   "gwaVMf3z7Abff"  ;
      $db   =   "dc306"  ;

      $link = mysql_connect ( $host , $user , $pass );
      @mysql_select_db($db) or die( "Unable to select database");

      //add entry
      $query = "INSERT INTO entries(title, body, date) VALUES ('$title','$body', '$dateEntry')";
      mysql_query($query);

      mysql_close ( $link );


      //redirect to blog
       header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/viewBlog.php"); /* Redirect browser */
       exit();
  ?>



</body>
</html>
