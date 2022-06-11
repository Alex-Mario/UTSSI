<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Tambah Berita</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('assets/css/css.css');?>">

</head>
<body>

	<!-- konten -->
    <div class="section">
        <div class="container">
            <h3>Tambah Berita</h3>
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data">
                    <select name="kategori" class="input-control" required>
                        <option value="">--Pilih Penulis--</option>

                    </select>
                    <input type="text" name="judul" class="input-control" placeholder="Judul Berita" required>
                    <input type="date" name="tgl" class="input-control" placeholder="Tanggal" required>
                    <input type="file" name="gambar" class="input-control" required>
                    <br>
                    <h6>Sinopsis</h6>
                    <textarea name="sinopsis" class="input-control" placeholder="Sinopsis"></textarea>
                    <br>
                    <h6>Isi Berita</h6>
                    <textarea name="isi" class="input-control" placeholder="Isi"></textarea>
                    <br>
                    <button type="button" class="btn btn-success">Create</button>

                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('sinopsis');
        CKEDITOR.replace('isi');
    </script>

</body>
</html>