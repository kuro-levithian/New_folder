<?php

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['MSSV']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['phone'])){


        $username = $_POST['username'];
        $MSSV = $_POST['MSSV'];
        $factor = $_POST['factor'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];
        $date = $_POST['date'];
        $travel = $_POST['travel'];
        $sym = $_POST['symptom'];
        $contact = $_POST['contact'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "simple_web";

        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

        if($conn->connect_error){
            die('Could not connect to the database.');
        }
        else{
            $Insert = "INSERT INTO vn_student(ho_ten, MSSV, khoa, gioi_tinh, email, phone, dia_chi,ngay_sinh,du_lich_14ngay,dau_hieu_14ngay,tiep_xuc_gan_14ngay)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sisssisssss",$username,$MSSV, $factor, $gender,$email,$phone,$address,$date,$travel,$sym,$contact);

            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
            }
            else {
                echo $stmt->error;
            }

            $stmt->close();
        }
     }
     else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}


?>
