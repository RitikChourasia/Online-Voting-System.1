<?php  session_start();    

if(isset($_SESSION['use']))   
 {
    header("Location:result.php"); 
 }

if(isset($_POST['login'])) 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Admin" && $pass == "123")
         {                                  
          $_SESSION['use']=$user;
         echo '<script type="text/javascript"> window.open("result.php","_self");</script>'; 
        }
        else
        {
            echo "invalid UserName or Password";        
        }
}
?>
<html>
<head>
<title> Login Page   </title>
<style>
  .put{
            width: 230px;
            padding: 10px;
            margin: 15px;
            box-shadow: 5px 5px 10px rgb(110, 110, 110);
        }
        .put:focus,
        .put:hover{
            box-shadow: 5px 5px 10px rgb(110, 110, 110);
            border-radius: 5px;
        }

        .btn{
          padding: 10px;
    width: 90px;
    position: relative;
    top: 12px;
    left: 30px;
    background: white;
    border-radius: 10px;
    border: none;
    font-size: 1rem;
    font-weight: bolder;
        }

        .btn:hover{
          background:#de60ce;
          color:white;
          /* border-color:white; */

        }

        .heading{
          color:white;
          font-size:20px
        }

        form{
          background: black;
          position: relative;
          top:-16rem;
    display: inline-block;
    width: 30rem;
    height: 14rem;
    border-radius:12px ;
    animation:slider 1s ease-out 0s;
  
        }

        @keyframes slider {
                0%{
                    transform:translateX(-100%)
                }
                100%{
                    transform:translateX(0%)
                }
                
            }


        .hp{
background: #e4e3b4;
border-radius:10px;
    display: inline-block;
    height: 295px;
    width: 503px;    
        }
</style>
</head>

<body><center>
  <br><label><b><h1 class="hp">Admin Log-in</h1></b></label>
<div class="top">
<form action="" method="post">
    <table width="200" border="0">
  <tr>
    <td class="heading">  Username:-</td>
    <td> <input class="put" type="text" name="user" > </td>
  </tr>
  <tr>
    <td class="heading"> Password:-  </td>
    <td><input class="put" type="password" name="pass"></td>
  </tr>

</table>
<input class="btn" type="submit" name="login" value="LOGIN">

</form>
</div>

</center></body>
</html>