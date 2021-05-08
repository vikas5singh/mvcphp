<?php
include './model/Model.php';
include './controller/controller.php';
$model = new Model ();
$controller = new Controller ($model);
echo $controller -> output ();
$books= $controller -> invoke ();
if ($_SERVER['REQUEST_METHOD'] === "GET")
{
if (isset ($_GET['book']))
{
echo "You selected " . $books -> name . " version: " . $books -> version . "
Year of published: " . $books -> yearOfPublish ;
exit;
}
}
?>
 
<form method="GET" action="" >
<select name="book" >
<?php
foreach ($books as $x => $x_value)
{
echo '<option value="'.$x.'">'.$x.'</option>';
}
?>
</select>
<input type="submit" value="Select">
</form>