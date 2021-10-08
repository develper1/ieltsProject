<?php 
include '../db.php';
	$output['success']=false;
if(isset($_POST['Msg_id'])){
$message_id=mysqli_real_escape_string($con,$_POST['Msg_id']);


   $sql = "delete from tbl_message where Msg_id=$message_id";
    if(mysqli_query($con, $sql)){ 
    	$output['success']=true;    
        $output['message']="Deleted Successfully.";
    }else{
    	$output['success']=false;    
        $output['message']="Error occured.";
    }
}

echo json_encode($output);