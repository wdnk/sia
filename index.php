<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistem Informasi Akademik | Universitas Gadjah Mada</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/simpla.jquery.configuration.js"></script>
    <script type="text/javascript" src="js/facebox.js"></script>
    <script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
    <!-- Internet Explorer .png-fix -->
    <!--[if IE 6]>
      <script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
      <script type="text/javascript">
        DD_belatedPNG.fix('.png_bg, img, li');
      </script>
    <![endif]-->
</head>

<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <img src="img/logo.gif" width="3%" height="3%" />SISTEM INFORMASI AKADEMIK FAKULTAS TEKNIK UNIVERSITAS GADJAH MADA
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
	  <div class="sidebar">
			<?php include "navigasi.php";?>
	  </div>
	  <div id="main-content">
        <div id="tanggal"><?php include "tanggal.php"; ?></div>
        <br><br>
        <noscript> <!-- Show a notification if the user has disabled javascript -->
          <div class="notification error png_bg">
            <div>
              Javascript harus aktif di browser anda
            </div>
          </div>
        </noscript>
        	<?php
				if (isset($_REQUEST['page'])){
					$tampil=$_REQUEST['page'];
				}
					if(empty($tampil)){
					  $halaman="dashboard";
					}else{
					  $halaman=$tampil;
					}
					include $halaman.".php";
			?>
      <div class="clr"></div>
    </div>
      <div id="footer" class="footer">
        <small>
            &#169; Copyright 2013 JTETI UGM
        </small>
      </div><!-- End #footer -->
  </div>
  <!-- end of main_container -->


<div id="outer_frame">
<div id="frame">
	<iframe id="loader" width="570px" height="420px" frameborder="0" style="float:left;"></iframe>
<div id="tutup" style="cursor:pointer;width:20px;height:20px;float:right;font-size:13pt;border:0px solid #000;" onclick="javascript:document.getElementById('outer_frame').style.display='none';document.getElementById('loader').src='about:blank;'"><img src="images/close.gif" /></div>
</div>
</div>
</div>
</div><!--end of main-->


</body>
</html>