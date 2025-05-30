<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:index.html');
    }
    $data=$_SESSION['data']
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME | ONLINE VOTING </title>
        <style>

            *{
                margin:0;
                padding:0;
                

            }
            body{
                background-color:#9dffba;
            }

            
            .anime {
                background-color: rgb(255, 60, 60);
                animation-name: example;
                animation-duration: 4s;
                color:rgb(255, 60, 60);
                position: relative;
    /* top: 26px;  */

            }
            
            @keyframes example {
                0% {
                    background-color: red;
                    color:red;
                }
                25% {
                    background-color: yellow;
                    color:yellow;
                }
                50% {
                    background-color: blue;
                    color:blue;
                }
                100% {
                    background-color: green;
                    color:green;
                }
                0% {
                    background-color: red;
                }
            }
            
            * {
                box-sizing: border-box;
            }
            
            .column {
                display:inline-block;
                width: 20%;
                padding: 10px;
                height: 200px;
                margin: 20px;
                border: 2px solid black;
                border-radius: 3px;
            position: relative;
    top: 30px;
    animation:slider 1s ease-out 0s
            }

            @keyframes slider {
                0%{
                    transform:translateX(-100%)
                }
                100%{
                    transform:translateX(0%)
                }
                
            }
            
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .info{
                position: relative;
    top: 80px;
            }

.btn2{
    
   
    position: relative;
    float: right;
    /* left: 100px; */
    right: 30px;
    top: -120px;
    background-color: black;
    color: white;
    font-size: 15px;
    font-weight: bolder;
    padding: 7px;
    border-radius:10px;
    
}
.btn2:hover{
    background-color: white;
    color:black;

}

.btn{
    
   
    
    background-color: black;
    color:white;
    font-size: 15px;
    font-weight:bolder;
    padding: 7px;
    border-radius: 10px;
        width:70px;
        position: relative;
    /* right: 13px; */
    
    left: 16px;
    top: 10px;
}

.btn:hover{
    background-color: white;
    color:black;

}
.text{
    text-shadow: 0px 6px 3px #090808cc;
color: #ff0071;
    font-size: 44px;
}


.col{
    background: #ffb6ba;
    height: 138px;
}


.column:nth-child(even)
{
    background-color:#ffb6ba96;
}

        </style>
    </head>

    <body>
        <div class="col">
        <a href="index.html"><button class="btn">Back</button></a>
        <center>
            <h1><b class="text">Online Voting</b></h1>
        </center>
        </div>
        <a href="logout.php" ><button class="btn2">LogOut</button></a>
        <div class="anime">.</div>
        <?php 
            if(isset($_SESSION['groups'])){
                $groups = $_SESSION['groups'];
                for($i=0;$i<count($groups);$i++){
        ?>
        
            <div class="column">
                <h2>Candidate
                    <?php echo ++$i ?>
                </h2>
                <p>Name:-
                    <?php echo $groups[--$i]['name']; ?>
                </p>
                <form action="vote.php" method="post">
                    <input type="hidden" name="candidatevote" value="<?php echo $groups[$i]['votes'] ?>" id="">
                    <input type="hidden" name="candidateid" value="<?php echo $groups[$i]['id'] ?>" id="">
                    <?php 
                        if($_SESSION['status']==1){
                    ?>
                    <h5>Voted</h5>
                    <?php
                        }else{
                    ?>
                        <button type="submit">vote</button>
                        <?php
                        }
                    ?>
                </form>
            </div>
        <!-- </div> -->
        <?php
                }
            }
        ?>
            <center>
                <div class="info">
                    Name:   <?php echo $data['name']; ?><br><br>
                    Class:   <?php echo $data['class']; ?><br><br>
                    <!-- <label>Status:</label><?php echo $status; ?><br><br> -->
                </div>
            </center>

    </body>
</html>