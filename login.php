<?php
session_start();

define("forward",true);


$x = null;

$conn=mysqli_connect("localhost","root","","renal");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["login"])){

    $name=$_POST["username"];

    $pass=$_POST["password"];

    $selected=$_POST["usertype"];

    $query="SELECT * FROM `logindata` WHERE username='".$name."' and password='".$pass."' and usertype='".$selected."'";

    $result= mysqli_query($conn,$query);

    if($result){
        while($row=mysqli_fetch_array($result)){
            if($row['usertype']=="admin")
            {
                $x=1;
            }
           elseif($row['usertype']=="doctor")
           {
              $x=2;
           }
           elseif($row['usertype']=="staff")
           {
               $x=3;
           }
            echo '<script type="text/javascript">alert("you are logged successfully as '.$row['usertype'].'")</script>';
        }
        
    $_SESSION['USERname']=$row['username'];
    

    if(mysqli_num_rows($result)==1 and $x==1){
        
        ?>
        <script type="text/javascript">
        window.location.href="admin.html"</script>
        
        <?php
    }
    elseif(mysqli_num_rows($result)==1 and $x==2){
        
            ?>
            <script type="text/javascript">
            window.location.href="doctor.html"</script>
            <?php
    }
    elseif(mysqli_num_rows($result)==1 and $x==3){
        
                ?>
                <script type="text/javascript">
                window.location.href="staff.html"</script>
                <?php
     }
     else{
        echo '<script type="text/javascript">alert("Either username or password is wrong")</script>';
        ?>
        <script type="text/javascript">
        window.location.href="index.html"</script>
        <?php
        
        
        

     }
        
    
            
 }

 

}
?>