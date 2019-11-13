<!-- Christopher van Herwynen  --->
<?php

$name = $email = $url = "";
$nameErr = $emailErr = $urlErr = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and whitespace allowed.";
    }

    $email = test_input($_POST["Email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    $url = test_input($_POST["URL"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $urlErr = "Invalid URL";
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>

<html>
<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>

Name: <input type="text" name="Name" value="<?php echo $name;?>">
<span class="error"> * <?php echo $nameErr;?></span><br>

Email: <input type="text" name="Email" value="<?php echo $email;?>">
<span class="error"> * <?php echo $emailErr;?></span><br>

URL: <input type="text" name="URL" value="<?php echo $url;?>">
<span class="error"> * <?php echo $urlErr;?></span><br>


<input type = 'submit' name='submit' value='submit'/>
</form>

</html>