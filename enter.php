<?php include 'database.php'; ?>

<?php
if (isset($_POST['name']) && isset($_POST['title'])) {

    $name = sanitizeMySQL($conn, $_POST['name']);
    $watching = sanitizeMySQL($conn, $_POST['watching']);
    $title = sanitizeMySQL($conn, $_POST['title']);
    $genre = sanitizeMySQL($conn, $_POST['genre']);
    $platform = sanitizeMySQL($conn, $_POST['platform']);
    $who = sanitizeMySQL($conn, $_POST['who']);
    $experience = sanitizeMySQL($conn, $_POST['experience']);
    $comments = sanitizeMySQL($conn, $_POST['comments']);

    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    $query = "INSERT INTO views (name, watching, title, genre, platform, who, experience, comments, date)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ( $stmt = mysqli_prepare($conn, $query) ) {

        mysqli_stmt_bind_param($stmt, 'sssssssss',
        $name,
        $watching,
        $title,
        $genre,
        $platform,
        $who,
        $experience,
        $comments,
        $date
        );
        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement
// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}
?>
