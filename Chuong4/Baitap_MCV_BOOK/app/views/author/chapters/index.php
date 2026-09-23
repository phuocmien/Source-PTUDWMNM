<h2>

<?= $book['title'] ?>

</h2>

<hr>

<a
class="btn btn-success mb-3"
href="
index.php?page=chapter-create&book_id=
<?= $book['id'] ?>
">

Thêm chương

</a>

<table
class="table table-bordered">

<tr>

<th>STT</th>

<th>Tên chương</th>

<th>PDF</th>

<th>Trạng thái</th>

</tr>

<?php
while(
$row =
$chapters->fetch_assoc()
){
?>

<tr>

<td>
<?= $row['chapter_no'] ?>
</td>

<td>
<?= $row['title'] ?>
</td>

<td>

<?= $row['pdf_file'] ?>

</td>

<td>

<?= $row['status'] ?>

</td>

</tr>

<?php
}
?>

</table>