<?php 
include 'config.php';

$file = "/home/wunder/image.jpg";//tobe uploaded 
$remote_file = "image.jpg"; 

// set up basic connection 
$conn_id = ftp_connect($ftp_server); 

// login with username and password 
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// upload a file 
if (ftp_put($conn_id, $remote_file, $file, FTP_BINARY)) { 
    echo "successfully uploaded $file\n"; 
    exit; 
} else { 
    echo "There was a problem while uploading $file\n"; 
    exit; 
    } 
// close the connection 
ftp_close($conn_id); 
?>
