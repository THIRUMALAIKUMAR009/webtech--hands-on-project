<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

	<title>NLC Inidia Limited - Apprenticeship Trainee</title>
	<link rel="stylesheet" type="text/css" href="style1.css" />
	<script src="jquery/jquery.min.js" type="text/javascript" language="javascript"></script>
	<link rel="stylesheet" href="jquery-ui-1.10.0/themes/base/jquery.ui.all.css">
	<script src="jquery-ui-1.10.0/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui-1.10.0/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui-1.10.0/ui/jquery.ui.datepicker.js"></script>
	<script src="js/recgat1.js" language="javascript"></script>
	<script language="javascript">
		function gatedu(id) {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("education").innerHTML = xmlhttp.responseText;
				}
			}
			var postUrl;
			if (id == 'GAT') {
				postUrl = 'education.php?id=GAT';
			} else if (id == 'TAT') {
				postUrl = 'education.php?id=TAT';
			}else if(id === 'NON_ENGG'){
			  postUrl = 'optional_trade_edu.php';
		  }
			xmlhttp.open("POST", postUrl, true);
			xmlhttp.send();
		}

		function total_marks() {
			var s1 = 0;
			var s2 = 0;
			var s3 = 0;
			var s4 = 0;
			var s5 = 0;
			if (document.getElementById('tamil').value != '') {
				var s1 = document.getElementById('tamil').value;
			} else {
				var s1 = 0;
			}
			if (document.getElementById('english').value != '') {
				var s2 = document.getElementById('english').value;
			} else {
				var s2 = 0;
			}
			if (document.getElementById('Maths').value != '') {
				var s3 = document.getElementById('Maths').value;
			} else {
				var s3 = 0;
			}
			if (document.getElementById('Science').value != '') {
				var s4 = document.getElementById('Science').value;
			} else {
				var s4 = 0;
			}
			if (document.getElementById('SSc').value != '') {
				var s5 = document.getElementById('SSc').value;
			} else {
				var s5 = 0;
			}

			document.getElementById('marks_total').value = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) +
				parseInt(s5);
			document.form1.submit();

		}
	
    
  /*  $(function() {
    $("#awarddate").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '2011:2037',
        dateFormat: 'dd/mm/yy',
        minDate: 0,
        defaultDate: null
    }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
    });
});*/
    </script>
    
</head>

