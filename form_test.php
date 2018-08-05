<html>
<body>

<?php echo $_POST["Name"]; ?><br>
Client email address is: <?php echo $_POST["Email"]; ?><br>
<?php echo $_POST["Purpose"]; ?><br>
<?php echo $_POST["Message"]; ?><br>

<?php mail("miguelcdomingo@gmail.com,hoppingsamurai@yahoo.com", // to
"ASDI Website Contact",

//mail(to,subject,message,headers,parameters);
//https://www.w3schools.com/php/func_mail_mail.asp
$_POST["Message"]);
?>
</body>
</html>