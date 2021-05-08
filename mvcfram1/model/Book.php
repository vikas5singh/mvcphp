<?php
class Book {
    public $name;
    public $version;
    public $yearOfPublish;
    public function __construct ( $name, $version, $yearOfPublish )
    {
    $this -> name = $name;
    $this -> version = $version;
    $this -> yearOfPublish = $yearOfPublish;
    }
    }
?>