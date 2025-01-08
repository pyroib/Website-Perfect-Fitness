<?PHP
include("sitehead.php");
include("menus.php");
?>
			<div  class="main_text">
				<div class="form">
					<br />
					<br />
					<form method="post" id="signup" action="#">
						<fieldset>
							<label for="contact_name">Name</label><input id="contact_name" type="text" size="40" maxlength="40" /><br />
							<label for="email">Email Address</label><input id="email" type="text" size="40" maxlength="50" /><br />
							<label for="how">How did you hear about perfect Fitness</label>
								<select id="how">
									<option value="Rec. by a F.Centre">Recomended by a friend</option>
									<option value="Internet Search">Internet Search Engine (google etc)</option>
									<option value="Magazine">Magazine add</option>
									<option value="Affiliate link">Affiliate Link</option>
									<option value="Other">Other</option>
								</select>
							<label for="enquiry">Enquiry</label><textarea id="enquiry" cols="30" rows="10"></textarea><br />
							<input name="Submit" type="submit" value="Submit" onclick="alert('Function Disabled');" />
						</fieldset>
					</form>
				</div>	
			</div>
<?PHP
include("footer.php");
?>
