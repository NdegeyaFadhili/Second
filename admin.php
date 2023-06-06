<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
   <a href="admin.php"><img src="logo.png" alt="logo" class="logo"></a> 
    <div class="box">
        <h1 class="h1" >
            Sign in as Admin
        </h1>
    <form action="#" method="post">
    <div class="container">
       
     <input type="text" id="username" name="name" placeholder="Your Name.." class="input" required>
     <label for="username" class="label">Admin Name</label>
    <br>
    <br>
  
    <input type="password" id="password" name="password" placeholder="Your password" class="input" required autocomplete="off">
    <label for="password" class="label" >Admin Password</label>

    </div>
    <p class="p"><a href="#" >Don't have an account !?</a></p>
    <div class="btn">
   <button type="submit" class="button" name="submit">
    <span>
        <a href="candidate.php" class="a" style="color: white;">Sign In</a> 
    </span>
   </button>
   </div>
    </form>
    </div>
</body>
<?php
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql=mysqli_query($conn,"insert into admin(name,password) values('$name','$password')");
}
$rec=mysqli_query($conn, "select * from admin");
?>
<style>
    *{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 600 ;
    user-select: none;
}
body{
    background: url(class.png) no-repeat;
    background-size: cover;
}
.h1{
    color: whitesmoke;
}
.p{
    color: white;
    text-decoration: none;
    position: relative;
    top: 20px;
    left: 70px;
}
.p a{
    color: white;
    text-decoration: none;
}
.p a:hover{
    text-decoration: underline;
    color: tomato;
}
.box{
    text-align: center;
    position: absolute;
    top: 100px;
    left: 40%;
    background: transparent;
    height: 400px;
    width: 400px;
    border: 2px;
    border-radius: 16px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
}
.btn button{
    background: black;
    cursor: pointer;
    width: 130px;
    height: 40px;
    position: absolute;
    top: 75%;
    left: 31%;
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
    text-transform: uppercase;
    overflow: hidden;
    border: 0px;
    border-radius: 6px;
}
button:hover{
    box-shadow: 0 5px 30px rgba(0,0,0,.2);
}
.btn button:after{
    position: absolute;
    content:'';
    left:0;
    top:0;
    height: 490%;
    width: 140%;
    transition: all .5s ease-in-out;
}
.btn button:after{
    background: #78c7d2;
    transform: translate(-98%, -25%) rotate(45deg);
}
.btn:hover button:after{
    transform: translate(-9%, -25%) rotate(5deg);
}
button span{
    position: relative;
    z-index: 1; 
}
.a{
    color: black;
    text-decoration: none;
}
.container{
    width: 280;
    position: relative;
    top: 20px;
}
.label{
    position: absolute;
    left: 55px;
    transition: all 0.2s;
    padding: 0 2px;
    z-index: 1;
    color: #b3b3b3;
}
.input{
    padding: 0.8rem;
    width: 70%;
    height: 100%;
    border: 2px solid #382f26;
    background: #272530;
    border-radius: 5px;
    font-size: 18px;
    outline: none;
    transition: all .3s;
    color: #fff;
}

.label::before {
    content: "";
    height: 5px;
    background-color: #272530;
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    z-index: -1;
}
.input:focus {
    border: 2px solid #fd7f0a;
}
.input:focus+.label, 
.filled{
    top :-10px;
    color: #fd7f0a;
    font-size:14px;
}
.input::placeholder{
    font-size: 16px;
    opacity: 0;
    transition: all .3s;
}

.input:focus::placeholder{
    opacity: 1;
    animation-delay: 0.2s;
}
.logo{
    width: 330px;
}
</style>
</html>