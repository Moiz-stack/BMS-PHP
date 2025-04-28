<?php
require 'Book.php';

class Library
{
    private $books = [];

    function addBook(Book $book)
    {
        $this->books[] = $book;
        echo "Book added successfully";
    }

    function showAllBooks()
    {
        if (empty($this->books)) {
            echo "No books available.\n";
            return;
        }
       
        foreach ($this->books as $book) {
            $book->displayBookInfo();
        }
    }

    public function issueBook($isbn)
    {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn) {
                $book->issueBook();
                return;
            }
        }
        echo "Book with ISBN $isbn not found.\n";
    }

    public function returnBook($isbn)
    {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn) {
                $book->returnBook();
                return;
            }
        }
        echo "Book with ISBN $isbn not found.\n";
    }
    public function showIssuedBooks()
    {
        $found = false;
        foreach ($this->books as $book) {
            if ($book->isIssued()) {
                $book->displayBookInfo();
                $found = true;
            }
        }

        if (!$found) {
            echo "No books are currently issued.\n";
        }
    }
}
