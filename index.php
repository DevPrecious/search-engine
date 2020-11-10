<?php include 'result.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>My search engine</title>
</head>
<body>
	<div class="container">
	<form action="result.php" method="post">
  <div class="form-group">
    <label for="email">Search Now!</label>
    <input type="text" class="form-control" placeholder="Type now" name="data">
  </div>
  <button type="submit" name="check" class="btn btn-primary">Search</button>
</form>
	</div>
</body>
</html>