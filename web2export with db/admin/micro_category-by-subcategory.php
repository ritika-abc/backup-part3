<?php
require_once "connection.php";
$sub_cat_id = $_POST["sub_cat_id"];
$result = mysqli_query($conn,"SELECT `mco_id`, `cat_id`, `sub_cat_id`, `mco_category`, `filename` FROM `mco_category` where sub_cat_id = $sub_cat_id");
?>
<option value="">Select Micro Category</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["mco_id"];?>"><?php echo $row["mco_category"];?></option>
<?php
}
?>