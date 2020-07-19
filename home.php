<?php
  $sql = $koneksi->query("select * from tb_anggota");
  $anggota=$sql->num_rows;

  $sql2 = $koneksi->query("select * from tb_buku");
  $buku=$sql2->num_rows;

  $sql3 = $koneksi->query("select * from tb_transaksi");
  $transaksi=$sql3->num_rows;

  $sql4 = $koneksi->query("select * from tb_user");
  $user=$sql4->num_rows;
?>
<p></p>
<body>
   <marquee><font size="+3" face="arial">Sistem Informasi Perpustakaan</font></marquee>

   <div class="container theme-showcase" role="main">
   <div class="container">
  <hr class="soft">
  <p></P>
  <div class="row">
                <div class="col-md-3 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-group"></i>
                </span>
                <div class="text-box" >
                   <h3><?php echo $anggota; ?></h3>
                    <p>Data Anggota</p>
                </div>
                <a href="?page=anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		     </div>
         
                    <div class="col-md-3 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                <h3><?php echo $buku; ?></h3>
                    <p>Data Buku</p>
                </div>
                <a href="?page=buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		     </div>
                    <div class="col-md-3  col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-folder"></i>
                </span>
                <div class="text-box" >
                <h3><?php echo $transaksi; ?></h3>
                    <p>Data Transaksi</p>
                </div>
                <a href="?page=transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		     </div>
                    <div class="col-md-3  col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <div class="text-box" >
                <h3><?php echo $user; ?></h3>
                    <p>Data Pengguna</p>
                </div>
                <a href="?page=pengguna" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		     </div>
			</div>
      <p></P>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         
        </ol>
        <div class="carousel-inner" role="listbox">
          
          <div class="item active">
            <img src="images/perpus2.jpg" alt="first slide">
          </div>
          <div class="item">
            <img src="images/perpus3.jpg" alt="second slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
		
	<div class="row">
	<div id="sidebar" class="span3">
	
</div>

</div>

	</div>
    </div>
    
    
</body>