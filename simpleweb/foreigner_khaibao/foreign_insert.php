<?php

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['nation']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['phone'])){


        $username = $_POST['username'];
        $nation = $_POST['nation'];
        $subject= $_POST['subject'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];
        $date = $_POST['dob'];
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
            $Insert = "INSERT INTO foreign_student(full_name, nation, subject, email, phone_number, address,	birthday,gender,travel_from,symptom,contact_with_infected)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssissssss",$username,$nation, $subject, $email,$phone,$address,$date,$gender,$travel,$sym,$contact);

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
