<?php
require_once "connection.php";
$cat_id = $_POST["cat_id"];
$result = mysqli_query($conn,"SELECT `sub_cat_id`, `cat_id`, `sub_category`, `filename` FROM `sub_category` where cat_id = $cat_id");
?>
<option value="">Select Category</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["sub_cat_id"];?>"><?php echo $row["sub_category"];?></option>
<?php
}
?>