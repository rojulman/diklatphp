<?php  $formType =$_GET['fType'];
  $fullName =$_GET['fullName'];
  $program = $_GET['program'];
  
  echo '<p>';
  echo 'Hello '. $fullName .'<br/>';
  echo 'You are in the '.$program .' program <br/>';
  echo 'Form Method was '.$formType;
  
  echo '</p>';


?>