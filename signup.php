<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "memfull";  
    $mail=$_POST['mail'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
      
    $con = mysqli_connect($host, $user, $password, $db_name);
    $dup="select * from login where email='$mail'";
    $result=mysqli_query($con,$dup);
    $row=mysqli_num_rows($result);
    if($row==1)
        {
            echo "<script>alert('Already REgistered with this Mail.Please LOgin !')</script>";
            echo"<script>window.location.href='login.html'</script>";
        }
    else
        {
            if($pass1==$pass2)
             {
                 $sql = "insert into login values('$mail','$pass1')";
                 $result=mysqli_query($con,$sql);
                 if($result)
                    {
                        
                         echo "<script>alert('REGISTER SUCCESSFUL !')</script>";
                         echo"<script>window.location.href='login.html'</script>";
                         exit();
                    }
             }
             else
             {
               echo "<script>alert('passwords must be the same !')</script>";
               echo"<script>window.location.href='login.html'</script>";
            }  
        }
    
    
     
?>  