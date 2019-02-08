<?php
	include 'database.php';
	$query = "SELECT * FROM views ORDER BY id";
	$views = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Whatcha Watchin'</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<header class="jumbotron">
  <div class="text-center display-4">Watcha Watchin'!</div>
	<p class="text-center lead"><a href="index.php">Tell us what you're watching!</a></p>
  <hr class="my-4">
  <p class="text-center">See what other people are watching!</p>
</header>
<div id="container">

<!-- this form is handled by the PHP file named in the action attribute -->
<form class="smallform" method="post">
<table class="table table-sm table-hover table-bordered table-responsive">
	<!-- table column headings -->
	<tr class="table-primary">
	  <th>Name</th>
	  <th>Movie/TV</th>
	  <th>Title</th>
	  <th>Genre</th>
	  <th>Platform</th>
	  <th>Audience</th>
    <th>Experience</th>
	  <th>Comments</th>
		<th>Date</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->

<tr>
	<?php while ($row = mysqli_fetch_assoc($views)) :  ?>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['watching']; ?></td>
  <td><?php echo $row['title']; ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['platform']; ?></td>
  <td><?php echo $row['who']; ?></td>
  <td><?php echo $row['experience']; ?></td>
  <td><?php echo $row['comments']; ?></td>
	<td><?php echo $row['date']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
</form>
<!-- close the form -->

<p class="text-center"><a href="index.php">Are you watching anything else?</a></p>

</div> <!-- close container -->
</body>
</html>
