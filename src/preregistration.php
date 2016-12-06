<?php
require_once("a-connection.php");
require_once("header.php");

konekServer::abriDB();
?>
		<h1>StuFAP Pre-Registration</h1>
		
		
		<form method="post" id="customForm" action="preRegistrationValidation.php" onSubmit="return checkform()">
			<div>
				<label for="PREREG_FIRSTNAMEnameInfo">First Name</label>
				<input id="PREREG_FIRSTNAME" name="PREREG_FIRSTNAME" type="text" style="text-transform:uppercase; width:300px;"  onKeyPress='return lettersonly(event, false)'>
				<span id="PREREG_FIRSTNAMEnameInfo"></span>
			</div>
            <div>
				<label for="PREREG_LASTNAME">Last Name</label>
				<input id="PREREG_LASTNAME" name="PREREG_LASTNAME" type="text" style="text-transform:uppercase; width:300px;"  onKeyPress='return nameChars(event, false)'>
				<span id="PREREG_LASTNAMEnameInfo"></span>
			</div>
            <div>
				<label for="PREREG_MIDNAME">Middle Name</label>
				<input id="PREREG_MIDNAME" name="PREREG_MIDNAME" type="text" style="text-transform:uppercase; width:300px;"  onKeyPress='return nameChars(event, false)'>
				<span id="PREREG_MIDNAMEnameInfo"></span>
			</div>
            <div>
				<label for="PREREG_BDAY">Birthday</label>
                   
			<script>DateInput('PREREG_BDAY', true, 'YYYY-MM-DD')</script>

                <span id="PREREG_BDAYnameInfo"></span>
			</div>
            <div>
				<label for="PREREG_GWA">GWA</label>
				<input id="PREREG_GWA" name="PREREG_GWA" type="text" style="text-transform:uppercase; width:50px;" maxlength="5" onKeyPress='return numbersonly(event, false)'>
				<span id="PREREG_GWAnameInfo"></span>
			</div>
           <div>
				<label for="PREREG_NCAE">NCAE SCORE</label>
				<input id="PREREG_NCAE" name="PREREG_NCAE" type="text" style="text-transform:uppercase; width:50px;" maxlength="5"  onKeyPress='return numbersonly(event, false)'>
				<span id="PREREG_NCAEnameInfo"></span>
			</div>
            <div>
				<label for="PREREG_AITR">Parents/Guardian Annual Income Tax Return</label>
				<input id="PREREG_AITR" name="PREREG_AITR" type="text" style="text-transform:uppercase" maxlength="8" onKeyPress='return numbersonly(event, false)'>
				<span id="PREREG_AITRnameInfo"></span>
			</div>

            <div>
				<label for="PREREG_Q1">Are you an entering Freshmen?</label>
                <input type='radio' name='PREREG_Q1' id='PREREG_Q1' value='1'  />YES<br />
				<input type='radio' name='PREREG_Q1'  id='PREREG_Q1' value='2' />NO, already in College.
				<span id="PREREG_Q1nameInfo"></span>
			</div>
            <div>
				<label for="PREREG_Q2">Have you availed any other governement Scholarship/Grants (DOST, etc)?</label>
                <input type='radio' name='PREREG_Q2'  id='PREREG_Q2' value='1' />YES<br />
				<input type='radio' name='PREREG_Q2'  id='PREREG_Q2' value='2' />NO
				<span id="PREREG_Q2nameInfo"></span>
			</div>
            <div>
				<label for="PREREG_Q3">Are you a Filipino citizen with Good Moral Character?</label>
                <input type='radio' name='PREREG_Q3' value='1'  id='PREREG_Q3'  />YES<br />
				<input type='radio' name='PREREG_Q3' value='2'   id='PREREG_Q3' />NO
				<span id="PREREG_Q3nameInfo"></span>
			</div>
			<div>
				<label for="email">E-mail</label>
				<input id="email" name="PREREG_EMAILADD" type="text">
				<span id="emailInfo">Valid E-mail please, you will need it to log in!</span>
			</div>

			<div>
				<label for="PREREG_CONTACT">Contact Number </label>
				<input id="PREREG_CONTACT" name="PREREG_CONTACT" type="text">
				<span id="PREREG_CONTACTnameinfo">Preferrably cellphone number!</span>
			</div>
			<div id='btnsend'>
			</div>
            
            <input id='send' name='send' value='Send' type='submit'>
		</form>
	</div>
	<script type="text/javascript" src="yensdesign.com%20-%20Validate%20Forms%20using%20PHP%20and%20jQuery_files/jquery.js"></script>
	<script type="text/javascript" src="yensdesign.com%20-%20Validate%20Forms%20using%20PHP%20and%20jQuery_files/validation.js"></script>

<?php

require_once("footer.php");
?>