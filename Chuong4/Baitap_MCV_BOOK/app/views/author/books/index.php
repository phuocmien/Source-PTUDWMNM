<h2>

Giáo trình của tôi

</h2>

<hr>

<a
class="btn btn-success mb-3"
href="index.php?page=book-create">

Thêm giáo trình

</a>

<table
class="table table-bordered">

<tr>

<th>ID</th>

<th>Tên giáo trình</th>

<th>Giá</th>

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

<?= $row['title'] ?>

</td>

<td>

<?= number_format(
$row['price']
) ?>

đ

</td>

<td>

<?= $row['status'] ?>

</td>

<td>

<a
class="btn btn-info btn-sm"
href="
index.php?page=author-chapters&book_id=
<?= $row['id'] ?>
">

Quản lý chương

</a>

</td>

</tr>

<?php
}
?>

</table>