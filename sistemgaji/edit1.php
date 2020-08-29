<html>

<head>
    <title>Payrol management system</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>

    <!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
            <div id="logo">
                <span class="image avatar48"><img src="images/avatar.png" alt="" /></span>
                <h1 id="title">Admin</h1>
                <p>HRD Manager</p>
            </div>

            <!-- Nav -->
            <nav id="nav">

                <ul>
                    <li><a href="payroll.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Beranda</span></a></li>
                    <li><a href="payroll.php#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Karyawan</span></a></li>
                    <li><a href="payroll.php#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Daftar Karyawan</span></a></li>
                    <li><a href="payroll.php#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Slip Gaji</span></a></li>
                </ul>
            </nav>

        </div>

        <div class="bottom">

            <!-- Social Icons -->
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- About Me -->
        <section id="about" class="three">
            <div class="container">

                <header>
                    <h2>MENU MENGUBAH DATA KARYAWAN</h2>
                </header>

                <p>Daftar Karyawan</p>
                <?php
//including the database connection file
       include("connection.php");
        $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); // using mysqli_query instead
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        echo "<table><tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Periode</th>
        <th>Sisa Utang Jam Bulan Kemarin</th>
        <th>Utang Jam Bulan Ini</th>
        <th>Bayar Utang Jam Bulan Ini</th>
  
        
        <th>Sakit</th>
        <th>Telat</th>
        <th>Total Shift Bulan Ini</th>
      

        <th>Pokok</th>
        <th>Tj.Tetap</th>
        <th>Tj.BPJS</th>
        <th>Lembur Mingguan</th>
        <th>Lembur Tgl Merah</th>
        <th>Pengurangan BPJS</th>
       

        <th>Edit</th>
        </tr>";
	while($res = mysqli_fetch_array($result)) { 		
        
        echo "<tr>
        <td>" . $res["employee_id"]. "</td>
                                    <td>" . $res["name"]. "</td>
                                    <td>" . $res["periode"]. "</td>
                                    <td>" . $res["sisa_utang_jam_bulan_sebelumnya"]." Menit" . "</td>
                                    <td>" . $res["utang_jam_bulan_ini"]." Menit". "</td>
                                    <td>" . $res["bayar_utang_jam_bulan_ini"]." Menit". "</td>
                                    
                                    <td>" . $res["telat"]. "</td>
                                    <td>" . $res["sakit"]. "</td>
                                    <td>" . $res["total_shift"]. "</td>
                                    
                                    <td>" . "Rp ". $res["gj_pokok"]. "</td>
                                    <td>" . "Rp ". $res["tj_tetap"]. "</td>
                                    <td>" . "Rp ".$res["tj_bpjs"]. "</td>
                                    <td>" . "Rp ".$res["lembur_mingguan"]. "</td>
                                    <td>" . "Rp ".$res["lembur_tgl_merah"]. "</td>
                                    <td>" . "Rp ".$res["pembayaran_bpjs"]. "</td>
                                    
        <td><a href=\"edit.php?employee_id=$res[employee_id]\">Edit</a></td>
        </tr>";
         }
        echo "</table>";
	// 	echo "<td>".$res['employee_id']."</td>"."&nbsp";
	// 	echo "<td>".$res['name']."</td>"."&nbsp";
	// 	echo "<td>".$res['email']."</td>"."<br>";	
	// 	echo "<td><a href=\"edit.php?employee_id=$res[employee_id]\">Edit</a> | <a href=\"delete.php?id=$res[employee_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	// }
	
?>
            </div>
        </section>

        <!-- Contact -->
        

    </div>

    <!-- Footer -->
    <div id="footer">

        <!-- Copyright -->
        <ul class="copyright">
        <li>&copy; PMS. All rights reserved.</li>
        <li>Design: Arsh</a></li>
        </ul>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollzer.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>
