<?php
    session_start();
    include('../config.php');
    // $user = $_SESSION['usr_name'];
    $user = $_SESSION['usr_id'];
    $userid = $user['usr_id'];
    $booking = $_POST['booking'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $jam = $_POST['jam'];
    $booking_id=$_POST['booking_id'];
    $idmobil= $_POST['plat'];
    $mobil = mysqli_query($con,"SELECT * FROM mobil WHERE plat='$idmobil'") or die(mysqli_error($con));
    $mobil = mysqli_fetch_assoc($mobil);
    $plat =  $mobil["plat"];
 
    $input ="INSERT INTO booking(booking_id,tgl_pinjam,tgl_kembali,jam,plat,user_id) VALUES('$booking_id','$startDate','$endDate','$jam','$plat','$userid')";
 
    $query=mysqli_query($con, $input) or die(mysqli_error($con));
    if($query==1){
        echo "<script>;window.location='../view/detail.php?id=".$booking_id."'</script>";
    }else {
        echo '<script>alert("Failed to Registration Your Account"); window.location= "../view/mobil.php";</script>';
    }
?>
