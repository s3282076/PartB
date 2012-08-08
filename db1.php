<?php
  //used for connection with the  dynamic connection via html
  $connection = mysql_connect('yallara.cs.rmit.edu.au:52065', 'winestore', 'rmit1234');
  mysql_select_db("winestore", $connection);
?>
