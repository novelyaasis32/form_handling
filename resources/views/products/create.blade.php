<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<div class = "container">
<h1>Tambahkan Produk</h1>
<form method="post" action="/products" enctype="mulipart/form-data">
    {{ csrf_field() }}
    <div class="form-floating mb-3">
  <input name="namaproduk" type="text" class="form-control" id="namaproduk" placeholder="Contoh: Baju Tidur">
  <label for="namaproduk">Nama Produk</label>
</div>
<div class="form-floating">
  <input name="deskripsiproduk" type="text" class="form-control" id="deskripsiproduk" placeholder="penjelasan">
  <label for="deskripsiproduk">Deskripsi</label>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Gambar Produk</label>
  <input name="formFile" class="form-control" type="file" id="formFile">
</div>
<div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
</body>
</html>
