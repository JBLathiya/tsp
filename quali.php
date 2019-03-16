<!DOCTYPE html>
<html>
<head>
  <title></title>


 <script type="text/javascript">
  $(document).ready(function (e) {
 $("#qual").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "insert-quali.php",
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
     $("#err").html("Invalid File !").fadeIn();
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



  

<div style="display:block; " class="qualification">
  <form method="post" action="insert-quali.php" class="mobtable" id="qual" name="qual" enctype="multipart/form-data">

      <div class="fullbluepanelheader">
Qualifications </div>

      <div class="fullbluepanelcontent">

      <input type="hidden" id="username" name="username" value="4529276251792">
        <input type="hidden" id="checkkey" name="checkkey" value="3753717303276">
  
      <table>
        <tbody><tr>
        <td width="160">
Qualification Type </td>
        <td> 

        <select class="forminputtext" style="width:250px;" type="text" name="continent" id="continent" onchange="countryChange(this);">
        <option value="">Select a Qualification Type</option>
        <option value="School">School</option>
        <option value="University">University</option>
        </select>
        </td>
        </tr>
        <tr>
        <td width="160">Qualification</td>
        <td> 

        <select  id="cou" class="forminputtext" style="width:250px;"  name="cou" >
          <option value="">Select a qualification</option>
        </select>
        </td>
        </tr>
      </tbody></table>
      <table>
        <tbody><tr>
        <td width="160"><div name="lbluni" id="lbluni">
University/Board </div></td>
        <td>  
           <input class="forminputtext ui-autocomplete-input" style="width:400px;" type="text" name="school" id="school" maxlength="200" autocomplete="off">
                </td>
        </tr>
             
        <tr>
          <td>
Grade </td>
          <td>
            <input class="forminputtext" style="width:200px;" type="text" name="grade" id="grade" maxlength="20">
          </td>
        </tr>
        <tr>
          <td>
Qualification Date: </td>
          <td>

            <select style="width: 200px;" name="qualificationyear" id="qualificationyear" class="forminputtext">
           <option value="" selected="selected">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option>
            </select>
            
            <input type="checkbox" id="chkOverseas" name="chkOverseas">
Overseas Qualification 
        </td>
      </tr>
      
      
        <tr style="height: 40px;">
        <td>
Browse File <br><em style="color: #666;">
(optional) </em></td>
        <td> <input class="browsebutton" type="file" id="upfile" name="upfile" style="width: 300px;"></td>
        </tr>
    </tbody></table>
<table>   
       <input type="hidden" name="documentationtype" id="documentationtype" value="Certificate">
        
      <!--<tr id="rowDocumentType" name="rowDocumentType" style="display:none;">
        <td width = "160"> Qualification Document:</td>
        <td>
          <select style="width: 227px;" name="documentationtype" id="documentationtype" class="forminputtext">
            <option value="certificate" selected="selected">Certificate</option>
            <option value="transcript">Transcript</option>
          </select>
        </td>
        
      </tr>-->
        <tbody><tr>
        <td colspan="2">
       <!-- <a onclick="my();" class="btn green small">
Submit Qualification </a> </td>-->
        <input type="Submit" name="" style="color: black" class="btn green small"></input></td>
            
      </tr>
      </tbody></table>
     </div>
    </form>
    <div id="err"></div>
    &nbsp;
<h5 align="center">My Qualification</h5>
    <div class="table-responsive">
  
  <table class="table" border="0">
    
  <th scope="col" width="4">No.</th>
  <th align="center">Qualification</th>
  <th align="center">University/board</th>
  <th align="center">Year</th>
  <th align="center">Status</th>
  <th align="center"></th>
  
<?php

 include "connection.php";
$count=0;
$sqlreport="select * FROM `qualification`";
$result=mysqli_query($conn, $sqlreport);
if (mysqli_num_rows($result) > 0)
        {
     while($rowreport = mysqli_fetch_assoc($result))
        {
          $count++;
          if(isset($_SESSION['user']))
          {
          $id = $rowreport["id"]; 
          
          ?>
          <tbody>
            <tr id="delete<?php echo $id;?>">
               <td scope="row"><?php echo $count;?></td>
               <td><?php echo $rowreport["quali"];?></td>
               <td><?php echo $rowreport["ub"];?></td>
               <td><?php echo $rowreport["year"];?></td>
               <?php
               if($rowreport["status"]=='pending'){?>
                <td style="color:red;"><?php echo $rowreport["status"];?></td>
               <?php

            }else{
               ?>
               <td style="color:green;"><?php echo $rowreport["status"];?></td>
               <?php
             }?>
               
               <td><input type="button" id="s3" onclick="qualiAjax(<?php echo $id;?>)" style="min-width: 30px;" class="btn btn-sm btn-danger" value="Delete"/>
            </tr>


    <?php
  }
        }
        ?>
      
<?php
      }
      else
      {
        ?>
      <tr>
        <td width="19%">No Record Found..</td><td></td><td></td><td></td><td></td>

      </tr>
        <?php
      }

        //echo "<script>window.print();</script>";
        mysqli_close($conn);
      
      ?>


</tbody>
      </table>
</div>

  </div>
</body>
</html>
