<?php
    $table = '`pages`';
	$_POST = array(
	'title' => 'My New Title',
	'content' => 'My "content" is cool!!!"""!!!"!"!"!',
	'id' => 2,
	 );
	  
 $query = 'UPDATE '.$table.' 
	 SET  
	 `title` = "'.addslashes($_POST['title']).'",
	 `content` = "'.addslashes($_POST['content']).'"
	 WHERE
	  `id` = '.$_POST['id'];
	  echo $query;
 
?> 	





	

<?php
$title = 'You can do it';
$content = 'All night long!';
$phrase1 = 'To be, or not to be.';
?>	
	 <form>
	 Title: <input type="text" name="title" value="<?php echo $title?>" /><br/>
	 
	 Content: <br/>
	 <textarea name="content"><?php echo $content?></textarea>
	 <br/>
	 Phrase1: <input type"text" name="phrase1" value="<?php echo $phrase1?>" /><br/>
	 </form>


	
	
	
	
<?php	
	$table = '`pages`';
	$_POST = array(
	'title' => 'New page',
	'content' => 'New Content',
	'content2' => 'It is a new day',
	);
	
	// INSERT INTO `pages`(`title`, `content`, `content2`) VALUES ("my new title", "content", "blah");
	
	$insert_query = 'INSERT INTO '.$table. '(title, content, content2) VALUES("'.$_POST['title'].'","'.$_POST['content'].'","'.$_POST['content2'].'")';
	echo $insert_query;
	
?>




 
	 
	 

