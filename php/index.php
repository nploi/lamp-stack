<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tính tổng 2 số</h2>
  <form action="sum.php">
    <div class="form-group">
      <label for="number">Số thứ nhất:</label>
      <input type="number" class="form-control" id="number01" placeholder="Nhập số thứ nhất" name="a">
    </div>
    <div class="form-group">
      <label for="pwd">Số thứ hai:</label>
      <input type="number" class="form-control" id="number02" placeholder="Nhập số thứ hai" name="b">
    </div>
    <button type="submit" class="btn btn-default">Tính</button>
  </form>
</div>

</body>
</html>
