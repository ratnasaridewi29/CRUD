<!DOCTYPE html>
<html>
<head>
    <title>CRUD 2020 PHP & MySQL + Bootstrap 4</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container"></div>
<h1 class="text-center">COBA CRUD</h1>
<h2 class="text-center">yo bisa yo</h2>

<!-- Awal Card Form -->
<div class="card">
  <div class="card-header bg-primary text-putih">
    Booking Hotel 
  </div>
  <div class="card-body">
    <form method="form-group">
      <label>Nama</label>
      <input type="text" name="tnama" class="form-control" placeholder="Input Nama anda disini!" required>
  </div>
  <div class="card-body">
    <form method="form-group">
      <label>KodeBooking</label>
      <input type="text" name="tKodeBooking" class="form-control" placeholder="Input KodeBooking anda disini!" required>
</div>
  <div class="card-body">
    <form method="form-group">
      <label>Tipe Kamar</label>
      <select class="form-control" name=tTipeKamar">
        <option></option>
        <option value="standard room" >standard room</option>
        <option value="superior room" >superior room</option>
        <option value="deluxe room" >deluxe room</option>
      </select>
   </div>

    <button type="submit" class="btn btn-succes" name="bsimpan">Simpan</button>
    <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

    </form>
  </div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card">
  <div class="card-header bg-primary text-putih">
    Daftar Tamu Hotel 
  </div>
  <div class="card-body">

  <table class="table table-bordered table-striped">
      <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>KodeBooking</th>
          <th>TipeKamar</th>
      </tr>
      <tr>
          <td>1</th>
          <td>Jarjit Sigh</th>
          <td>56321</th>
          <td>deluxe room</th>
    
  </div>
</div>
<!-- Akhir Card Tabel -->
<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>