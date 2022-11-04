<?php
function admin_fill_form($Reg_Id) {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "learn_and_help_db";
  $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection === false) {
    die("Failed to connect to database: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM registrations WHERE Reg_Id = '$Reg_Id'";
  $row = mysqli_fetch_array(mysqli_query($connection, $sql));

  $db_id = $row[0];
  $sponsor_name = $row[1];
  $sponsor_email = $row[2];
  $sponsor_phone = $row[3];
  $spouse_name = $row[4];
  $spouse_email = $row[5];
  $spouse_phone = $row[6];
  $student_name = $row[7];
  $student_email = $row[8];
  $student_phone = $row[9];
  $class = $row[10];
  $cause = $row[11];

  echo "<div id= \"container_2\">
    <form id=\"survey-form\" action=\"form-submit.php\" method = \"post\">
      <!---Sponsors Section -->
      <label id=\"name-label\">Sponsor's Name</label>
      <input type=\"text\" id=\"sponsers-name\" name=\"sponsers-name\" class=\"form\" value=\"$sponsor_name\" required><br><!--name--->
      <label id=\"sponsers-email-label\"> Sponsor's Email</label>
      <input type=\"email\" id=\"sponsers-email\" name=\"sponsers-email\" class=\"form\" value=\"$sponsor_email\" required><br><!---email-->
      <label id=\"sponsors-number-label\">Sponsor's Phone Number</label>
      <input type=\"tel\" id=\"sponsers-phone\" name=\"sponsers-phone\" value=\"$sponsor_phone\" required>

      <br>
      <!---Spouse Section -->
      <label id=\"spouses-name-label\">Spouse's Name</label>
      <input type=\"text\" id=\"spouses-name\" name=\"spouses-name\" class=\"form\" value=\"$spouse_name\" required><br>
      <label id=\"spouses-email-label\"> Spouse's Email</label>
      <input type=\"email\" id=\"spouses-email\" name=\"spouses-email\" class=\"form\" value=\"$spouse_email\" required ><br>
      <label id=\"spouses-number-label\">Spouse's Phone Number</label>
      <input type=\"tel\" id=\"spouses-phone\" name=\"spouses-phone\" value=\"$spouse_phone\" required>

      <br>
      </div>
      <div id=\"right\">
      <!---Student Section -->
      <label id=\"students-name-label\">Student's Name</label>
      <input type=\"text\" id=\"students-name\" name=\"students-name\" class=\"form\" required value=\"$student_name\"><br>
      <label id=\"students-email-label\"> Student's Email</label>
      <input type=\"email\" id=\"students-email\" name=\"students-email\" class=\"form\" required value=\"$student_email\"><br
      <label id=\"students-number-label\">Student's Phone Number</label>
      <input type=\"tel\" id=\"students-phone\" name=\"students-phone\" value=\"$student_phone\" required>

      <br>
      <label id=\"class\">Select Class</label>
      <select id=\"dropdown\" name=\"role\" required>
        <option disabled value>
          Select your class
        </option>
        <option value=\"py1\" ";
          if ($class == "Python 101")
              echo "selected";
      echo  ">
          Python 101
        </option>
        <option value=\"java1\" ";
        if ($class == "Java 101")
            echo "selected";
      echo ">
          Java 101
        </option>
        <option value=\"py2\" ";
        if ($class == "Python 201")
            echo "selected";
      echo ">
          Python 201
        </option>
	  <option value=\"java2\" ";
        if ($class == "Java 201")
            echo "selected";
      echo ">
		Java 201
	  </option>
	</select>
	<!--dropdown--->
	<p><strong>Cause</strong></p>
	<label>
	  <input type=\"radio\" name=\"cause\" value=\"lib\" ";
        if ($cause == "Library")
            echo "checked=\"checked\"";
      echo ">Library
	</label>
	<br>
	<label>
	  <input type=\"radio\" name=\"cause\" value=\"Dig_class\" ";
        if ($cause == "Digital Classroom")
            echo "checked=\"checked\"";
      echo ">Digital Classroom</label>
	<label>
	  <br>
	  <input type=\"radio\" name=\"cause\" value=\"Other\" ";
        if ($cause == "No Preference")
            echo "checked=\"checked\"";
      echo "> No Preference
	</label><!---radioButtons--->
  <input type='hidden' name='Reg_Id' value='". $Reg_Id . "'/>
  </div>
  ";
}
?>