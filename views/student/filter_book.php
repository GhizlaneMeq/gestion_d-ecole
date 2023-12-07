<?php
// Include necessary files and start the session if needed

// Fetch the selected category from the query parameters
$category = $_GET['category'];

// Perform the filtering based on the category
// Modify this part according to your database structure and query logic

// Assume $filteredResult contains the filtered book data
// Use prepared statements to prevent SQL injection

// Output the HTML for the updated book display
while ($rows = mysqli_fetch_assoc($filteredResult)) {
    echo '<div class="card02 col-sm-12 col-md-6 col-lg-3">';
    echo '<a href="./reservation.php?id=' . $rows['book_id'] . '"><img src="' . $rows['image'] . '" class="card-img-top" alt="book_image" width="100%" /></a>';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $rows['book_name'] . '</h5>';
    echo '<p class="card-star">' . $rows['auteur'] . '</p>';
    echo '</div>';
    echo '</div>';
}
?>
