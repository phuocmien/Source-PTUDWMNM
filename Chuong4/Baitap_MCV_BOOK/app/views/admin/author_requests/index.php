<h2>

Duyệt tác giả

</h2>

<hr>

<table
class="table table-bordered">

<tr>

<th>ID</th>

<th>Họ tên</th>

<th>Email</th>

<th>Trạng thái</th>

<th>Thao tác</th>

</tr>

<?php
while(
$row =
$requests->fetch_assoc()
){
?>

<tr>

<td>
<?= $row['id'] ?>
</td>

<td>
<?= $row['fullname'] ?>
</td>

<td>
<?= $row['email'] ?>
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
index.php?page=author-approve&id=
<?= $row['id'] ?>
">

Duyệt

</a>

<a
class="btn btn-danger btn-sm"
href="
index.php?page=author-reject&id=
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