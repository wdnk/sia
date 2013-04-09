<?php
if(!isset($_SESSION)){
  session_start();
}

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}
?>

 <div id="sidebar"><div id="sidebar-wrapper">
            <!-- Sidebar Profil -->
            <div id="profile-links">
                Selamat datang, <a href="#" title="Ubah Profile">
                <?php 
                if(isset($_SESSION['username'])){ 
                    echo $_SESSION['username'];
                }
                ?>
                </a><br />
                <a href="logout_evaluasi.php" title="Sign Out">Sign Out</a>
            </div>

            <ul id="main-nav">  <!-- Accordion Menu -->
                
                <li>
                    <a href="index.php" <?php if($page == null){ ?> class="nav-top-item no-submenu current" <?php }else{ ?> class="nav-top-item no-submenu" <?php } ?> >
                        Dashboard
                    </a>       
                </li>

                <li>
                    <a href="http://localhost/mhs/" class="nav-top-item no-submenu">
                        Pengurus FT
                    </a>       
                </li>

                <li> 
                    <a href="#" <?php if($page == 'evaluasi_satu' || $page == 'evaluasi_dua'){ ?> class="nav-top-item current" <?php }else{ ?> class="nav-top-item" <?php } ?> > 
                    Evaluasi Study
                    </a>
                    <ul>
                        <li><a <?php if($page == 'evaluasi_satu'){ ?> class="current" <?php } ?> href="index.php?page=evaluasi_satu">Evaluasi I</a></li>
                        <li><a <?php if($page == 'evaluasi_satu'){ ?> class="current" <?php } ?> href="index.php?page=evaluasi_dua">Evaluasi II</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" <?php if($page == 'legalisir_ijazah' || $page == 'verifikasi_ijazah'){ ?> class="nav-top-item current" <?php }else{ ?> class="nav-top-item" <?php } ?> >
                        Ijazah
                    </a>
                    <ul>
                        <li><a <?php if($page == 'legalisir_ijazah'){ ?> class="current" <?php } ?> href="?page=legalisir_ijazah">Legalisir Ijazah</a></li>
                        <li><a <?php if($page == 'verifikasi_ijazah'){ ?> class="current" <?php } ?> href="?page=verifikasi_ijazah">Verifikasi Ijazah</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" class="nav-top-item">
                        Perizinan
                    </a>
                    <ul>
                        <li><a href="?page=surat_perizinan_satu">Surat Izin I</a></li>
                        <li><a href="#">Surat Izin II</a></li>
                        <li><a href="#">Surat Izin III</a></li>
                        <li><a href="#">Surat Izin IV</a></li>
                    </ul>
                </li>  
            </ul> <!-- End #main-nav -->
</div>