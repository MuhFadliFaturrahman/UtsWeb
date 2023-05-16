<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nama Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-2">Nama Sekolah</h2>
    <div class="container mt-3">
    <form>
  <div class="mb-3">
    <label for="nama_sekolah" class="form-label">Nama sekolah</label>
    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $NamaSekolah->nama_sekolah }}" disabled>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">alamat sekolah</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $NamaSekolah->alamat }}" disabled>
  </div>
  <a href="/" class="btn btn-primary">Kembali</a>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
