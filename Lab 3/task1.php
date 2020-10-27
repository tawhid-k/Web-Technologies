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
						</td>
					</tr>
					<tr>
						<td align="right">
							Username:
						</td>
						<td>
							<input type="text" name="username">
						</td>
					</tr>
					<tr>
						<td align="right">
							Password:
						</td>
						<td>
							<input type="Password" name="pass">
						</td>
					</tr>
					<tr>
						<td align="right">
						     Confirm Password:
						</td>
						<td>
							<input type="Password" name="upass">
						</td>
					</tr>
					<tr>
						<td align="right">
							Email:
						</td>
						<td>
							<input type="text" name="email">
						</td>
					</tr>
					<tr>
						<td align="right">
							Phone:
						</td>
						<td>
							<input type="text" size="5" placeholder="Code"> - <input type="text" size="7" placeholder="Number">
						</td>
					</tr>
					<tr>
						<td align="right">
							Address:
						</td>
						<td>
							<input type="text" name="address" placeholder="Street Address">
						</td>
					</tr>
					<tr><td></td>
						<td>	
						   <input type="text" name="city" size="7" placeholder="City"> - <input type="text" name="state" size="5" place>
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
							<select>
								<option disabled="disabled" selected="selected"> Day </option>
								<?php
                                   for($i = 1; $i <= 31; $i++) {
                                   	 echo "<option>" . "$i" . "</option>";
                                   }
								?>
							</select>
							<select>
								<option disabled="disabled" selected="selected"> Month </option>
								<?php
								$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobor", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
                                   	 echo "<option> $month[$i] </option>";
                                   }
								?>
							</select>
							<select>
								<option disabled="disabled" selected="selected"> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option>" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
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
							<input type="submit" name="submit" value="register">
						</td>
					</tr>
				</table>
		</fieldset>
	</form>
</html>