<?php 
if(isset($_POST['id'])){
   // die(print_r($_POST[('id')]));
    $exdata = new EmController();
    $exdata->deleteEm();
    print_r($exdata);
}
?>