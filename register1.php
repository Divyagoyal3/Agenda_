<?php
    session_start();
    header('location:event_dt.php'); 
    $con = mysqli_connect('localhost','root');
    if($con)
    {
        echo" connection successsfull";
    }
    else
    {
        echo"no connection";
    }

    mysqli_select_db($con, 'event');
    $name = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    $c_no = $_POST['c_no'];
    $b_name = $_POST['b_name'];
    $payable = $_POST['payable'];

    $q = " select * from users where name = '$name' && password = '$pass'";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);

    if($num >0)
    {
        echo" duplicate data";  
    }
    else
    {
        $qy= "insert into users(username, fname, lname, email, password, contact, company, c_no, b_name, payable) values('$name' , '$fname' , '$lname' , '$email' , '$pass' , '$contact' , '$company' , '$c_no' , '$b_name' , '$payable')"; 
        mysqli_query($con, $qy);
    }


?>