  <?php
  $full_name = $_POST['full_name']??null;
  $msg ="Hurmatli $full_name biz bilan bog'langaningiz uchun rahmat" ;
  header("Location: may25.php?msg=".$msg);
  exit;

