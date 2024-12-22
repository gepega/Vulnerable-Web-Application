<?php
function fetchBookDetails($conn, $number) {
    $stmt = $conn->prepare("SELECT bookname,authorname FROM books WHERE number = ?");
    $stmt->bind_param("i", $number);
    $stmt->execute();
    return $stmt->get_result();
}
?>
