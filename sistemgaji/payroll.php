<html>
    <head>
        <title>Sistem Informasi Gaji</title>
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
                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Beranda</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Karyawan</span></a></li>
                        <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Daftar Karyawan</span></a></li>
                        <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Slip Gaji</span></a></li>
                    </ul>
                </nav>

            </div>

            <div class="bottom">

                <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://github.com/zhofirmagang/test1" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>
            </div>
        </div>

        <!-- Main -->
        <div id="main">

            <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Selamat Datang di <strong>Sistem Manajemen Gaji</strong> <br /> 2020</h2>
                        <p>Cv.Seven Inc</p>
                    </header>

                    <footer>
                        <a href="#portfolio" class="button scrolly">Karyawan</a>
                    </footer>
                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header>
                        <h2>Karyawan</h2>
                    </header>

                    <p>Disini menu untuk menambah, mengubah, atau menghapus data karyawan.</p>

                    <div class="row">
                        <div class="4u 12u$(mobile)">
                            <article class="item">
                                <a href="insert.php" class="image fit"><img src="images/add-user.png" alt="" /></a>
                                <header>
                                    <h3>Tambah</h3>
                                </header>
                            </article>

                        </div>
                        <div class="4u 12u$(mobile)">
                            <article class="item">
                                <a href="delete1.php" class="image fit"><img src="images/delete-user.png" alt="" /></a>
                                <header>
                                    <h3>Hapus</h3>
                                </header>
                            </article>

                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <article class="item">
                                <a href="edit1.php" class="image fit"><img src="images/edit-user.png" alt="" /></a>
                                <header>
                                    <h3>Ubah</h3>
                                </header>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Me -->
            <section id="about" class="three">
                <div class="container">

                    <header>
                        <h2>Daftar Karyawan</h2>
                    </header>

                    <p>-</p>
                    <?php
                        include("connection.php");
                        $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); 
                        echo "<table>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Sisa Utang Jam Bulan Kemarin</th>
                                <th>Utang Jam Bulan Ini</th>
                                <th>Bayar Utang Jam Bulan Ini</th>
                                <th>Sisa Utang Jam Bulan Ini</th>
                                <th>Sakit</th>
                                <th>Telat</th>
                                <th>Total Shift Bulan Ini</th>
                                <th>Total Hadir Disiplin</th>
                                <th>Pokok</th>
                                <th>Tj.Tetap</th>
                                <th>Tj.BPJS</th>
                                <th>Lembur Mingguan</th>
                                <th>Lembur Tgl Merah</th>
                                <th>Pengurangan BPJS</th>

                                <th>Total</th>
                                <th>Export</th>
                            </tr>";
                            $total = 0;
                            while($res = mysqli_fetch_array($result)) {
                                $total = ($res["gj_pokok"] + $res["tj_tetap"] + $res["tj_bpjs"] + $res["lembur_mingguan"] + $res["lembur_tgl_merah"]) - $res["pembayaran_bpjs"];
                                $sisa = $res["utang_jam_bulan_ini"] - $res["bayar_utang_jam_bulan_ini"];
                                $totalhdr = $res["total_shift"] - ($res["telat"] + $res["sakit"]);
                                echo "<tr>
                                    <td>" . $res["employee_id"]. "</td>
                                    <td>" . $res["name"]. "</td>
                                    <td>" . $res["periode"]. "</td>
                                    <td>" . $res["sisa_utang_jam_bulan_sebelumnya"]." Menit" . "</td>
                                    <td>" . $res["utang_jam_bulan_ini"]." Menit". "</td>
                                    <td>" . $res["bayar_utang_jam_bulan_ini"]." Menit". "</td>
                                    <td>" . $sisa." Menit". "</td>

                                    <td>" . $res["telat"]. "</td>
                                    <td>" . $res["sakit"]. "</td>
                                    <td>" . $res["total_shift"]. "</td>
                                    <td>" . $totalhdr. "</td>

                                    <td>" . "Rp ". $res["gj_pokok"]. "</td>
                                    <td>" . "Rp ". $res["tj_tetap"]. "</td>
                                    <td>" . "Rp ".$res["tj_bpjs"]. "</td>
                                    <td>" . "Rp ".$res["lembur_mingguan"]. "</td>
                                    <td>" . "Rp ".$res["lembur_tgl_merah"]. "</td>
                                    <td>" . "Rp ".$res["pembayaran_bpjs"]. "</td>
                                    <td>" . "Rp ".$total. "</td>
                                    <td><a href=\"export1.php?id=$res[employee_id]\">Export</a></td>
                                </tr>";
                            }
                        echo "</table>";
                    ?>
                </div>
            </section>

            <!--  
            
            <section id="contact" class="four">
                <div class="container">
                    <header>
                        <h2>Slip Gaji</h2>
                    </header>

                    <?php
                        include("connection.php");
                        // $query = "SELECT employee.name FROM employee RIGHT JOIN gaji ON employee.name = gaji.* ORDER BY employee_id ASC";
                        // $result = mysql_query($query);
                        $result = mysqli_query($conn, "SELECT * FROM gaji ORDER BY id ASC ");
                        echo "<table>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th>Sisa Utang Jam Bulan Kemarin</th>
                                <th>Utang Jam Bulan Ini</th>
                                <th>Bayar Utang Jam Bulan Ini</th>
                                <th>Sisa Utang Jam Bulan Ini</th>
                                <th>Total Shift Bulan Ini</th>
                                <th>Telat</th>
                                <th>Total Hadir Disiplin</th>
                                <th>Pokok</th>
                                <th>Tj.Tetap</th>
                                <th>Tj.BPJS</th>
                                <th>Lembur Mingguan</th>
                                <th>Lembur Tgl Merah</th>
                                <th>Pengurangan BPJS</th>
                                <th>Total</th>
                                <th>Export</th>
                            </tr>"; 
                            $total = 0;
                            // $total_hdr=30;
                            while($res = mysqli_fetch_array($result)) {
                                // $result.forEach(myfunction);   
                                // foreach($result as $res) {
                                // echo $res;  
                                // function myfunction($res , $result){
                                // }
                                $total = ($res["pokok"] + $res["tj_tetap"] + $res["tj_bpjs"] + $res["lembur_mingguan"] + $res["lembur_tgl_merah"]) - $res["pembayaran_bpjs"];
                                $total_hdr = $res["telat"] - $res["sakit"];
                                $sisa = $res["utang_jam_bulan_ini"] - $res["bayar_utang_jam_bulan_ini"];
                                echo "<tr>  
                                    <td>" . $res["id"]. "</td>
                                    <td>" . $res["nama"]. "</td>
                                    <td>" . $res["periode"]. "</td>
                                    <td>" . $res["sisa_utang_jam_bulan_sebelumnya"]." Menit" . "</td>
                                    <td>" . $res["utang_jam_bulan_ini"]." Menit". "</td>
                                    <td>" . $res["bayar_utang_jam_bulan_ini"]." Menit". "</td>
                                    <td>" . $sisa." Menit". "</td>

                                    <td>" . $res["telat"]. "</td>
                                    <td>" . $res["sakit"]. "</td>
                                    <td>" . $total_hdr. "</td>

                                    <td>" . "Rp ". $res["pokok"]. "</td>
                                    <td>" . "Rp ". $res["tj_tetap"]. "</td>
                                    <td>" . "Rp ".$res["tj_bpjs"]. "</td>
                                    <td>" . "Rp ".$res["lembur_mingguan"]. "</td>
                                    <td>" . "Rp ".$res["lembur_tgl_merah"]. "</td>
                                    <td>" . "Rp ".$res["pembayaran_bpjs"]. "</td>
                                    <td>" . "Rp ".$total. "</td>
                                    <td><a href=\"export1.php?id=$res[id]\">Export</a></td>
                               </tr>";
                            //    var_dump($res);
                                $total = 0;
                            }
                        echo "</table>";
                    ?>                
                </div>
            </section>
        </div>
        -->

        <!-- Footer -->
        <div id="footer">
            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; All rights reserved.</li>
                <li></a></li>
            </ul>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollzer.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
