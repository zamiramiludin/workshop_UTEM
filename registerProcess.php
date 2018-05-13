<?php
		
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $date = $_POST['dob'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $contact = $_POST['contactNo'];
        $name = $_POST['fullname'];

        
        $conn = new mysqli("localhost", "root", "", "hilang");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO user ( username, password, fullname, dob, email, contactNo, gender, address, city, state) 
        VALUES('$username','$password','$name','$date','$email', '$contact', '$gender', '$address', '$city', '$state')";
    
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    
    ?>
    