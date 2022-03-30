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
<!-- Akhir Card Form -->

<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>