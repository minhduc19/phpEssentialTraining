<?php 
function confirm_query($result_set){
	if(!$result_set){
		echo "query just died";
	};
}

function find_all_subject(){
	global $connection; 
	$query = "SELECT * FROM subject WHERE visible = 1 ORDER BY position ASC";
	$subject_set = mysqli_query($connection, $query);
	confirm_query($subject_set);
	return $subject_set;
}

function find_page_to_subject($subject_id){
	global $connection;
	$query = "SELECT * FROM page WHERE visible = 1 AND subject_id = {$subject_id} ORDER BY position ASC";
	$page_set = mysqli_query($connection,$query);
	confirm_query($page_set);
	return $page_set;
}

function find_subject_by_id($subject_id){
	global $connection;
	$safe_subject_id = mysqli_real_escape_string($connection,$subject_id);
	$query = "SELECT * FROM subject WHERE id = {$safe_subject_id} LIMIT 1";
	$subject_set = mysqli_query($connection,$query);	
	if ($subject  = mysqli_fetch_assoc($subject_set)){
		return $subject;
	}else{
		return null;
	}
}

function find_page_by_id($page_id){
	global $connection;
	$safe_page_id = mysqli_real_escape_string($connection,$page_id);
	$query = "SELECT * FROM page WHERE id = {$safe_page_id} LIMIT 1";
	$page_set = mysqli_query($connection,$query);	
	if ($page  = mysqli_fetch_assoc($page_set)){
		return $page;
	}else{
		return null;
	}
}
 ?>



