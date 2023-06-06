<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="admin.php"><img src="logo.png" alt="logo" class="logo"></a> 
    <div class="main">
        <h1 style="color: white; class: h1;" >Candidate's information</h1>
        <form action="#" method="post">
        <div class="box">
            <label  class="label">National ID </label><br>
            <input type="numbers" name="id" placeholder="Your ID" class="input">
            <br>
            <label for="#" class="label">First name </label><br>
            <input type="text" name="name1" placeholder="First Name" class="input">
            <br>
            <label for="#" class="label">Second name </label><br>
            <input type="text" name="name2" placeholder="Second Name" class="input">
            <br>
            <label for="#" class="label">Gender</label><br>
            <input type="text" name="gender" class="input">
            <br>
        </div>
        <div class="box2">
            <label for="#" class="label">Date of birth </label><br>
            <input type="date" name="birth" class="input">
            <br>
            <label for="#" class="label">Exam date </label><br>
            <input type="date" name="exam" class="input">
            <br>
            <label for="#" class="label">Phone </label><br>
            <input type="text" placeholder="Phone number.." name="phone" class="input">
            <br>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        
        </form>
        </div>
</body>
<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name1=$_POST['name1'];
$name2=$_POST['name2'];
$gender=$_POST['gender'];
$birth=$_POST['birth'];
$exam=$_POST['exam'];
$phone=$_POST['phone'];

$sql=mysqli_query($conn, "insert into candidate(id,name1,name2,gender,birth,exam,phone) values('$id','$name1','$name2','$gender','$birth','$exam','$phone')");
}

$rec=mysqli_query($conn, "select *from candidate");
?>
<style>
    *{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 600;
    user-select: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: url(po.png)no-repeat;
    background-size: cover;
}
.h1{
    position: absolute;
    top: 10%;
}
.input{
    padding: 0.8rem;
    width: 280px;
    height: 100%;
    border: 2px solid #382f26;
    background: #272530;
    border-radius: 5px;
    font-size: 18px;
    outline: none;
    transition: all .3s;
    color: #fff;
}
.label{
    font-size: 20px;
    color: white;
}
.box2{
    position : absolute;
    left: 55%;
    top: 140px;
}
.box{
    position: absolute;
    top: 120px;
    left: 90px;
}
.main{
    text-align: center;
    position: absolute;
    top: 80px;
    left: 23%;
    background: transparent;
    height: 500px;
    width: 800px;
    border: 2px;
    border-radius: 16px;
    backdrop-filter: blur(9px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
}
.logo{
    width: 330px;
    position: absolute;
    top: 10px;
    left: 5px;
}
</style>
</html>