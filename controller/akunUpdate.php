<?php
    if(isset($_POST['update'])){
        include('../config.php');
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $nohp = $_POST["nohp"];

        $update = mysqli_query($con,"UPDATE users SET nama = '$nama', nohp = '$nohp' WHERE id='$id'") or die(mysqli_error($con));
        if($update){
            echo '<script>alert("success"); window.location ="../view/akun.php"</script>';
        }else{
            echo '<script>alert("failed"); window.location ="../view/akun.php"</script>';
        }
    }       
    else{
        echo '<script>alert("Tes"); window.history.back()</script>';
    }
?>