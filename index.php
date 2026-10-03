 <?php include 'pure_php.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    
    <a href="next_page.php">Go To New Page!</a>
    <a href="example2.php">Go To Example IT</a>
    <?php // echo "<h1>Hello World</h1>"; ?>

    <h2>Username:<u><?php echo $username; ?></u></h2>
    <h2>UserID:<u><?php echo $user_id; ?></u></h2>

    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
    var username = "<?php echo $username?>";
    var userID = "<?php echo $user_ID?>";
    var password = "<?php echo $password?>";
    var course = "<?php echo $course?>";

    function greetUser(){ 
        alert("Hello"+username+" "+"Your UserID is: "+userID + "Your password is: " + " " 
            +password + "course: " +course);
            }
        
</script>

</body>
</html>