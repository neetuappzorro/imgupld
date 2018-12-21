<!--image upload-->

<?php
	
	error_reporting(0);
	global $pdo;
	$image ="nitu.png";
	$filetype = $_FILES['file_img']['type'];
    $dir="images/".$image;
	//$image = str_replace(' ', '+', $image);
	//$splitText = explode ( "\\n" , $image );
	//$image=rand(1000,9000)."_".time().".png";
	//file_put_contents(dirname(__FILE__)."/images/".$image,$splitText);
	file_put_contents(dirname(__FILE__)."/images/".$image,$image);
	$res=$pdo->prepare("update tb1 set image=:image where id=:id");
	$array=array(':image'=>$image,':id'=>$id);
	$res->execute($array);
		
	
	

?>

