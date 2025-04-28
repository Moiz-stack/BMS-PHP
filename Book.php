<?php

class Book
{
    private $title;
    private $author;
    private $isIssued;
    private $isbn;

    public function __construct($title, $author, $isbn)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->isIssued = false;
    }


    public function issueBook()
    {
        if ($this->isIssued) {
            echo "This book is already issued.\n";
        } else {
            $this->isIssued = true;
            echo "Book issued successfully.\n";
        }
    }

    public function returnBook()
    {
        if ($this->isIssued) {
            $this->isIssued = false;
            echo "Book returned successfully.\n";
        } else {
            echo "This book is not issued.\n";
        }
    }

    public function isIssued()
    {
        return $this->isIssued;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function displayBookInfo()
    {
        echo "Title: {$this->title}\nAuthor: {$this->author}\nISBN: {$this->isbn}\n";
        echo $this->isIssued ? "Status: Issued\n" : "Status: Available\n";
        echo "---------------------------\n";
    }
}
