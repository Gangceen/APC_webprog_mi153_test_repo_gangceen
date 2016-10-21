<html>

	<head>
		<h1><i><center><font color = #1a75ff>Le Personal Webpage</font></center></i></h1>
	<style>
		table, th, td {
			border: 1px solid blue;
			color: #66a3ff;
			width: 50%;
		}

		body{
			background-image: url("background.jpg");
			color: #66a3ff;
		}
		
		.error {
			color: #FF0000;
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
			
			<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
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
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

		</body>

</html>
