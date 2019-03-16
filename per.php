<div style="display:none; "  class="perinfo">
  <?php
include 'connection.php';
$user=$_SESSION['user'];
$sql = "select * from perinfo where id = '".$user."'";
$resultsearch = mysqli_query($conn,$sql);
if (!$resultsearch)
    echo(mysqli_error($conn));

if (mysqli_num_rows($resultsearch) > 0)
        {
            while($rowsearch = mysqli_fetch_assoc($resultsearch))
            {              
                ?>  
  <form method="post" id="per" name="per" target="_self" enctype="multipart/form-data">
  <div class="fullgreenpanelheader">
  
Personal Information 
  </div>
  <div class="fullbluepanelcontent">

    <input style="display:none;" class="forminputtextpad" type="text" id="firstname" value=<?php echo $rowsearch['fname'];?> name="firstname" maxlength="45"><table>
    
      <tbody><tr class="heightfill">

    
      <td style="width:34%;">
Account Type </td>
      <td><span class="faded">tutor</span></td>
      </tr>
          
      <tr>
    
      <td>Title</td><input type="hidden" name="status" value="">
      <td><select name="title" id="title" style="width: 266px;" class="forminputtextpad">
      <option value="none">Select</option>
      <?php
      												if(strcmp($rowsearch['title'], "Mr")==0)
                                                    {
                                                        ?>
                                                            <option value="Mr" selected>Mr</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Mr">Mr</option>
                                                        <?php
                                                    }
                                                    if(strcmp($rowsearch['title'], "Mrs")==0)
                                                    {
                                                        ?>
                                                            <option value="Mrs" selected>Mrs</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Mrs">Mrs</option>
                                                        <?php
                                                    }
                                                    if(strcmp($rowsearch['title'], "Miss")==0)
                                                    {
                                                        ?>
                                                            <option value="Miss" selected>Miss</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Miss">Miss</option>
                                                        <?php
                                                    }
                                                    if(strcmp($rowsearch['title'], "Dr")==0)
                                                    {
                                                        ?>
                                                            <option value="Dr" selected>Dr</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Dr">Dr</option>
                                                        <?php
                                                    }
                                                    if(strcmp($rowsearch['title'], "Prof")==0)
                                                    {
                                                        ?>
                                                            <option value="Prof" selected>Prof</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Prof">Prof</option>
                                                        <?php
                                                    }?>

     
      </select></td>
      </tr>
    
    <tr>
    
      <td>Gender</td>
      <td><select name="gender" id="gender" style="width: 266px;"  class="forminputtextpad">
      <option value="none">Select</option>
      <?php 
                                                    if(strcmp($rowsearch['gender'], "Male")==0)
                                                    {
                                                        ?>
                                                            <option value="Male" selected>Male</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Male">Male</option>
                                                        <?php
                                                    }
                                                    if(strcmp($rowsearch['gender'], "Female")==0)
                                                    {
                                                        ?>
                                                            <option value="Female" selected>Female</option>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option value="Female">Female</option>
                                                        <?php
                                                    }?>
      </select></td>
      </tr>
    
    
      <tr class="heightfill">
        <td>
First Name </td>
        <td><span class="faded"><?php echo $rowsearch['fname'];?></span></td>
     
      </tr>
      <tr>
        <td>
Last Name </td>
        <td><input class="forminputtextpad" type="text" id="surname" name="surname"  maxlength="45" style="width:390px;"value=<?php echo $rowsearch['surname'];?>></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Address 1 </td>
        <td><input class="forminputtextpad" type="text" id="address1" name="address1" style="width:390px;" maxlength="90" value=<?php echo $rowsearch['add1'];?>></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Address 2 *</td>
        <td><input class="forminputtextpad" type="text" id="address2" name="address2" style="width:390px;" maxlength="90" value=<?php echo $rowsearch['add2'];?>></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Town </td>
        <td><input class="forminputtextpad" type="text" id="town" name="town" style="width:390px;" maxlength="45" value=<?php echo $rowsearch['town'];?>></td>
      </tr>
      <tr>

      </tr><tr>
        <td style="width: 200px;">
County </td>
        <td><select style="width: 266px;" name="county" id="country" class="forminputtextpad">
      <?php 
      $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", 'Cape Verde', "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");



      foreach ($countries as $count) {
      	?>
 		<option value='<?php echo $count?>';
 			 <?php if($rowsearch['country'] == $count) echo "selected='selected'";?>>
 			
 			<?php echo $count; ?>
 			</option>
 			<?php
			}
		?>
        </select></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Postcode </td>
        <td><input class="forminputtextpad" type="text" id="postcode" name="postcode" style="width:390px;" maxlength="20" value=<?php echo $rowsearch['postcode'];?>></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Phone Number (home) </td>
        <td><input class="forminputtextpad" type="text" id="phone" name="phone" style="width:390px;" maxlength="20" value=<?php echo $rowsearch['phone'];?>></td>
      </tr>
      <tr>
        <td style="width: 120px;">
Phone Number (mobile) </td>
        <td><input class="forminputtextpad" type="text" id="phone2" name="phone2" style="width:390px;" maxlength="20" value=<?php echo $rowsearch['phone2'];?>></td>
      </tr>  
<tr>




        <td style="width: 230px;">
Date of Birth </td>
        <td><select style="width: 125px;" name="dobyear"  id="dobyear" class="forminputtextpad">
        <?php
          $year=["2019" ,"2018" ,"2017" ,"2016" ,"2015" ,"2014" ,"2013" ,"2012" ,"2011" ,"2010" ,"2009" ,"2008" ,"2007" ,"2006" ,"2005" ,"2004" ,"2003" ,"2002" ,"2001" ,"2000" ,"1999" ,"1998" ,"1997","1996" ,"1995" ,"1994" ,"1993" ,"1992" ,"1991" ,"1990" ,"1989" ,"1988" ,"1987" ,"1986" ,"1985" ,"1984" ,"1983" ,"1982" ,"1981" ,"1980" ,"1979" ,"1978" ,"1977" ,"1976" ,"1975" ,"1974" ,"1973" ,"1972" ,"1971" ,"1970" ,"1969" ,"1968" ,"1967" ,"1966" ,"1965" ,"1964" ,"1963" ,"1962" ,"1961" ,"1960" ,"1959" ,"1958" ,"1957" ,"1956" ,"1955" ,"1954" ,"1953" ,"1952" ,"1951" ,"1950" ,"1949" ,"1948" ,"1947" ,"1946" ,"1945" ,"1944" ,"1943" ,"1942" ,"1941" ,"1940" ,"1939" ,"1938" ,"1937" ,"1936" ,"1935" ,"1934" ,"1933" ,"1932" ,"1931" ,"1930" ,"1929" ,"1928" ,"1927" ,"1926" ,"1925" ,"1924" ,"1923" ,"1922" ,"1921" ,"1920" ,"1919" ,"1918" ,"1917" ,"1916" ,"1915" ,"1914" ,"1913" ,"1912" ,"1911" ,"1910" ,"1909" ,"1908" ,"1907" ,"1906" ,"1905" ,"1904" ,"1903" ,"1902" ,"1901" ,"1900"];
              foreach ($year as $count) {
              ?>
              <option value='<?php echo $count?>';
              <?php if($rowsearch['ydob'] == $count) echo "selected='selected'";?>>
      
              <?php echo $count; ?>
              </option>
              <?php
              }
    ?>
            </select>

           <select style="width: 138px;" name="dobmonth" id="dobmonth" class="forminputtextpad">
            <?php
         $month=["January","February","March","April","May","June","July","August","September","October","November","December"];
          foreach ($month as $count) {
              ?>
              <option value='<?php echo $count?>';
              <?php if($rowsearch['mdob'] == $count) echo "selected='selected'";?>>
      
              <?php echo $count; ?>
              </option>
              <?php
              }
    ?>
            </select>

              <select style="width: 139px;" name="dobday" id="dobday"  class="forminputtextpad">
                <?php
        $day=["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"];
        foreach ($day as $count) {
              ?>
              <option value='<?php echo $count?>';
              <?php if($rowsearch['daydob'] == $count) echo "selected='selected'";?>>
      
              <?php echo $count; ?>
              </option>
              <?php
              }
    ?>
        </select>
       </td>
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

<a onclick="add();" class="btn green small">
Save </a>


  </p>
</form>
</div>