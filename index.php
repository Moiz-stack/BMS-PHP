<?php
require_once 'Library.php';

$library = new Library();

while (true) {
    echo "\n--- Library Menu ---\n";
    echo "1. Add Book\n";
    echo "2. Show All Books\n";
    echo "3. Issue a Book\n";
    echo "4. Return a Book\n";
    echo "5. Show Issued Books\n";
    echo "6. Exit\n";
    echo "Choose an option: ";
    $choice = trim(fgets(STDIN));

    if ($choice == 1) {
        echo "Enter Book Title: ";
        $title = trim(fgets(STDIN));
        echo "Enter Book Author: ";
        $author = trim(fgets(STDIN));
        echo "Enter Book ISBN: ";
        $isbn = trim(fgets(STDIN));
        $book = new Book($title, $author, $isbn);
        $library->addBook($book);

    } elseif ($choice == 2) {
        $library->showAllBooks();

    } elseif ($choice == 3) {
        echo "Enter ISBN to issue: ";
        $isbn = trim(fgets(STDIN));
        $library->issueBook($isbn);

    } elseif ($choice == 4) {
        echo "Enter ISBN to return: ";
        $isbn = trim(fgets(STDIN));
        $library->returnBook($isbn);

    } elseif ($choice == 5) {
        $library->showIssuedBooks();

    } elseif ($choice == 6) {
        echo "Exiting... Goodbye!\n";
        exit;

    } else {
        echo "Invalid option. Please try again.\n";
    }
}
