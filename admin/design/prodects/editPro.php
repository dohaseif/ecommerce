

<?php
require_once "functions/connect.php";
$id =$_GET['id'];
$select_pro ="SELECT * FROM prodects WHERE id =$id";
$query=$conn->query($select_pro);
$pro=$query->fetch_assoc();

$pro_id=$pro['id'];

$select_images="SELECT * FROM images WHERE pro_id = '$pro_id' ";
$query2=$conn->query($select_images);
$image=$query2->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


<body>
	<form method="post" action="functions/prodects/proEdit.php">
		<label>name</label>
		<input type="text" name="name" placeholder="name" class="form-control" value="<?= $pro['name']?>"><br>

		<label>price</label>
		<input type="text" name="price" placeholder="price" class="form-control" value="<?= $pro['price']?>"><br>

		<label>img</label>
		<input type="file" name="img" placeholder="img"  class="form-control" value="<?= $image['image']?>"><br>
		<label>description</label><br>
		<textarea name="description" value="asdsfdsfsdfdsf"></textarea><br><br>
		<label>sale</label>
		<input type="text" name="sale" placeholder="sale" class="form-control"><br>


		<label>cat</label>

		<select class="form-control" name="cat">
			<?php
			require_once 'functions/connect.php';
			$query=$conn->query("SELECT * FROM cat ");
			foreach($query as $category){
				?>

                 <option value="<?= $pro['cat_id']?>"><?=$category['name']?></option>
				<?php
			}
			?>
			
		</select><br>
		<input type="hidden" name="id" value="<?= $pro['id']?>">

		<input type="submit" value="edit" class="btn btn-primary">



	</form>

</body>
</html>


