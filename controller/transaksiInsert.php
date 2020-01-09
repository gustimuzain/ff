<?php
    session_start();
    include('../config.php');
    $transaksi = $_POST['transaksi'];
    $booking_id = $_POST['booking_id'];
    $total = $_POST['total'];
    $transaksi_id=$_POST['transaksi_id'];
 
    $input ="INSERT INTO transaksi(transaksi_id,booking_id,total,konfirmasi) VALUES('$transaksi_id','$booking_id','$total','Belum dikonfirmasi')";
 
    $query=mysqli_query($con, $input) or die(mysqli_error($con));
    if($query==1){
        echo "<script>;window.location='../view/pembayaran.php?id=".$transaksi_id."'</script>";
    }else {
        echo '<script>alert("Failed to Registration Your Account"); window.location= "../view/mobil.php";</script>';
    }
?>
