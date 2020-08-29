<html>

<head>
    <title>Insert an employee</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <?php
        include "connection.php";

        $employee_id                        = rand(0, 9999999);
        // $employee_id                        = 'employee_id';
        $name                               = 'name';
        $periode                            = 'periode';
        $sisa_utang_jam_bulan_sebelumnya    = '';
        $utang_jam_bulan_ini                = '';
        $bayar_utang_jam_bulan_ini          = '';

        $telat                              = '';
        $sakit                              = '';
        $total_shift                        = '';

        $gj_pokok                           = '';
        $tj_tetap                           = '';
        $tj_bpjs                            = '';
        $lembur_mingguan                    = '';
        $lembur_tgl_merah                   = '';
        $pembayaran_bpjs                    = '';

        $arr = array(
            'employee_id'                       => $employee_id,
            'name'                              => $name, 
            'periode'                           => $periode, 
            'sisa_utang_jam_bulan_sebelumnya'   => $sisa_utang_jam_bulan_sebelumnya,
            'utang_jam_bulan_ini'               => $utang_jam_bulan_ini, 
            'bayar_utang_jam_bulan_ini'         => $bayar_utang_jam_bulan_ini,

            'sakit'                             => $sakit,
            'telat'                             => $telat, 
            'total_shift'                       => $total_shift,
            'gj_pokok'                          => $gj_pokok,
            'tj_tetap'                          => $tj_tetap,
            'tj_bpjs'                           => $tj_bpjs,
            'lembur_mingguan'                   => $lembur_mingguan,
            'lembur_tgl_merah'                  => $lembur_tgl_merah,
            'pembayaran_bpjs'                   => $pembayaran_bpjs
        );

        $table = 'employee';
        $col = implode(', ', array_keys($arr));
        $values = implode(', ', array_values(array_map("myfunction",$arr)));
        
        $sql = "INSERT INTO `".$table."` (".$col.") VALUES (".$values.")";

        function myfunction($val)
        {
            return("'" . $val . "'");
        }
      
        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            // header("Location: payroll.php#about");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->query($sql);
        // $conn->close();
    ?>


    <!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
            <div id="logo">
                <span class="image avatar48"><img src="images/avatar.png" alt="" /></span>
                <h1 id="title">Admin</h1>
                <p>Payroll Manager</p>
            </div>

            <!-- Nav -->
            <nav id="nav">

                <ul>
                    <li><a href="payroll.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                    <li><a href="payroll.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Employee</span></a></li>
                    <li><a href="payroll.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-th">list</span></a></li>
                    <li><a href="payroll.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Pay Slip</span></a></li>
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
                <li><a href="#" class="icon fa-envelope"><span class="label">sisa_utang_jam_bulan_sebelumnya</span></a></li>
            </ul>

        </div>

    </div>

    <!-- Main -->
    <div id="main">
        <div class="container">

            <form class="well form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>MENAMBAH KARYAWAN BARU</legend>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">ID Karyawan</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="employee_id" placeholder="Employee Id" class="form-control" type="text" value="<?php echo $employee_id; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Karyawan</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name" placeholder="Nama" class="form-control" type="text" value="<?php echo $name; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Periode</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="periode" placeholder="Periode" class="form-control" type="text" value="<?php echo $periode; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Sisa Utang Jam Bulan Kemarin</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="sisa_utang_jam_bulan_sebelumnya" placeholder="Sisa Utang Jam Bulan Kemarin" class="form-control" type="text" value="<?php echo $sisa_utang_jam_bulan_sebelumnya; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Utang Jam Bulan Ini</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="utang_jam_bulan_ini" placeholder="Utang Jam Bulan Ini" class="form-control" type="text" value="<?php echo $utang_jam_bulan_ini; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Bayar Utang Jam Bulan Ini</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="bayar_utang_jam_bulan_ini" placeholder="Bayar Utang Jam Bulan Ini" class="form-control" type="text" value="<?php echo $bayar_utang_jam_bulan_ini; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Sakit</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="sakit" placeholder="Sakit" class="form-control" type="text" value="<?php echo $sakit; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Telat</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="telat" placeholder="Telat" class="form-control" type="text" value="<?php echo $telat; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Total Shift Bulan Ini</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="total_shift" placeholder="Total Shift Bulan Ini" class="form-control" type="text" value="<?php echo $total_shift; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Gaji Pokok</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="gj_pokok" placeholder="Gaji Pokok" class="form-control" type="text" value="<?php echo $gj_pokok; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tunjangan Tetap</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="" placeholder="Tunjangan Tetap" class="form-control" type="text" value="<?php echo $tj_tetap; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tunjagan BPJS</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="tj_bpjs" placeholder="Tunjangan BPJS" class="form-control" type="text" value="<?php echo $tj_bpjs; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Lembur Mingguan</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="lembur_mingguan" placeholder="Lembur Mingguan" class="form-control" type="text" value="<?php echo $lembur_mingguan; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Lembur Tgl Merah</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="lembur_tgl_merah" placeholder="Lembur Tgl Merah" class="form-control" type="text" value="<?php echo $lembur_tgl_merah; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Pembayaran BPJS</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="pembayaran_bpjs" placeholder="Pembayaran BPJS" class="form-control" type="text" value="<?php echo $pembayaran_bpjs; ?>">
                            </div>
                        </div>
                    </div>


                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Karyawan baru telah ditambahkan.</div>
                    <br />
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button onclick="alert('Employee Added Successfully!')" 
                                <input type="submit" name="submit" value="Submit">ADD
                                <span class="glyphicon glyphicon-send"></span>
                            </button>
                        </div>
                    </div>
                    <br />
                </fieldset>
            </form>

        </div>
    </div>
    <!-- /.container -->



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