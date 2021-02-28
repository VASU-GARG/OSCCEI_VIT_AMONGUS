<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'reviews');
$sql="SELECT * FROM information;";
$result=mysqli_query($con,$sql);
?>
<?php
     $i=0;
    while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td class="border px-4 py-2"> FULL NAME -: <?php  echo$row['fullName']."<br>";?></td>
        <br>
        <td class="border px-4 py-2">EMAIL ADDERSS -: <?php echo$row['email']."<br>";?></td>
        <br>
        <td class="border px-4 py-2"> CLUB/CHAPTER NAME -: <?php echo$row['clubName']."<br>";?></td>
        <br>
        <td class="border px-4 py-2">COMMENT -: <?php echo$row['review']."<br>";?></td>
        <br><br><br><br><br><br>
    </tr>
<?php }?>



