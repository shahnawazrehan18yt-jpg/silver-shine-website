<?php $files=glob('uploads/*'); ?>
<!DOCTYPE html><html><body><h2>Gallery</h2>
<?php foreach($files as $f){ echo "<img src='$f' style='width:220px;margin:10px'>"; } ?>
</body></html>