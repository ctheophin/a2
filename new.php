<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Tell Us Watcha Watchin'? </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <header class="jumbotron">
  <div class="text-center display-4">Tell Us What Are You Watching!</div>
	<p class="text-center lead"><a href="watching.php">See What Everyone Else Is Watching!</a></p>
  <hr class="my-4">
</header>
<div id="container">

<div id="views">

<form id="watchform" method="post">
  <div class="form-group row">
      <label class="col-form-label text md-right col-md-2"  for="name">Nickname</label>
      <input type="text" class="form-control col-md-6" id="name" name="name" maxlength="30" placeholder="Nickname" required>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
    <label class="col-form-label text md-right col-md-2" for="watching">What are you watching?</label>
    <select class="form-control col-md-6" id="watching" name="watching" required>
      <option></option>
      <option>Movie</option>
      <option>TV Show</option>
    </select>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
  <label class="col-form-label text md-right col-md-2" for="title">Title:</label>
  <input type="text" class="form-control col-md-6" id="title" name="title" maxlength="260" placeholder="Title of Movie or TV Show" required>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
  <label class="col-form-label text md-right col-md-2" for="genre">Genre:</label>
  <select class="form-control col-md-6" id="genre" name="genre"required>
    <option></option>
    <option>Action/Adventure</option>
    <option>Animated</option>
    <option>Comedy</option>
    <option>Documentary</option>
    <option>Drama</option>
    <option>Horror</option>
    <option>Romantic</option>
    <option>Other</option>
  </select>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
  <label class="col-form-label text md-right col-md-2" for="platform">Platform:</label>
  <select class="form-control col-md-6" id="platform" name="platform" required>
    <option></option>
    <option>Theater</option>
    <option>Netflix</option>
    <option>Hulu</option>
    <option>Amazon Prime</option>
    <option>Other</option>
  </select>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
  <label class="col-form-label text md-right col-md-2" for="who">Who are you watching it with?</label>
  <select class="form-control col-md-6" id="who" name="who" required>
    <option></option>
    <option>By Myself</option>
    <option>Significant Other</option>
    <option>Parent(s)</option>
    <option>Friend(s)</option>
    <option>Other</option>
  </select>
  </div><!-- Form Group Ends -->

  <div class="form-group row">
    <label class="col-form-label text md-right col-md-2" for="experience">How was your experience?</label>
    <select class="form-control col-md-6" id="experience" name="experience" required>
      <option></option>
      <option>Amazing</option>
      <option>Great</option>
      <option>Solid</option>
      <option>OK</option>
      <option>Awkward</option>
      <option>Terrible</option>
      <option>Other</option>
    </select>
  </div><!-- Form Group Ends -->
  <div class="form-group row">
      <label class="col-form-label text md-right col-md-2" for="comments">Comments?</label>
      <textarea class="form-control col-md-6" id="comments" name="comments" maxlength="500" rows="3"></textarea>
    </div><!-- Form Group Ends -->
    <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
</form><!-- close the form -->

</div> <!-- close views -->

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="new.php">Watching Something Else?</a></p>
</div>

</div> <!-- close container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/watch.js"></script>
</body>
</html>
