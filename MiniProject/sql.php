<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>addentry.php</title>

 </head>
 <body>
 <?php


 $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
 $user   =   "dc306"  ;
 $pass   =   "gwaVMf3z7Abff"  ;
 $db   =   "dc306"  ;

 $link  =  mysql_connect ( $host ,  $user ,  $pass );
 if (! $link ) {
     die( 'Could not connect: '  .  mysql_error ());
 }
 echo  'Connected successfully' ;

 $db_selected  =  mysql_select_db ( $db ,  $link );
 if (! $db_selected ) {
     die ( 'Can\'t use $db : '  .  mysql_error ());
 }



  $sql = "DELETE FROM entries WHERE title='OMG'";
   $result = mysql_query($sql);

   $sql = "DELETE FROM entries WHERE title='WOW'";
    $result = mysql_query($sql);

//display entries
$query="SELECT * FROM entries";
$result=mysql_query($query);
$num=mysql_numrows($result);
echo "<p>There are $num entries in table entries</p><br/>";
if ($num==0) {
echo "<br/><p>The database contains no entries yet</p><br/>";
}
else
{ $i=0;
while ($i < $num) {
$title=mysql_result($result,$i,"title");
$body=mysql_result($result,$i,"body");
$date=mysql_result($result,$i,"date");

echo "<p><b>$title $body $date</b></p><br>";
$i++;
}
}

 mysql_close ( $link );

 ?>

</body>
</html>