<body>
	<form name="gatreg" id="gatreg" method="post" action="register_status.php">
		<div id="page">

			<div id="header">
				<table width="90%" hspace="0">
					<tr>
						<td width="10%" height="72" align="right" valign="top"><img src="images/nlc-logo.jpg"
								alt="NLC Logo" height="67" width="70" /></td>
						<td width="90%" align="left" valign="bottom">
							<p>
								<font color="#000099" style="letter-spacing:2px; font-size:12px"><b>NLC India
										Limited</b></font> <br />
								<font color="#000099" style="letter-spacing:2px; font-size:10px">(formerly Neyveli
									Lignite Corporation Limited)<br />
									<font color="#000099" style="letter-spacing:2px; font-size:10px">('Navratna' - A
										Government of India Enterprise)<br />
									</font>
									<font color="#000099" style="letter-spacing:2px; font-size:11px"><b>LEARNING &
											DEVELOPMENT CENTRE</b><br />
										Block - 20, Neyveli-607801,
										Tamilnadu, India.</font>
							</p>
						</td>
					</tr>
				</table>`
			</div>



			<div id="mainarea">

				<div id="sidebar">
										<div class="sidebarheader">
						<font color="#800040">Already Registered ?</font>
					</div>
					<div>Click here to download <a href="loginValidation.php">
							<font color="blue"><b>Application Form</b></font>
						</a></div>
					<div class="sidebarheader">
						<font color="#800040">Downloads</font>
					</div>
					<div class="newsdate"><a href="download/Advt4-2024_Details.pdf" target="_blank">
							<font color="blue">ADVERTISEMENT / INSTRUCTIONS</font>
						</a></div>
                        <!--<div class="newsdate"><a href="download/LA-PAP-FORMAT.pdf" target="_blank"><font color="blue">PAPs LA DETAILS FORMAT</font></a></div>-->
					<div class="newsdate"><a href="download/GAT specimen format.pdf" target="_blank">
							<font color="blue">2) SPECIMEN FORMAT FOR ARRIVING - PERCENTAGE OF MARKS GAT</font>
						</a></div>
					<div class="newsdate"><a href="download/TAT specimen format.pdf" target="_blank">
							<font color="blue">3) SPECIMEN FORMAT FOR ARRIVING - PERCENTAGE OF MARKS TAT</font>
						</a></div>

					<div class="sidebarheader">
						<font color="#800040">Important Dates</font>
					</div>
					Online Registration starting Date & Time : <b>10.00 Hours of 09.12.2024</b><br />
					<br />

					Online Registration Closing Date & Time :
					<b>17.00 Hours of 23.12.2024</b>
					<br />
					<br />
					Last date for submission of Application :
					<b>17.00 Hours of 03.01.2025</b>
					<br>
					<br>
					<fieldset>
						<legend><span><b>
									<font color="#800040">Contact Details</font>
								</b></span></legend>
						<i>
							<font color="#000099"><strong>Email ID : apprenticeship@nlcindia.in<br>Phone No : 04142-213664 </strong><br>
								Open from 9.30 AM to 5.30 PM <br>
								on all working days</font>
						</i>
					</fieldset>
				</div>


				<div id="contentarea">
					
					<div align="center">
						<font color="#000099" style="letter-spacing:2px"><b>ONLINE REGISTRATION - APPRENTICESHIP TRAINING</b></font>
					</div>
					<br /><br>



						<!--<fieldset>
						<table width="100%" border="0" cellpadding="2" cellspacing="0">
							<tr>
								<td align="left">
									<font color="red">Registration Closed.....</font>
								</td>
							</tr>
							<tr>
								<td align="left">
									<font color="red">You can download your Application Form till 17.00 Hours of
										03.01.2025</font>
								</td>
							</tr>
							<tr>
								<td align="left">Click here to download <a href="loginValidation.php">
										<font color="blue"><b>Application Form</b></font>
									</a></td>
							</tr>
						</table>
					</fieldset>-->
					
					<div align="center">
						<table width="90%" cellpadding="2" cellspacing="0">
							<tr>
								<td colspan="2" align="left" valign="top"><b><i>
											<font color="#800040">*Note: </font>
										</i></b></td>
							</tr>
							<tr>
								<td width="10%" align="right" valign="top"><i>
										<font color="#800040">1.</font>
									</i></td>
								<td width="90%" align="left" valign="top"><i>
										<font color="#800040">All the fields marked * are mandatory </font>
									</i></td>
							</tr>
							<tr>
								<td width="10%" align="right" valign="top"><i>
										<font color="#800040">2.</font>
									</i></td>
								<td width="90%" align="left" valign="top"><i>
										<font color="#800040">Use Google Chrome / Mozila Firefox Browser</font>
									</i></td>
							</tr>
						</table>
					</div>
					<br />

					<fieldset>
						<legend><span><b>
									<font color="#800040">Training&nbsp;</font>
								</b></span></legend>
						<table width="100%" border="0" cellpadding="2" cellspacing="0">
							<tr>
								<td align="left" width="40%">Select Apprenticeship Training<font color="red">*</font>
								</td>
								<td align="left" width="60%">
									<select name="training" id="training" onChange="gatedu(this.value)">
										<option value="Select">Select</option>
										<option value="GAT">Graduate Apprenticeship Training</option>
										<option value="TAT">Technician Apprenticeship Training</option>
                                         <!--<option value="NON_ENGG">Non Engineering Graduates</option>
										 <option value="FRESHER">Fresher Apprenticeship Training</option>
			  <option value="EXITI">Ex-ITI Apprenticeship Training</option>
			  <option value="MLAT">Medical Lab Technician Apprenticeship Training</option> !-->
									</select></td>
							</tr>
						<!--	NOT REQUIRED  <tr>
			  <td align="left">Trade<font color="red">*</font></td>
			  <td align="left"><select name="trade" id="trade">
						  <option value="Select" selected="selected">Select</option>
						  <option value="Carpenter">Carpenter</option>
						  <option value="Electrician">Electrician</option>
						  <option value="Fitter">Fitter</option>
						  <option value="Mechanic Diesel">Mechanic Diesel</option>
						  <option value="Mechanic Motor Vehicle">Mechanic Motor Vehicle</option>
						  <option value="Mechanic Tractor">Mechanic Tractor</option>
						  <option value="Pasaa(Copa)">Pasaa(Copa)</option>
						  <option value="Plumber">Plumber</option>
						  <option value="Turner">Turner</option>
						  <option value="Welder">Welder</option>
						  <option value="Wireman">Wireman</option>
						</select>
			    </td>
			</tr> 
           -->
						</table>
					</fieldset>
					<br />


					<fieldset>
						<legend align="left"><span><b><img src="images/about.png" height="18" />
									<font color="#800040">Personal Information &nbsp;</font>
								</b></span></legend>
						<table width="100%" border="0" cellpadding="2" cellspacing="0">
							<tr>
								<td align="left" width="40%">Name<font color="red">*</font>
								</td>
								<td align="left" width="60%"><input type="text" id="candname" name="candname"></td>
							</tr>

							<!--<tr>
								<td align="left">NATS Portal Enrolment No <font color="red">*</font>
								</td>
								<td align="left"><input type="text" id="enrolno" name="enrolno" maxlength="16">
								</td>
							</tr>-->


							<tr>
								<td align="left">Aadhar No.<font color="red">*</font>
								</td>
								<td align="left"><input type="text" id="aadharno" name="aadharno" maxlength="12"
										onKeyPress="return number(event)"></td>
							</tr>


							<tr>
								<td align="left">Father's Name<font color="red">*</font>
								</td>
								<td align="left"><input type="text" id="fathername" name="fathername"></td>
							</tr>
							<tr>
								<td align="left">Mother's Name<font color="red">*</font>
								</td>
								<td align="left"><input type="text" id="mothername" name="mothername"></td>
							</tr>

							<tr>
								<td align="left">Gender<font color="red">*</font>
								</td>
								<td align="left"> &nbsp;<input name="rdbgender" type="radio" value="M" /> Male
									&nbsp;<input name="rdbgender" type="radio" value="F" /> Female
									<input type="hidden" id="rdbgen">

								</td>
							</tr>

							<tr>
								<td align="left">Date of Birth<font color="red">*</font>
								</td>
								<td align="left">
									<input name="bdate" type="text" id="bdate" readonly />
								</td>
							</tr>

							<tr>
								<td align="left">Community<font color="red">*</font>
								</td>
								<td align="left">&nbsp;<input name="rdbcomm" type="radio" value="UR"
										checked="checked" /> UR
									&nbsp;<input name="rdbcomm" type="radio" value="EWS" />EWS
									&nbsp; <input name="rdbcomm" type="radio" value="OBC" /> OBC
									&nbsp; <input name="rdbcomm" type="radio" value="SC" /> SC
									&nbsp;<input name="rdbcomm" type="radio" value="ST" /> ST

								</td>
							</tr>

							<tr>
								<td align="left">Are you a Physically Disabled Person ?<font color="red">*</font>
								</td>
								<td align="left"> &nbsp;<input name="rdbpwd" type="radio" value="Y" /> Yes
									&nbsp;<input name="rdbpwd" type="radio" value="N" checked="checked" /> No

								</td>
							</tr>

							<tr>
								<td align="left">Are you a ward of Ex-Servicemen ?<font color="red">*</font>
								</td>
								<td align="left">&nbsp;<input name="rdbWard" type="radio" value="Y" /> Yes
									&nbsp;<input name="rdbWard" type="radio" value="N" checked="checked" /> No
								</td>
							</tr>
						</table>
					</fieldset>
					<!--<br />
                    
                         <fieldset>
		<legend align="left"><span><b><img src="images/about.png" height="18" /><font color="#800040">PAP's Information &nbsp;</font></b></span></legend>
		 <table width="100%" border="0" cellpadding="2" cellspacing="0">
		
		  <tr>
			<td align="left" width="40%">Awardee Name<font color="red">*</font></td>
			<td align="left" width="60%"><input type="text" id="awardeename" name="awardeename"></td>
		  </tr>
          
           <tr>
			<td align="left">Awardee Relationship<font color="red">*</font> </td>
			<td align="left"> 
            	<select name="awardeerels" id="awardeerels" >
                    <option value="Select">Select</option>
                    <option value="SELF">Self</option>
                    <option value="SPOUSE">Spouse</option>
                    <option value="SON">Son</option>
                    <option value="DAUGHTER">Daughter</option>
                    <option value="GRAND SON">Grand son</option>
                    <option value="GRAND DAUGHTER">Grand Daughter</option>
                    <option value="SON IN LAW">Son in law</option>
                    <option value="DAUGHTER IN LAW">Daughter in law</option>
                </select></td>
		  </tr>
                  
		  <tr>
			<td align="left">Village Name<font color="red">*</font> </td>
			<td align="left"><input type="text" id="villagename" name="villagename"></td>
		  </tr>
          
           <tr>
			<td align="left">Survey No<font color="red">*</font> </td>
			<td align="left"><input type="text" id="surveyno" name="surveyno" ></td>
		  </tr>
		  
            <tr>
			<td align="left">Award date<font color="red">*</font> </td>
			<td align="left">
			<input name="awarddate" type="text" id="awarddate" readonly />
			</td>
		  </tr>
		  
		 
		  </table>  
		  </fieldset>-->

					<div id="education">&nbsp;</div>

					<!-- EDUCATION DETAILS -->
					<br />

			<fieldset>
						<legend align="left"><span><b><img src="images/home.png" height="18" />
									<font color="#800040">Contact Details &nbsp;</font><img src="images/cont.png"
										height="18" /> &nbsp;
								</b></span></legend>
						<table width="100%" border="0" cellpadding="2" cellspacing="0">
							<tr>
								<td align="left" valign="top" width="40%">Correpondence Address</td>
								<td align="left" width="60%">
									<table width="100%" border="0" cellpadding="2" cellspacing="0">
										<tr>
											<td align="left" width="25%">House/plot No<font color="red">*</font>
											</td>
											<td align="left" width="75%"><input type="text" name="doorno" id="doorno" />
											</td>
										</tr>
										<tr>
											<td align="left">Street Name<font color="red">*</font>
											</td>
											<td align="left"><input type="text" name="streetname" id="streetname" />
											</td>
										</tr>
										<tr>
											<td align="left">Area/Locality</td>
											<td align="left"><input type="text" name="area" id="area" /></td>
										</tr>
										<tr>
											<td align="left">Village/Town/City</td>
											<td align="left"><input type="text" name="city" id="city" /></td>
										</tr>
										<tr>
											<td align="left">Taluk</td>
											<td align="left"><input type="text" name="taluk" id="taluk" /></td>
										</tr>
										<tr>
											<td align="left">District<font color="red">*</font>
											</td>
											<td align="left"><input type="text" name="dis" id="dis" /></td>
										</tr>
										<tr>
											<td align="left">State<font color="red">*</font>
											</td>
											<td align="left">
												<select name="state" id="state">
													<option value="Select">Select</option>
														<option value="PUDUCHERRY">PUDUCHERRY</option>
														<option value="TAMILNADU">TAMILNADU</option>
														<option value="TELANGANA">TELANGANA</option>
														<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
														<option value="KERALA">KERALA</option>
														<option value="KARNATAKA">KARNATAKA</option>
														<option value="LAKSHADWEEP">LAKSHADWEEP</option>														
                                                    </select>



											</td>
										</tr>
										<tr>
											<td align="left">Pin Code<font color="red">*</font>
											</td>
											<td align="left"><input type="text" name="pincode" id="pincode"
													maxlength="6" onKeyPress="return number(event)" /></td>
										</tr>
									</table>


							<tr>
								<td align="left">Phone Number<font color="red">*</font>
								</td>
								<td align="left"><input type="text" name="phone" id="phone" maxlength="10"
										onKeyPress="return number(event)" /></td>
							</tr>

							<tr>
								<td align="left">E-Mail ID<font color="red">*</font>
								</td>
								<td align="left"><input type="text" name="email" id="email" /></td>
							</tr>
							
							<tr>
								<td align="left">Mobile Number Linked with Aadhar Card<font color="red">*</font> </td>
								<td align="left"><input type="text" name="aadarphone" id="aadarphone" maxlength="10" onKeyPress="return number(event)" /></td>
							</tr>
							
							<tr>
								<td align="left">Emergency Contact Person name<font color="red">*</font> </td>
								<td align="left"><input type="text" name="emrgpersname" id="emrgpersname" maxlength="35"  /></td>
							</tr>
							<tr>
								<td align="left">Relationship<font color="red">*</font> </td>
								<td align="left">
									<select name="emrgrelation" id="emrgrelation" >
									<option value="Select">Select</option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Brother">Brother</option>
									<option value="Sister">Sister</option>
									<option value="Spouse">Spouse</option>
									<option value="Grandfather">Grandfather</option>
									<option value="Grandmother">Grandmother</option>
									<option value="Guardian">Guardian</option>
									</select>
								</td> 					
							</tr>
							<tr>
								<td align="left">Emergency Contact Mobile Number<font color="red">*</font> </td>
								<td align="left"><input type="text" name="emrgphone" id="emrgphone" maxlength="10" onKeyPress="return number(event)" /></td>
							</tr>
		  
						 </table>
		  </fieldset> 
	   <br />
	   <div id="education">&nbsp;</div>
	   
	   <fieldset>
						<legend align="left"><span><b><img src="images/key.png" height="18" /><font color="#800040">Enter Captcha &nbsp;</b></span></legend>
						<table width="100%" border="0" cellpadding="2" cellspacing="0">
							<tr><td style="height:100%"><center><div id="cap" style="background-image:url('images/captcha.jpg'); font-face:Arial; color:#000000; margin-top:5%; width:40%; height align:center"><center><h1 style="color:#000000">8243<input type="hidden" name="capans" id="capans" value="8243"></h1></center> </div></center></td></tr>
							<tr  align="center"><td ><center><input type="text"   name="captcha" placeholder="Enter Captcha" id="captcha"/></center></td></tr>
						</table>
					</fieldset>
     			
	   <div align="right">
    <input type="submit" id="submit" class="submit" name="submit" value="Submit"/>
   
       </div>	  
	  	  
	</div>	
</div>  	


				</div>
			</div>
					</div>
		</div>
	 </form>
    
</body>

</html>