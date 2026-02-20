<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "babbage_student";

    $conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $grade_section = $_POST["grade_section"];
    $address = $_POST["address"];
    $contact_no = $_POST["contact_no"];

    if (isset($_POST['Register'])) {
        $sql = "INSERT INTO student_record (student_id, name, grade_section, address, contact_no)
        VALUES ('$student_id', '$name', '$grade_section', '$address', '$contact_no')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "<script>alert('Student registered successfully!'); window.location.href='student.php';</script>";
        exit(); 
    } U
}

    if(isset($_POST['Update'])) {
        $sql = "UPDATE student_record
                SET name='$name', grade_section='$grade_section', address='$address', contact_no='$contact_no'
                WHERE student_id='$student_id' ";
        
        if($conn->query(query: $sql) === TRUE) {
            echo "<script>alert('Student updated successfully!'); window.location.href='student.php';</script>";
            exit(); 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>