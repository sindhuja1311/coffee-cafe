<?php
session_start();
    $con = mysqli_connect("localhost","root","","sandy");
    if(!$con){
      echo "not connected properly" ;
      exit;
  }
        
          $name1=$_SESSION['namie'];
          $name2=$name1;
            echo '
            <html>
                <head>
                    <link rel="stylesheet" href="css/style1.css">
                    <title>Thank you!</title>
                </head>
                <body >
                <div id="message-card" style="background-color:#4B3832;">
                <h1 style="text-align:center;color:white;">Coffee Cafe`</h1>
                <hr><br>
                    <form method="post" action="cancel.php" align="center">
                    <h2 style="text-align:center;">Thank you for choosing us '; ECHO $name2; echo '!</h2>
                    <h3>Our team will contact you soon!</h3>
                    <p>Want to cancel your booking?</p>
                    <input type="submit" placeholder="cancel" name="cancel" value="CANCEL" onclick=cancelled()>
                    </form>
                    <form method="post" action="sess_end.php" align="center">
                    <p>Go back</p>
                    <input type="submit" placeholder="back" name="back" value="BACK">
                    </form>
                    <script>
                    function cancelled(){
                    alert("cancelled");}
                    </script>
                
            </div>
                    
                        </body>
                        </html>
                        ';
                        ?>