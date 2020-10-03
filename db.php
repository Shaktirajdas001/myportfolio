<?php
$con=mysqli_connect('sql311.epizy.com', 'epiz_26878803', 'CKYdYCRSxpr5') or die('Could not connect the database : Username or password incorrect');
mysqli_select_db($con,'epiz_26878803_mydb') or die ('No database found');
echo 'Database Connected successfully';
?>