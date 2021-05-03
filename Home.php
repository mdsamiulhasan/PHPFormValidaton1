<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation process</title>
</head>

<body>
    <div class="container">
        <div class="Form">
            <form action="Post.php" method="POST">
                <h1><input type="text" placeholder="Username" name="username"></h1>
                <h2><input type="text" placeholder="Email" name="useremail"></h2>
                <h3><input type="password" placeholder="Password" name="userpassword"></h3>
                <h4><input type="submit" value="submit" name="submit"></h4>
            </form>

        </div>
    </div>
    <!----php database connect--->

    <?php 
if(isset ($_POST['submit'])){
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userpassword = $_POST['userpassword'];

if($username && $useremail && $userpassword){
    $connection = mysqli_connect('localhost', 'Md Samiul Hasan', 'Admin787889', 'formvalidate');
    if(!$connection){
        die("connected". mysqli_error($connection));
    }

    $query = "INSERT INTO FormValidate(username, useremail, userpassword)";
    $query .= "VALUES fermdata('$username', '$useremail', '$userpassword')";
    $result = mysqli_query($connection, $query);
if($result){
    echo "data is insert";
}else{
    echo "data is not inserted";
}
        }
}



?>




</body>

</html>