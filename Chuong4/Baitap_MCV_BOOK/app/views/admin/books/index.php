<h2>

Quản lý giáo trình

</h2>

<hr>

<table
class="table table-bordered">

<tr>

<th>ID</th>

<th>Ảnh bìa</th>

<th>Tên giáo trình</th>

<th>Tác giả</th>

<th>Giá</th>

<th>Hoa hồng</th>

<th>Trạng thái</th>

<th>Thao tác</th>

</tr>

<?php
while(
$row =
$books->fetch_assoc()
){
?>

<tr>

<td>
<?= $row['id'] ?>
</td>

<td>

<?php
if(
$row['cover_image']
){
?>

<img
src="/phuocmien-ebook/storage/covers/<?= $row['cover_image'] ?>"
width="60">

<?php
}
?>

</td>

<td>
<?= $row['title'] ?>
</td>

<td>
<?= $row['fullname'] ?>
</td>

<td>

<?= number_format(
$row['price']
) ?>

đ

</td>

<td>

<?= $row['commission_percent'] ?>%

</td>

<td>

<?= $row['status'] ?>

</td>

<td>

<?php
if(
$row['status']
==
'pending'
){
?>

<a
class="btn btn-success btn-sm"
href="
index.php?page=book-approve&id=
<?= $row['id'] ?>
">

Duyệt

</a>

<a
class="btn btn-danger btn-sm"
href="
index.php?page=book-reject&id=
<?= $row['id'] ?>
">

Từ chối

</a>

<?php
}
?>

</td>

</tr>

<?php
}
?>

</table>