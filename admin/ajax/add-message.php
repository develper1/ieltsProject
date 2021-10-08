<?php 
include '../db.php';

$output['success']=false;

if(isset($_POST['score_explain'])){
 
    
    $score_explain=mysqli_real_escape_string($con,$_POST['score_explain']);
    $score_type=mysqli_real_escape_string($con,$_POST['score_type']);
	$pf_id=mysqli_real_escape_string($con,$_POST['pf_id']);


   $sql = "INSERT INTO tbl_message (score_explained,score_type,pf_id) VALUES ('$score_explain','$score_type','$pf_id')";
    if(mysqli_query($con, $sql)){ 
    	$output['success']=true;    
        $output['message']="Added Successfully.";
        

        ///Get all data
        $sql = "SELECT Msg_id,score_explained,score_type FROM tbl_message
        inner join tbl_profile on (tbl_profile.pf_id=tbl_message.pf_id)
        order by Msg_id Desc";
		$result=mysqli_query($con,$sql);
		
		while ($row = mysqli_fetch_assoc($result)) {
        	$output['data'][]=$row;
    	}

      } else{
        $output['message']="Error occured.";
      }
}
echo json_encode($output);

