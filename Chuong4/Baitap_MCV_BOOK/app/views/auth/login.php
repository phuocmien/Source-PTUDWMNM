<!DOCTYPE html>
<html>

<head>

<title>

Phuoc Mien Ebook System

</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container">

<div class="row
justify-content-center
mt-5">

<div class="col-md-4">

<div class="card">

<div class="card-header">

<h4>

Đăng nhập

</h4>

</div>

<div class="card-body">
<?php
if(
isset($error)
){
?>

<div
class="alert alert-danger">

<?= $error ?>

</div>

<?php
}
?>
<form method="post">

<input
name="email"
class="form-control mb-3"
placeholder="Email">

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Mật khẩu">

<button
class="btn btn-primary w-100">

Đăng nhập

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>