<?php
   // Edit upload location here
   $destination_path = "../uploads/";

   $result = 0;
   
   $target_path = $destination_path . "DevlandCatalogue.pdf";

   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   
   sleep(1);
?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>   
