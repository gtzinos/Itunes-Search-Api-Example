<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <form action="./" class="form-horizontal" method="get">
    <div class="form-group">
      <label class="control-label col-sm-2" for="term">Value:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="term" placeholder="Enter Value">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Search</button>
      </div>
    </div>
  </form>
</div>
<div id="results">
<?php
if(isset($_GET["term"]))
{
     echo json_encode(file_get_contents("https://itunes.apple.com/search?limit=200&entity=software&term=".$_GET['term']));	

}

?>

</div>
</body>
</html>

