<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['lastname'])
     && isset($_POST['address']) && isset($_POST['email']) 
     &&isset($_POST['dob']) && isset($_POST['password']) 
     && isset($_POST['profilepic']) && isset($_POST['cpassword'])) {
        
    	$file = addslashes(file_get_contents($_FILES['profilepic']['tmp_name']));

        $username = $_POST['username'];
    	$lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $profilepic = $_POST['profilepic'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "page";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM data WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO data6 (username,lastname, email,address, dob,profilepic, password,cpassword) values(?, ?, ?, ?,?,?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssibss",$username,$lastname, $email,$address, $dob,$file, $password,$cpassword);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                 

                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
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