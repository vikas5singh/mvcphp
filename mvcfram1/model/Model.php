<?php
class Model {
public $text;
public function __construct ()
{
$this -> text = 'Book Selection';
}
public function getBookList ()
{
return array (
'PHP for Absolute Beginners' => new Book ('PHP for Absolute Beginners', '1.2', '1999'),
'Basic Introduction to PHP MVC' => new Book ('Basic Introduction to PHP MVC',
'1.0', '2008'),
'Advanced PHP' => new Book ('Advanced PHP', '1.2', '2004'),
'Advanced PHP MVC' => new Book ('Advanced PHP MVC', '2.0', '2014')
);
}
public function getBook ($name)
{
$allBooks = $this -> getBookList ();
return $allBooks [$name];
}
}
?>