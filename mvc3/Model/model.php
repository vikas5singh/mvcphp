<?php
include_once "Model/book.php";
class Model{
    public function getBookList(){
        return array(
            "php"=>new Book("php","vikas kumar", "book is very good"),
            "java"=>new Book("java", "kumar singh", "java is best book"),
            "mysql"=>new Book("mysql", "singh vikas", "book is very good"),
            "jquery"=>new Book("jquery", "vikas singh", "jquery is best")
        );
    }
    public function getBook($title){
       $allBooks = $this->getBookList();
       return $allBooks[$title]; 
    }
}
?>