<script src="destination.js"></script>
<?php
    $con=mysqli_connect("localhost","root","","memfull");
    $search=$_POST["search"];
    $search=trim($search);
    // $sql = "select * from places where name like \'%ja%\' OR near like \'%ja%\' OR category like \'%ja%\';";
    $sql="select * from places where name like '%$search%' OR near like '%$search%' OR category like '%$search%';";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)!=0){
    while($row=mysqli_fetch_assoc($res)){
        $heading=$row["name"];
        $matter=$row["speciality"];
        $filename=$row["filename"];
        ?>
<script>
var h = "<?php echo"$heading"?>"; 
var m = "<?php echo"$matter"?>";
var pic="<?php echo"$filename"?>";
</script>
<?php
// echo "<script>console.log('$matter');</script>";
echo "<script type='text/javascript'>createcard()</script>";
}
    }
    else{
        echo "hello ";
       ?>
       <script>
        document.querySelector(".locations").innerHTML="<img src='not found.webp'>";
       </script>
       <?php
    }
?>