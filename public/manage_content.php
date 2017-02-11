<?php include("../includes/dbconnection.php") ?>
<?php include("../includes/layout/header.php") ?>
<?php require_once("../includes/function.php") ?>
<?php 
	if(isset($_GET["subject_id"])){
		$selected_subject_id = $_GET["subject_id"];
		$selected_page_id = null;
		$current_subject = find_subject_by_id($selected_subject_id);
	}elseif(isset($_GET["page_id"])){
		$selected_page_id = $_GET["page_id"];
		$selected_subject_id = null;
		$current_page = find_page_by_id($selected_page_id);
	}else{
		$selected_page_id = null;
		$selected_subject_id = null;	
	}
	
 ?>



    <div id="main">
      <div id="navigation">
        <ul >
        	<?php 
	        	$subject_set = find_all_subject();
	        	while($subject = mysqli_fetch_assoc($subject_set)){
	        ?>

        	<a href="manage_content.php?subject_id=<?php echo urldecode($subject["id"]); ?>">
        		<li<?php if($subject["id"] == $selected_subject_id){echo " class=\"selected\" ";}?>>
        			<?php echo $subject["menu_name"]. " " .$subject["id"] ?>
        		</li>
        	</a>	
        		<ul class="pages">
		        	<?php 
		        	$page_set = find_page_to_subject($subject["id"]);
		        	while($page = mysqli_fetch_assoc($page_set)){
		        		echo "<a href =" . " \"manage_content.php?page_id=".urldecode($page["id"]) . "\">" . "<li>";
		        		echo $page["menu_name"] . " " . $page["id"];
		        		echo "</li></a>";
		        	}
		        	?>
	        	</ul>
        	<?php
        	};
        	 ?>
        	
        </ul>
      </div>
      <div id="page">
        <h2>Manage content </h2>
        <?php 
        if($selected_subject_id){
        	print_r($current_subject["menu_name"]);
        }elseif($selected_page_id){
        	print_r($current_page["content"]);
        };
 		//echo $selected_subject_id;
 		echo $selected_page_id;
 		
 		 ?>
         
        <p>Welcome to the admin area.</p>
        <ul>
          <li><a href="manage_content.php">Manage Website Content</a></li>
          <li><a href="manage_admins.php">Manage Admin Users</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
<?php mysqli_free_result($subject_set)?>
<?php 
if(isset($connection)){
	mysqli_close($connection);
}
 ?>
<?php include("../includes/layout/footer.php")?>
