<?php
   $errName = "";
   $name = "";
   $errUname = "";
   $pass = "";
   $cpass = "";
   $errMail = "";
   $mail = "";
   $phone = "";
   $address = "";
   $bDay = "";
   if (isset($_POST["register"])) {
   	  if (empty($_POST["name"])) {
        $errName = "Name required*";
   	  }
   	  else $name = htmlspecialchars($_POST["name"]);
   	  if (empty($_POST["username"])) {
   	  	$errUname = "Username required*";
   	  }
   	  else if (strlen($_POST["username"]) < 6) {
   	  	$errUname = "Username must be at least 6 characters";
   	  }
   	  if (strlen(strpos($_POST["username"], " ")) > 0) {
   	  	if (strlen($errUname) > 0) {
   	  	  $errUname .= " and space is not allowed in username";
   	  	}
   	  	else $errUname = "Space is not allowed in username";
   	  }
   	  if (empty($_POST["pass"])) {
   	  	$pass = "Password required*";
   	  }
   	  if (empty($_POST["cpass"])) {
   	  	$cpass = "Confirm password required*";
   	  }
   	  if (empty($_POST["email"])) {
   	  	$errMail = "Mail address required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
   	  	}
   	  	else $mail = htmlspecialchars($_POST["email"]);
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["address"])) {
   	  	$address = "Address required*";
   	  }
   	  if (empty($_POST["phone"]) || empty($_POST["code"])) {
   	  	$phone = "Phone number required*";
   	  }
   	  if (empty($_POST["address"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["zipCode"])) {
   	  	$address = "Each section of address should be filled*";
   	  }
   	  if (empty($_POST["day"])) {
   	  	$bDay = $bDay . "Day";
   	  }
   	  if (empty($_POST["month"])) {
   	  	if (strlen($bDay) > 1) {
   	  	  $bDay .= ", month";
   	  	}
   	  	else $bDay .= "Month";
   	  }
   	  if (empty($_POST["year"])) {
   	  	if (strlen($bDay) > 1) {
   	  	  $bDay .= " and year";
   	  	}
   	  	else $bDay = "Year";
   	  }
   	  if (strlen($bDay) > 1) {
   	  	if (strlen($bDay) <= 5) $bDay .= " is required*";
   	  	else $bDay .= " are required*";
   	  }
   }
?>
<html>
	<title>
		Register page
	</title>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend>
				<h1>
					Club Member Registration
				</h1>
			</legend>
				<table>
					<tr>
						<td align="right">
							Name:
						</td>
						<td>
							<input type="text" name="name">
							<span> 
                              <?php
                                echo $errName;
                              ?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Username:
						</td>
						<td>
							<input type="text" name="username">
							<span>
								<?php
                                  echo $errUname;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Password:
						</td>
						<td>
							<input type="Password" name="pass">
							<span>
								<?php
                                  echo $pass;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
						     Confirm Password:
						</td>
						<td>
							<input type="Password" name="cpass">
							<span>
								<?php
                                  echo $cpass;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Email:
						</td>
						<td>
							<input type="text" name="email">
							<span>
								<?php
                                  echo $errMail;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Phone:
						</td>
						<td>
							<input type="text" size="5" placeholder="Code" name="code"> - <input type="text" size="7" placeholder="Number" name = "phone">
							<span>
								<?php
                                  echo $phone;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Address:
						</td>
						<td>
							<input type="text" name="address" placeholder="Street Address">
							<span>
								<?php
                                  echo $address;
								?>
							</span>
						</td>
					</tr>
					<tr><td></td>
						<td>	
						   <input type="text" name="city" size="7" placeholder="City"> - <input type="text" name="state" size="5" placeholder="state">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" name="zipCode" placeholder="Postal/Zip Code">
						</td>
					</tr>
					<tr>
						<td align="right">
							Birth Date:
						</td>
						<td>
							<select name = "day">
								<option disabled="disabled" selected="selected"> Day </option>
								<?php
                                   for($i = 1; $i <= 31; $i++) {
                                   	 echo "<option>" . "$i" . "</option>";
                                   }
								?>
							</select>
							<select name="month">
								<option disabled="disabled" selected="selected"> Month </option>
								<?php
								$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobor", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
                                   	 echo "<option> $month[$i] </option>";
                                   }
								?>
							</select>
							<select name="year">
								<option disabled="disabled" selected="selected"> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option>" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
							<span>
								<?php
                                echo $bDay;
							    ?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Gender:
						</td>
						<td>
							<input type="radio" name="gender"> Male
							<input type="radio" name="gender"> Female
						</td>
					</tr>
					<tr>
						<td align="right">
							Where did you hear about us?
						</td>
						<td>
							<input type="checkbox" name="friend"> A Friend of Colleague<br>
							<input type="checkbox" name="friend"> Google <br>
							<input type="checkbox" name="friend"> Blog Post <br>
							<input type="checkbox" name="friend"> News Article <br>
						</td>
					</tr>
					<tr>
						<td align="right">
							Bio:
						</td>
						<td>
							<textarea cols="20" rows="3"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
		</fieldset>
	</form>
</html>