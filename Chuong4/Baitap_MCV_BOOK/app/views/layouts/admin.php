<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>

Phuoc Mien Ebook System

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

<h4
class="text-white p-3">

PM Ebook

</h4>

<a href="index.php?page=admin-dashboard">
Dashboard
</a>

<a href="index.php?page=author-requests">
Duyệt tác giả
</a>

<a href="index.php?page=admin-books">
Giáo trình
</a>

<a href="index.php?page=admin-chapters">
Chương PDF
</a>

<a href="index.php?page=users">
Người dùng
</a>

<a href="index.php?page=payments">
Thanh toán
</a>

<a href="index.php?page=revenue">
Doanh thu
</a>

<a href="index.php?page=devices">
Thiết bị
</a>

<a href="index.php?page=settings">
Cấu hình
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