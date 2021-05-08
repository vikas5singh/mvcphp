<?php
class Controller {
private $model;
public function __construct (Model $model)
{
$this -> model = $model;
}
public function invoke ()
{
if (!isset ($_GET['book']))
{
return $this -> model -> getBookList ();
}
else
{
return $this -> model -> getBook ($_GET['book']);
}
}
public function output ()
{
return'<h1>' . $this -> model -> text . '</h1>';
}
}
?>