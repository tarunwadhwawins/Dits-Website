
<?php
function get_safe_value($conn,$str){
   require_once('../core/dbconnection1.php');

   if($str!=''){
      $str=trim($str);
      return mysqli_real_escape_string($conn,$str);
   }
}
?>