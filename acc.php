

 
 <div style="display:none; " class="accinfo">

     <?php
  include 'connection.php';
$sqlacc = "select * from accinfo where user = '".$_SESSION['user']."'";
$resultacc = mysqli_query($conn,$sqlacc);
if (!$resultacc)
    echo(mysqli_error($conn));

if (mysqli_num_rows($resultacc) > 0)
        {

            while($rowaccount = mysqli_fetch_assoc($resultacc))
            {             
                ?>
    <form method="post" action="" name="acc" id="acc" class="mobtable">
  <input type="hidden" name="section" value="account">


  <div class="fullgreenpanelheader">
  
Account Information 
  </div>

  <div class="fullbluepanelcontent">


    <table>
      <tbody>
        <tr class="heightfill">
        <td style="width: 35.2%;">
Username </td>
        <td><span class="faded"><?php echo $rowaccount['user']?></span></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Email Address </td>
        <td><input class="forminputtextpad" type="text" id="email" name="email" style="width:390px;" maxlength="90" value=<?php echo $rowaccount['email']?>></td>
      </tr>
      <tr>

        <td>
New Password </td>
        <td><input class="forminputtextpad" type="password" id="password" name="password" style="width:390px;" size="23" maxlength="25"></td>
      </tr>
      <tr>
        <td>
Confirm New Password </td>
        <td><input class="forminputtextpad" type="password" id="password2" name="password2" style="width:390px;" maxlength="25"></td>
      </tr>
          <?php
 }
}
 else{
  echo " no found";
 }
 mysqli_close($conn);
 ?>
    </tbody></table>

  </div>
<div class="fullbluepanelfootersmall"></div>




<br>

<a onclick="addacc();"  class="btn green small">
Save </a>


  </form>
