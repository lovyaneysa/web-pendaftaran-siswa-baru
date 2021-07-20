<?php include 'head.php'; ?>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>


<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
    <div class="alur">
    <h2>BIAYA PENDAFTARAN </h2>
  </div>
    <br>



    <div class="container">
    <div class="col-md-5 box">
    <table class="table table-striped table-bordered ">
          <tr> 
            <td>Kelompok </td>
            <td>Gelombang 1</td>
            <td>Gelombang 2</td>
            <td>Gelombang 3</td>
          </tr>
          <tr>
            <td>Playgroup</td>
            <td>RP 600.000</td>
            <td>RP 850.000</td>
            <td>RP 1.350.000</td>
          </tr> 
          <tr>
            <td>A dan B</td>
           <td>RP 1.50.000</td>
           <td>RP 1.750.000</td>
           <td>RP 2.300.000</td>
          </tr> 
          </table>
        </div>
      </div>

      <div class="container">
         <div class="alur">
          <h2>Lihat Hasil Seleksi </h2>
        
      </div>
      <button onclick="JavaScript:window.location.href='HASIL SELEKSI.pdf';"> Download PDF</button><br>
      
      </div>

      <div class="container">
      <center><h2>Alur Pendaftaran</h2></center>
      <h4>Dalam rangka memudahkan orang tua untuk mendaftarkan anaknya keTK Islam Budaya 1 dan meminimalisir berkumpulnya orang di sekolah mengingat masa pandemi masih berlangsung, kami dari pihak sekolah memberikan fasilitas pendaftaran online dengan alur sebagai berikut :</h4>
    </div>

  <div class="container">
<div id="accordion">
  <h3>Register</h3>
  <div>
    <p>
    Lakukan pendaftaran akun dengan memasukan email dan password 
    </p>
  </div>
  <h3>Login</h3>
  <div>
    <p>
    Jika sudah memiliki akun, Anda dapat login dengan memasukan email dan password yang telah dibuat
    </p>
  </div>
  <h3>Isi data siswa</h3>
  <div>
    <p>
    Jika login berhasil isilah sebenar benarnya data siswa yang tertera dalam formulir pendaftaran
    </p>
  </div>
  <h3>Isi data Orang tua</h3>
  <div>
    <p>
    Isilah sebenar benarnya data orang tua yang tertera pada formulir pendaftaran
    </p>
  </div>
  <h3>Upload Dokumen</h3>
  <div>
    <p>Upload beberapa dokumen yang diperlukan sebagai bahan perlengkapan data
    </p>
  </div>
  <h3>Pembayaran</h3>
  <div>
    <p>Lakukan Pembayaran sesuai nominal yang tertera
    </p>
  </div>
</div>
 </div>
 <style>
  table{
      background-color: #A5DB89;
    }

    .jumbotron{
      background-color: #e4e4e4;
    }

    .navbar-default{
      margin-bottom: 0;
    }

      .alur h2{
      font-weight: bold;
      text-align: center;
      font-family:Cursive;
    }

    .container{
      font-weight: bold;
      font-family:Cursive;
    }

    .box{
      left:30%;
    }

   button{
       margin-left:45%;
       width:150px;
       height:60px;
       background-color: #A5DB89;
    }
</style>

<?php include 'foot.php'; ?>