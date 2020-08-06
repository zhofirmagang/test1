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
                <!-- <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul> -->

            </div>

        </div>

        <!-- Main -->
        <div id="main">

            <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Selamat Datang di <strong>Sistem Manajemen Gaji</strong>
                        <p>CV. Seven Inc</p>
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
                        //including the database connection file
                        include("connection.php");
                        $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); 
                        // using mysqli_query instead
                        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
                        echo 
                            "<table>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>Kota</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Gaji Pokok</th>
                                </tr>";
                                while($res = mysqli_fetch_array($result)) {
                                    echo "<tr><td>" . $res["employee_id"]. "</td><td>" . $res["name"]. "</td><td> " . $res["email"]. "</td><td> " . $res["city"]. "</td><td> " . $res["join_date"]. "</td><td> " . "Rp ". $res["annual_basic_pay"]. "</td></tr>";
                                }
                                echo 
                            "</table>";
                        // 	echo "<td>".$res['employee_id']."</td>"."&nbsp";
                        // 	echo "<td>".$res['name']."</td>"."&nbsp";
                        // 	echo "<td>".$res['email']."</td>"."<br>";	
                        // 	echo "<td><a href=\"edit.php?employee_id=$res[employee_id]\">Edit</a> | <a href=\"delete.php?id=$res[employee_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                        // }
                    ?>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="four">
                <div class="container">

                    <header>
                        <h2>Slip Gaji</h2>
                    </header>
                    <?php
                        //including the database connection file
                        include("connection.php");
                        $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); 
                        // using mysqli_query instead
                        echo 
                            "<table>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Gaji Pokok</th>
                                    <th>Gaji Setelah Potongan</th>
                                    <th>Potongan/Pajak</th>
                                    <th>Export</th>
                                </tr>";
                                while($res = mysqli_fetch_array($result)) {        
                                    echo 
                                        "<tr>
                                            <td>" . $res["employee_id"]. "</td>
                                            <td>" . $res["name"]. "</td>
                                            <td> " . $res["email"]. "</td>
                                            <td> " . $res["join_date"]. "</td>
                                            <td> " ."Rp ". $res["annual_basic_pay"]. "</td>
                                            <td> " . "Rp ". $res["monthly_pay"]. "</td>
                                            <td> " . $res["tax"]." %". "</td>
                                            <td><a href=\"export1.php?employee_id=$res[employee_id]\">Export</a></td>
                                        </tr>";
                                }
                                echo 
                            "</table>";
                    ?>
                    
                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
            <li>&copy; ZhofirMagang </li>
            <li></a></li>
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