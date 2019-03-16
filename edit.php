
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">
  $(document).ready(function (e) {
 $("#edit").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "editprofile.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     //$("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     console.log('fs');
     alert(data);
     $("#qual")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
</head>
                        
<body>



<div style="display:none;"class="proinfo">
  <?php
$_SESSION['profile']='profile';
 if(isset($_POST["jay"]))

        {
          include "connection.php";
          $errors= array();
      
           // if(isset($_POST['image'])){
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $text=explode('.',$_FILES['image']['name']);
      $text1=end($text);
      $file_ext=strtolower($text1);
      //echo "string";
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $path="profilephoto/".$file_name;
         move_uploaded_file($file_tmp,$path);
        
        header("Location:demo.php");
      }else{
         print_r($errors);
      }
    //}
    //else{
      //echo "i";
    //}
         }
        
  
        
?>
  <?php

          
       
  include 'connection.php';
  $user=$_SESSION['user'];
$sqlp = "select * from profile where id = '".$user."'";
$resultprofile = mysqli_query($conn,$sqlp);
if (!$resultprofile)
    echo(mysqli_error($conn));

if (mysqli_num_rows($resultprofile) > 0)
        {

            while($rowprofile = mysqli_fetch_assoc($resultprofile))
            {         $photourl=$rowprofile['photo']; 
                      

                ?> 

  <form action="editprofile.php" method="post" enctype="multipart/form-data"  name="edit" id="edit" class="mobtable">
  <input type="hidden" name="section" value="profile">
  

<div class="fullgreenpanelheader">
  
Profile Information 
  </div>
  
  <div class="fullbluepanelcontent">


    <table>
  <input type="hidden" name="openaccount" id="openaccount" value="yes">
   
      <tbody>
        <tr>
          <td style="width: 35%;">Profile Image:</td>
          <td >
            <div style="width: 100%">
                                      <img src=<?php echo $photourl;?> id="Photo" name="Photo" width="150px" height="160px" border="1" align="center"><br>

                                                </td>
                                              </tr>

                                                <tr>
                                                  <td></td>
                                                  <td>
                                                <h3 id="filemsg" style="font-size: 12px;">Size of file must be less than 1 Mb</h3>
                                             
                                              

                                                </td>
                                              </tr>

                                                <tr>
                                                    <td></td>
                                                  <td>
                                                    
                                                <input style="width: 50%" type="file" name="image" id="image" onchange="readURL(this);" ><br/><br/>

                                              </div>

                                                </td>
                                              </tr>
                                              </div>
        <tr>
        <td style="width: 35%;">
Comments about yourself* </td>
        <td><textarea class="forminputtextpad" rows="30" cols="11" id="comments" maxlength="6500" name="comments"  style=" width:510px; height:210px;" required ><?php echo $rowprofile['comment'];?></textarea></td>
      </tr>
      <tr>
        <td>
Your Availability*: </td>
        <td><textarea class="forminputtextpad" rows="30" cols="11" id="availability" maxlength="6500" name="availability"  style=" width:510px; height:150px;" required ><?php echo $rowprofile['availability'];?></textarea></td>
      </tr>
  
      <tr>
        <td>
Your Experience*: </td>
        <td><textarea class="forminputtextpad" rows="30" cols="11" id="experience" name="experience" maxlength="6500"  style=" width:510px; height:150px;"required ><?php echo $rowprofile['experience'];?></textarea></td>
      </tr>
     
   <tr>  
     
   
    <tr>
        <td style="width: 200px;">
Native Language </td>
    <td><select style="width: 266px;" name="nativelanguage" id="nativelanguage" class="forminputtextpad" required >
    <option value="English "<?php if ($rowprofile['nlag'] == 'English') echo ' selected="selected"'; ?>>English</option>
        <option value="none">---------------------------</option> 
        <?php  
       $lan = ["Afrikaans","Albanian","Arabic","Bangla","Basque","Bengali","Bosnian","Braille","Bulgarian","Cantonese","Catalan","Chinese","Creole","Croatian","Czech","Danish","Dutch","English","Estonian","Farsi","Finnish","French","Gaelic","German","Greek","Gujarati","Hebrew","Hindi","Hungarian","Icelandic","Indonesian","Irish","Italian","Japanese","Kashmiri","Khmer","Korean","Latvian","Lithuanian","Malay","Maltese","Mandarin","Mongolian","Norwegian","Persian","Polish","Portuguese","Punjabi","Romanian","Russian","Serbian","Sign,Language","Slovak","Slovenian","Spanish","Swahili","Swedish","Tamil","Telugu","Thai","Turkish","Ukrainian","Urdu","Vietnamese","Weish"];
       foreach ($lan as $count) {
              ?>
              <option value='<?php echo $count?>';
              <?php if($rowprofile['nlag'] == $count) echo "selected='selected'";?>>
      
              <?php echo $count; ?>
              </option>
              <?php
              }
    ?>
      </select></td></tr><tr>

        <td style="width: 200px;">
Distance Willing to Travel </td>
        <td><select style="width: 266px;" name="distance" id="distance" class="forminputtextpad" required >
     <option value="Home Only" <?php if ($rowprofile['nlag'] == 'English') echo ' selected="selected"';?>>Home Only</option>
     <?php
     $mile=["1 mile", "2 miles", "3 miles" , "4 miles", "5 miles", "8 miles", "10 miles", "12 miles" ,"15 miles", "20 miles", "30 miles", "50 miles"];
     foreach ($mile as $count) {
              ?>
              <option value='<?php echo $count?>';
              <?php if($rowprofile['dis'] == $count) echo "selected='selected'";?>>
      
              <?php echo $count; ?>
              </option>
              <?php
              }
    ?>
      </select></td>
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
  
  <p><b>
*Field not required. </b>
  <br><br>
  <input type="submit"  name="jay" style="color: black;" class="btn green small" ></input>

<!--<a onclick="addedit();" href="#?pageSet=true" name="btnedit" class="btn green small">
Save </a>-->

  </p></form>
  <div id="err"></div>
  </div>
</body>
</html>
