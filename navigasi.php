 <div id="sidebar"><div id="sidebar-wrapper">            
            <ul id="main-nav">  <!-- Accordion Menu -->
                
                <li>
                    <a href="index.php" class="nav-top-item no-submenu">
                        Dashboard
                    </a>       
                </li>

                <li>
                    <a href="http://localhost/mhs/" class="nav-top-item no-submenu">
                        Pengurus FT
                    </a>       
                </li>

                <li> 
                    <a href="#" class="nav-top-item <?php if((isset($_GET['page']) == 'evaluasi_satu') || (isset($_GET['page']) == 'evaluasi_dua')){ ?> current <?php } ?>"> 
                    Evaluasi Study
                    </a>
                    <ul>
                        <li><a <?php if(isset($_GET['page']) == 'evaluasi_satu'){ ?> class="current" <?php } ?> href="index.php?page=evaluasi_satu">Evaluasi I</a></li>
                        <li><a <?php if(isset($_GET['page']) == 'evaluasi_satu'){ ?> class="current" <?php } ?> href="index.php?page=evaluasi_dua">Evaluasi II</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" class="nav-top-item">
                        Ijazah
                    </a>
                    <ul>
                        <li><a href="#">Legalisir Ijazah</a></li>
                        <li><a href="#">Verifikasi Ijazah</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" class="nav-top-item">
                        Perizinan
                    </a>
                    <ul>
                        <li><a href="#">Surat Izin I</a></li>
                        <li><a href="#">Surat Izin II</a></li>
                        <li><a href="#">Surat Izin III</a></li>
                        <li><a href="#">Surat Izin IV</a></li>
                    </ul>
                </li>  
            </ul> <!-- End #main-nav -->
</div>