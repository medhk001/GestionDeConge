<?php 
if(isset($_POST['id'])){
   // die(print_r($_POST[('id')]));
    $exdata = new CongeController();
    $exdata->deleteCong();
    // print_r($exdata);
}
?>