<?php
// including the database connection file
include_once("../sistemgaji/connection.php");

if(isset($_POST['update']))
{	

	$employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
    $periode = mysqli_real_escape_string($conn,$_POST['periode']);
    
    $sisa_utang_jam_bulan_sebelumnya = mysqli_real_escape_string($conn,$_POST['sisa_utang_jam_bulan_sebelumnya']);
    $utang_jam_bulan_ini = mysqli_real_escape_string($conn,$_POST['utang_jam_bulan_ini']);
    $bayar_utang_jam_bulan_ini = mysqli_real_escape_string($conn,$_POST['bayar_utang_jam_bulan_ini']);
    
    $telat = mysqli_real_escape_string($conn,$_POST['telat']);
    $sakit = mysqli_real_escape_string($conn,$_POST['sakit']);
    $total_shift = mysqli_real_escape_string($conn,$_POST['total_shift']);
    
    $gj_pokok = mysqli_real_escape_string($conn,$_POST['gj_pokok']);
    $tj_tetap = mysqli_real_escape_string($conn,$_POST['tj_tetap']);
    $tj_bpjs = mysqli_real_escape_string($conn,$_POST['tj_bpjs']);
    $lembur_mingguan = mysqli_real_escape_string($conn,$_POST['lembur_mingguan']);
    $lembur_tgl_merah = mysqli_real_escape_string($conn,$_POST['lembur_tgl_merah']);
    $pembayaran_bpjs = mysqli_real_escape_string($conn,$_POST['pembayaran_bpjs']);
    
	// checking empty fields
    if(
        empty($employee_id) ||
        empty($name) || 
        empty($periode) ||
        empty($sisa_utang_jam_bulan_sebelumnya) ||
        empty($utang_jam_bulan_ini) ||
        empty($bayar_utang_jam_bulan_ini) ||
        empty($telat) ||
        empty($sakit) ||
        empty($total_shift) ||
        empty($gj_pokok) ||
        empty($tj_tetap) ||
        empty($tj_bpjs) ||
        empty($lembur_mingguan) ||
        empty($lembur_tgl_merah) ||
        empty($pembayaran_bpjs)) {	
			echo "<font color='red'>field is empty.</font><br/>";		
	    } else {	
		//updating the table
		$result = mysqli_query(
            $conn, "UPDATE employee SET 
            employee_id='$employee_id',
            name='$name',
            periode = '$periode',

            sisa_utang_jam_bulan_ini= '$sisa_utang_jam_bulan_ini',
            utang_jam_bulan_ini = '$utang_jam_bulan_ini',
            bayar_utang_jam_bulan_ini = '$bayar_utang_jam_bulan_ini',

            telat ='$telat',
            sakit = '$sakit',
            total_shift= '$total_shift',

            gj_pokok = '$gj_pokok',
            tj_tetap = '$tj_tetap',
            tj_bpjs = '$tj_bpjs',
            lembur_mingguan = '$lembur_mingguan',
            lembur_tgl_merah = '$lembur_tgl_merah',
            pembayaran_bpjs = '$pembayaran_bpjs',

        WHERE employee_id=$employee_id");
		
		//redirectig to the display page. In our case, it is 
		header("Location: payroll.php#about");
	}
}
else {
    // if( isset($_GET['submit'])){
    //     $employee_id = $_GET['employee_id=employee_id'];
    // }

    // contoh: http://gajian.com/edit.php?employee_id=12
    // $employee_id = $_GET['employee_id'];
    // maka, nilai $employee_id = 12
    $employee_id = $_GET['employee_id'];

    $result = mysqli_query($conn, "SELECT * FROM employee WHERE employee_id=$employee_id");

    while($res = mysqli_fetch_array($result))
    {
            $employee_id                        = $res['employee_id'];
            $name                               = $res['name'];
            $periode                            = $res['periode'];
            $sisa_utang_jam_bulan_sebelumnya    = $res['sisa_utang_jam_bulan_sebelumnya'];
            $utang_jam_bulan_ini                = $res['utang_jam_bulan_ini'];
            $bayar_utang_jam_bulan_ini          = $res['bayar_utang_jam_bulan_ini'];

            $telat                              = $res['telat'];
            $sakit                              = $res['sakit'];
            $total_shift                        = $res['total_shift'];

            $gj_pokok                           = $res['gj_pokok'];
            $tj_tetap                           = $res['tj_tetap'];
            $tj_bpjs                            = $res['tj_bpjs'];
            $lembur_mingguan                    = $res['lembur_mingguan'];
            $lembur_tgl_merah                   = $res['lembur_tgl_merah'];
            $pembayaran_bpjs                    = $res['pembayaran_bpjs'];

    }
}
?>
<html>
<head>	
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
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

	

    <div id="main">
            <div class="container">

                <form class="well form-horizontal" action="edit.php?employee_id=<?php echo $employee_id; ?>" method="POST" id="contact_form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Edit an Employee!</legend>

                        <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">

                        <?php /*
                        ini harusnya gak editable
                        lihat atas kode ini sebegai referensi #employee_id dari LINE 8

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
                    */ ?>

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
                                <input name="tj_tetap" placeholder="Tunjangan Tetap" class="form-control" type="text" value="<?php echo $tj_tetap; ?>">
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
                        <input type="hidden" name="update" value="Update">

                        <!-- Button -->
						<br />
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit">Ubah <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
						<br />
                    </fieldset>
                </form>
               
            </div>
        </div>
        <div id="footer">

        <!-- Copyright -->
        <ul class="copyright">
        <li>&copy; PMS. All rights reserved.</li>
        <li>Design: Arsh</a></li>
        </ul>

    </div>


</body>
</html>