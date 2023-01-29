<?php 

    include 'connection.php';

    $otp = $_POST['otp'];
    $email = $_POST['email'];

    $otpQuery = mysqli_query($koneksi,"SELECT * FROM tb_otp WHERE email = '$email' AND otp = '$otp'");
    $otpCount = mysqli_num_rows($otpQuery);

    if($otpCount >0){
        $dropOtp = mysqli_query($koneksi,"DELETE FROM tb_otp WHERE email = '$email' AND otp = '$otp'");
        
        if($dropOtp){
            header('location:index.php?status=SUCCESS');
        }
    }else{
        echo "
            <script>
                alert('Can't find any accounts');
                window.location = 'index.php';
            </script>
        ";
    }

?>