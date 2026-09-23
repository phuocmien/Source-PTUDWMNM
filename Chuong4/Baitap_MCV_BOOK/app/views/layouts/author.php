<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>

Author Dashboard

</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    margin:0;
}

.sidebar{
    width:260px;
    min-height:100vh;
    background:#212529;
}

.sidebar a{
    display:block;
    padding:12px 20px;
    color:white;
    text-decoration:none;
}

.sidebar a:hover{
    background:#343a40;
}

</style>

</head>

<body>

<div class="d-flex">

<div class="sidebar">

<h4 class="text-white p-3">

Author Panel

</h4>

<a href="index.php?page=author-dashboard">
Dashboard
</a>

<a href="index.php?page=author-books">
Giáo trình của tôi
</a>

<a href="index.php?page=logout">
Đăng xuất
</a>

</div>

<div class="flex-grow-1 p-4">

<?php require $view; ?>

</div>

</div>

</body>

</html>