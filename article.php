<?php                                                
session_start();
$_SESSION["Article"] = "article";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    #MyForm{
  display: block;
    width: 500px;
    height: auto;
    border: 1px solid #ccc;
    padding: 14px;
    background: #ececec;

} 
#u1{
    margin-left: 20%;
  }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
<center>
  <div class="fullbluepanelcontent" id="s1">
  
  <form id="MyForm" action="article.php" method="post">
    <div class="fullbluepanelheader">
  
Article Content &nbsp;
  </div>
  <table>
    <tbody>
      <tr>
        <td>
            <label>Article Name</label>
             </td>
             <td>
          <input style="width: 250px;" type="text" name="name" placeholder=""/></br>
         </td>
      </tr>
  <tr>
    <td>
    <label>Subject:</label>
     </td>
       <td>
       <select style="width: 250px;height: 30px" name="category" id="category" class="forminputtext">
                  
     <option value="none" selected="selected">select:</option>


        <option value="Academic">Academic</option>
        <option value="Arts">Arts</option>
        <option value="Health/Fitness">Health/Fitness</option>
        <option value="IT">IT</option>
        <option value="Languages">Languages</option>
        <option value="Lifestyle">Lifestyle</option>
        <option value="Music">Music</option>
        <option value="Professional">Professional</option>
                </select></br>
      </td>
    </tr>
    <tr>
          <td>  
       <label for="exampleFormControlTextarea3">Article Description:</label>
       </td>
        <td>
       <textarea name="abody"  rows="7" cols="32"></textarea>
       </td>
    </tr>

  </tbody>
</table>
</br>
      <input type="submit" name="btnsubmit" value="Submit"/>
      </div>
  </form>
</br>
</br>
<a href="demo.php">Back</a>
  </div>
</center>
  
</body>
</html>
<?php
if(isset($_POST['btnsubmit']))
{
include "connection.php";
	$name=$_POST['name'];
	$category=$_POST['category'];
	$abody=$_POST['abody'];
   $sql = "INSERT INTO article" ."(aname,subject,abody)"

  ." VALUES('$name','$category','$abody')";
  $result=mysqli_query($conn,$sql)or trigger_error(mysqli_error($conn));
   if (!$result)
   {
	die('Error:');
	}
	else{
echo("<script>location.href = 'demo.php';</script>");
  
    }
mysqli_close($conn);
}

else
{

}
?>
</html>
