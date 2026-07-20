<?php
$dir='uploads/';
if(!is_dir($dir)) mkdir($dir,0777,true);
if(isset($_FILES['image'])){
 $name=basename($_FILES['image']['name']);
 move_uploaded_file($_FILES['image']['tmp_name'],$dir.$name);
}
?>
<!DOCTYPE html><html><body>
<h2>Upload Gallery Image</h2>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" required>
<button type="submit">Upload Image</button>
</form>
<p>Images save permanently in uploads folder.</p>
</body></html>