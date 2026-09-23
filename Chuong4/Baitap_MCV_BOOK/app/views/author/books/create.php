<h2>

Thêm giáo trình

</h2>

<hr>

<form
method="post"
action="index.php?page=book-store"
enctype="multipart/form-data">

<div class="mb-3">

<label>

Tên giáo trình

</label>

<input
type="text"
name="title"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Mô tả

</label>

<textarea
name="description"
class="form-control"
rows="5"></textarea>

</div>

<div class="mb-3">

<label>

Giá (VNĐ)

</label>

<input
type="number"
name="price"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Thời hạn truy cập (tháng)

</label>

<input
type="number"
name="duration_months"
value="3"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Ảnh bìa

</label>

<input
type="file"
name="cover"
class="form-control"
accept="image/*">

</div>

<button
type="submit"
class="btn btn-success">

Lưu giáo trình

</button>

<a
href="index.php?page=author-books"
class="btn btn-secondary">

Quay lại

</a>

</form>