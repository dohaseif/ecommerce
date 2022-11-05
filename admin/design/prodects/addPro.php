
<!DOCTYPE html>
<html>
<head>
	<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


<body>
	<form enctype="multipart/form-data">
		<label>name</label>
		<input type="text" name="name" placeholder="name" class="form-control"><br>
		
		<?php
		

		if(isset($_SESSION)){
			if (isset($_SESSION['errors']['name'])) {
				?>
				 <p><?=$_SESSION['errors']['name'];?></p>
				 <?php

			}

		}
		 ?>

		<label>price</label>
		<input type="text" name="price" placeholder="price" class="form-control"><br>
		<?php
		if(isset($_SESSION)){
			if (isset($_SESSION['errors']['price'])) {
				?>
				 <p><?=$_SESSION['errors']['price'];?></p>
				 <?php

			}

		}

		 ?>

		<label>img</label>
		<input type="file" name="img[]" placeholder="img" class="form-control" multiple ><br>

		<label>description</label><br>
		<textarea name="description" value=""></textarea><br><br>
		<?php
		if(isset($_SESSION)){
			if (isset($_SESSION['errors']['description'])) {
				?>
				 <p><?=$_SESSION['errors']['description'];?></p>
				 <?php
			}
		}
		 ?>

		<label>sale</label>
		<input type="text" name="sale" placeholder="sale" class="form-control"><br>

	<?php

		if(isset($_SESSION)){
			if (isset($_SESSION['errors']['sale'])) {
				?>
				 <p><?= $_SESSION['errors']['sale'];?></p>
				 <?php

			}

		}
		 ?>

		<label>cat</label>

		<select class="form-control" name="cat">
			<?php
			require_once 'functions/connect.php';
			$query=$conn->query("SELECT * FROM cat ");
			foreach($query as $category){
				?>

                 <option value="<?=$category['id']?>"><?=$category['name']?></option>
				<?php
			}
			?>
			
		</select><br>
	<?php
		if(isset($_SESSION)){
			if (isset($_SESSION['errors']['cat'])) {
				?>
				 <p><?=$_SESSION['errors']['cat'];?></p>
				 <?php
			}
		}
?>
		
		<input type="submit" value="add" class="btn btn-primary .add_prodect">
	</form>
	<div class="add"></div>
</body>
</html>

<?php ob_end_flush(); ?>