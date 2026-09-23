<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>

Member Panel

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
    color:white;
    text-decoration:none;
    padding:12px 20px;
}

.sidebar a:hover{
    background:#343a40;
}

.content{
    flex:1;
    padding:20px;
}

</style>

</head>

<body>

<div class="d-flex">

<div class="sidebar">

<h4 class="text-white p-3">

Member Panel

</h4>

<a href="index.php?page=member-dashboard">
Dashboard
</a>

<a href="index.php?page=catalog">
Danh mục giáo trình
</a>

<a href="index.php?page=my-library">
Thư viện của tôi
</a>

<a href="index.php?page=logout">
Đăng xuất
</a>

</div>

<div class="content">

<?php require $view; ?>

</div>

</div>

</body>

</html>