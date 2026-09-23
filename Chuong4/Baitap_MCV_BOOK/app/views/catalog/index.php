<pre>
<?php

echo "SO DONG: ";

echo $books->num_rows;

?>
</pre>
<h2>

Danh mục giáo trình

</h2>

<hr>

<div class="row">

<?php
while(
$row =
$books->fetch_assoc()
){
?>

<div
class="col-md-3">

<div
class="card mb-4">

<?php
if(
$row['cover_image']
){
?>

<img
src="<?= BASE_URL ?>/storage/covers/<?= $row['cover_image'] ?>"
class="card-img-top"
style="height:250px;object-fit:contain;">

<?php
}
?>

<div
class="card-body">

<h5>

<?= $row['title'] ?>

</h5>

<p>

Tác giả:

<?= $row['fullname'] ?>

</p>

<p>

20.000 VNĐ / 3 tháng

</p>

<a
class="btn btn-primary"
href="
index.php?page=book-detail&id=
<?= $row['id'] ?>
">

Xem chi tiết

</a>

</div>

</div>

</div>

<?php
}
?>

</div>