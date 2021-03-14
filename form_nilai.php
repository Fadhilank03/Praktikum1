<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
.container{
  width:100%;
  margin-top : 40px;  
}
</style>
<body> 
<h3 align=center>Form Nilai Siswa</h3>
<form form action="array_siswa.php" method="get" style="margin:20px;">
<form>
	<div class="form-nilai">
		<label for="nama">Nama</label>
		<input type="text" id="nama" class="form-control" placeholder="Nama">
	</div>
 
	<div class="form-nilai">
		<label for="umur">Umur</label>
		<input type="number" id="nim" class="form-control" placeholder="NIM">
	</div>
 
	<div class="form-nilai">
		<label for="matkul">Mata Kuliah</label>
		<select id="matkul" class="form-control">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemrograman Web</option>
		</select>
	</div>
 
	<div class="col-md-2">Nilai UTS
        <input type="number" class="form-control" placeholder="" name="nilai_uts">
    </div>
    <div class="col-md-2">Nilai UAS
        <input type="number" class="form-control" placeholder="" name="nilai_uas">
    </div>
    <div class="col-md-2">Nilai Tugas
        <input type="number" class="form-control" placeholder="" name="nilai_tugas">
    </div> 
 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
