<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<a href="home.php"><img src="logo.png" alt="logo" class="logo"></a> 
    <p style="position: relative; left: 10%; top: 230px; width: 200px;">
    <a href="#">
    <span>Add Candidate</span>
    <span>Add Candidate</span>
    </a>
    </p>
    <p style="position: relative; left: 17%; top: 230px;">
    <a href="#">
    <span>Add Grade</span>
    <span>Add Grade</span>
    </a>
    </p>
    <div class="btn">
   <button type="submit" class="button" name="submit">
    <span>
        <a href="candidate.php" class="a" style="color: white; text-decoration: none;">Log Out</a> 
    </span>
   </button>
   </div>
</body>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'popsins', sans-serif;
    font-weight: 600;
}
body{
    background: url(home.jpg) no-repeat;
    background-size:cover;
    display: flex;
}
.logo{
    position: relative;
    width: 330px;
    top: 10px;
    left: 15px;
}
p{
    position: relative;
    left: 15%;
    top: 340px; 
    display: inline-block;
    width: 160px;
    height: 50px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.25);

}
p span{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    color: #fff;
    background: darkgreen;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 18px;
    border-radius: 6px;
}
p span:nth-child(2)
{
    color: black;
    background: #fff;
    overflow: hidden;
    z-index: 2;
    transition: 0.5s;
    clip-path: polygon(60% 0,100% 0%,100% 100%,60% 100%,50% 53%);
}
p span:nth-child(2):hover{
    clip-path: polygon(0 0,100% 0%,100% 100%,0 100%,0 50%);
}
p span:nth-child(1):hover ~ span:nth-child(2)
{
    clip-path: polygon(100% 0,100% 0%,100% 100%,100% 100%,100% 50%);
}
.btn button{
    background: black;
    cursor: pointer;
    width: 130px;
    height: 40px;
    position: absolute;
    top: 5%;
    left: 87%;
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
    background: brown;
    transform: translate(-78%, -25%) rotate(45deg);
}
.btn:hover button:after{
    transform: translate(-9%, -25%) rotate(45deg);
}
button span{
    position: relative;
    z-index: 1; 
}
</style>
</html>