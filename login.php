<?php 

include 'head.php';

  ?>
  <div class="container-fluid">
    <div class="col-md-4 box">
            <div class="jumbotron login">
                <div class="header">
                    <h3 style="color:white"><center>Masuk Calon Murid</center></h3>
                </div>
                <hr style="border:1px solid black">
                <form action="ceklogin.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="masuk" class="btn btn-block btn-success" value="Masuk">
                    </div>
                       <a href="register.php" class="btn btn-block btn-success">Daftar</a>
                </form>
            </div>
            </div>

        </div>
      </div>
  </div>
    
      <style>
        .box{
          left: 50%;
          margin-left: -220px;
        }
        .block-web.primary-box {
            padding: 5px;
            color: white;
        }
        

    .navbar-default{
      margin-bottom: 0;
    }
        .navbar {
            margin-bottom: 0;
        }
      
      .login{
        background: #2e6da4;
      }

      .daftar{
            background-color: #e4e4e4;
      }

      .petunjuk{
        border-radius: 0px;
      }
      </style>     
<?php include 'foot.php'; ?>