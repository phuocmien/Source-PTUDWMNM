<h2>

Quản lý Chương PDF

</h2>

<hr>

<table
class="table table-bordered">

<tr>

<th>ID</th>

<th>Giáo trình</th>

<th>Chương</th>

<th>PDF</th>

<th>Trạng thái</th>

<th>Thao tác</th>

</tr>

<?php
while(
$row =
$chapters->fetch_assoc()
){
?>

<tr>

<td>

<?= $row['id'] ?>

</td>

<td>

<?= $row['book_title'] ?>

</td>

<td>

<?= $row['chapter_no'] ?>
-
<?= $row['title'] ?>

</td>

<td>

<?= $row['pdf_file'] ?>

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
index.php?page=chapter-approve&id=
<?= $row['id'] ?>
">

Duyệt

</a>

<a
class="btn btn-danger btn-sm"
href="
index.php?page=chapter-reject&id=
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