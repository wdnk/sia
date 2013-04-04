<ul id="nav">
	<!--Menu SI Monitor -->
	<li>
		<a href="http://localhost/mhs/">SISTEM INFORMASI MONITOR MAHASISWA KHUSUS</a>
    </li>
    
    <!--Menu Evaluasi Study -->
	<li>
    	<a href="#">EVALUASI STUDY</a>
        <a href="#">Sub Menu</a>
        <a href="#">Sub Menu</a>
        <a href="#">Sub Menu</a>
    </li>
    
    <!--Menu Legalisir Ijazah -->
	<li>
    	<a href="#">LEGALISIR IJAZAH</a>
        <a href="#">Sub Menu</a><br>
        <a href="#">Sub Menu</a><br>
        <a href="#">Sub Menu</a>
    </li>
    
    <!--Menu Verifikasi Ijazah -->
	<li>
    	<a href="#">VERIFIKASI IJAZAH</a>
        <a href="#">Sub Menu</a>
        <a href="#">Sub Menu</a>
        <a href="#">Sub Menu</a>
    </li>
    
    <!--Menu Surat Izin -->
	<li>
    	<a href="#">SURAT IZIN</a>
        <a 
			<?php 
				if($_GET['page'] == 'input_data')
					{ 
			?> 
           				class="active" 
			<?php } ?> 
            href="index.php?page=input_data">Sub Menu</a>
        <a href="#">Sub Menu</a>
        <a href="#">Sub Menu</a>
    </li>
</ul>