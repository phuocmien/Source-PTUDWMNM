<h2>

Thêm chương

</h2>

<hr>

<form
method="post"
action="index.php?page=chapter-store"
enctype="multipart/form-data">

<input
type="hidden"
name="book_id"
value="<?= $book['id'] ?>">

<div class="mb-3">

<label>

Số chương

</label>

<input
type="number"
name="chapter_no"
class="form-control"
required>

</div>

<div class="mb-3">

<label>

Tên chương

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
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>

PDF

</label>

<input
type="file"
name="pdf_file"
class="form-control"
accept=".pdf"
required>

</div>

<button
class="btn btn-primary">

Lưu

</button>

</form>