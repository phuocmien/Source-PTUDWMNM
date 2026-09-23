<div class="container mt-4">

<div class="row">

<div class="col-md-4">

<?php if(!empty($item['cover_image'])){ ?>

<img
src="<?= BASE_URL ?>/storage/covers/<?= $item['cover_image'] ?>"
class="img-fluid border rounded shadow">

<?php } ?>

</div>

<div class="col-md-8">

<h1>

<?= $item['title'] ?>

</h1>

<hr>

<p>

<strong>Tác giả:</strong>

<?= $item['fullname'] ?>

</p>

<p>

<strong>Giá:</strong>

<span class="text-danger fw-bold">

<?= number_format($item['price']) ?> đ

</span>

</p>

<p>

<strong>Thời hạn truy cập:</strong>

<?= $item['duration_months'] ?> tháng

</p>

<p>

<strong>Hoa hồng tác giả:</strong>

<?= $item['commission_percent'] ?>%

</p>

<?php if($hasAccess){ ?>

<div class="alert alert-success">

Bạn đã sở hữu giáo trình này

</div>

<?php }else{ ?>

<a
href="
index.php?page=buy-book&id=
<?= $item['id'] ?>
"
class="btn btn-success btn-lg">

Mua quyền truy cập

</a>

<?php } ?>

</div>

</div>

<hr class="my-4">

<h3>

Mô tả giáo trình

</h3>

<div class="card">

<div class="card-body">

<?= nl2br($item['description']) ?>

</div>

</div>

<hr class="my-4">

<h3>

Mục lục giáo trình

</h3>

<table class="table table-bordered">

<tr>

<th width="80">

STT

</th>

<th>

Tên chương

</th>

</tr>

<?php

if(isset($chapters))
{
while($row = $chapters->fetch_assoc())
{
?>

<tr>

<td>

<?= $row['chapter_no'] ?>

</td>

<td>

<?= $row['title'] ?>

</td>

</tr>

<?php
}
}
?>

</table>

</div>