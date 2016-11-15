<html>
	<head>
		<div class="header">
		<h1><i><center>
		Le Personal Webpage
		</center></i></h1>
		</div>
		<link href="webpagestyle.css" type="text/css" rel="stylesheet" />
		
		<style>
			table, th, td {
				border: 1px solid blue;
				color: white;
				width: 75%;
			}

			body{
				background-image: url("background.jpg");
				color: #66a3ff;
			}

			.header, .footer{
				background-color: #1a75ff;
				color: #f9f9f9;
				padding: 10px;
			}
		</style>
			</head>
	
	
		<body><center>
			<table>
			<tr>
				<th>Field</th>
				<th>Information</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>Gabriel Angelo Agito Ngceen</td>
			</tr>
			<tr>
				<td>Nickname:</td>
				<td>Gabby/Gab</td>
			</tr>
			<tr>
				<td>Birthdate:</td>
				<td>January 1, 2000</td>
			</tr>
			<tr>
				<td>Age:</td>
				<td>16</td>
			</tr>
			<tr>
				<td>Course:</td>
				<td>BS Information Technology, Specializing in mobile and internet technology</td>
			</tr>
			</table>
			<p><center>
			<br>Favorite websites as pastime:
			<br><a href= "https://www.youtube.com"><img border="0" alt="Youtube" src="youtube.jpg" width=100 height=100></a>
			<a href= "https://www.facebook.com"><img border="0" alt="Facebook" src="facebook.jpg" width=100 height=100></a>
			<a href= "https://www.twitter.com"><img border="0" alt="Twitter" src="twitter.jpg" width=100 height=100></a>
			</p>

			<p>
			<br>Favorite games:
			<br><a href= "https://lol.garena.ph/"><img border="0" alt="League of Legends" src="lol.jpg" width=100 height=100></a>
			<a href= "http://store.steampowered.com/app/316010/"><img border="0" alt="Magic:The Gathering" src="MTG.jpg" 

width=100 height=100></a>
			<a href= "https://minecraft.net/en/"><img border="0" alt="Minecraft" src="minecraft.jpg" width=100 height=100></a>
			</p>
			</center>
			
			<h2> Trivia! </h2>

			<p>
				1. My most common gaming username:
			</p>

			<p id="q1">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q1').innerHTML = 'NZAAXD or VoidDoubleA'">Click to see answer</button>

			<p>
				2. My favorite subject:
			</p>

			<p id="q2">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q2').innerHTML = 'Anything that has Math'">Click to see answer</button>

			<p>
				3. How long have I been playing Magic?
			</p>

			<p id="q3">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q3').innerHTML = 'Started on September 2016'">Click to see answer</button>

			<p>
				4. What else do you do in your free time?
			</p>

			<p id="q4">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q4').innerHTML = 'Play on my PS3, or play basketball with friends.'">Click to see answer</button>

			<p>
				5. Where do you go to buy magic cards?
			</p>

			<p id="q5">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q5').innerHTML = 'Hobby shops in taft or SM Megamall, or in Neutral grounds.'">Click to see answer</button>
			</center>
			</body>
			<?php
// define variables and set to empty values
$nameErr = $emailErr = $NicknameErr = $genderErr = $cellnumErr = "";
$full_name = $email = $nickname = $gender = $address = $cp_num = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $full_name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$full_name)) {
      $nameErr = "Only letters, white space and numbers are allowed"; 
    }
  }
  
  if (empty($_POST["Nickname"])) {
    $NicknameErr = "Name is required";
  } else {
    $nickname = test_input($_POST["Nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $NicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["cellnum"])) {
    $cellnumErr = "Cell phone number is required";
  } else {
    $cp_num = test_input($_POST["cellnum"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$cp_num)) {
      $cellnumErr = "Only numbers are allowed"; 
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		?>
	
		<h1>User Information</h1>
		<br>
		<img border="0" alt="Feedback" src="Feedback.png" width=250 height=100>
		<br>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
		Nickname: <input type="text" name="Nickname">
  <span class="error">* <?php echo $NicknameErr;?></span>
  <br><br>
		E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
		Home address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
		Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
		Cell phone number: <input type="text" name="cellnum">
  <span class="error">* <?php echo $cellnumErr;?></span>
  <br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
		<input type="submit" name="submit" value="Submit">  
		</form>
		
		<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
	{
	// sql query for inserting data into database
 
        $sql_query = "INSERT INTO userinfo(Name,Nickname,Email,Home_address,Gender,Cp_Num,Comment) 
		VALUES('$full_name','$nickname','$email','$address','$gender','$cp_num','$comment')";
	mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
		
    <table align="center">
    <th>Full Name</th>
    <th>Nickname</th>
    <th>Email</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Cellphone number</th>
	<th>Comments</th>
    <th colspan="2">Operations</th>
    </tr>

	<?php
 $sql_query="SELECT * FROM userinfo";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
		
	<?php
 }
 ?>
			</div>