<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>login.php</title>

 </head>
 <body>

  <?php

  //connect to database
     $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
     $user   =   "dc306"  ;
     $pass   =   "gwaVMf3z7Abff"  ;
     $db   =   "dc306"  ;

     $link = mysql_connect ( $host , $user , $pass );
     @mysql_select_db($db) or die( "Unable to select database");

     $query="SELECT * FROM entries";
     $result=mysql_query($query);
     $num=mysql_numrows($result);



     //display entries
     $query="SELECT * FROM entries";
     $result=mysql_query($query);
     $num=mysql_numrows($result);

     if($num==0){
       header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/login.html"); /* Redirect browser */
       exit();
     }

     else
     {
       header("Location: http://webprojects.eecs.qmul.ac.uk/dc306/blog/viewBlog.php"); /* Redirect browser */
       exit();
     }

     mysql_close ( $link );

  ?>

</body>
</html>
