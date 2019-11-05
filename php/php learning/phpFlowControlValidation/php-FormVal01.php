<?php
#Use a PHP form to collect Title, First Name, Surname,
#Email, Preferred Colour, Size and Number of T-shirts
#ordered.(EXAMPLE 4)Add an image of a T-shirt to the
#page as a banner image. note for a more elegant email
#validation you will have to set the pattern-but
#Boolean is sufficient for this example.Save as
#PHP-formVal01.php

$title = $fName = $sName = $email = $colour = $size = $num = "";
$titleErr = $fNameErr = $sNameErr = $emailErr = $colourErr = $sizeErr = $numErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if($_POST["Title"] == "---"){
        $titleErr = " Please select a title. ";
    } else{
        $title = $_POST["Title"];
    }

    if ($_POST["First name"] == ""){
        $fNameErr = "  First Name Required.  ";
    } else{
        $fName = $_POST["First Name"];

    }

    if ($_POST["Surname"] == ""){
        $sNameErr = " Surname Required. ";
    } else{
        $sName = $_POST["Surname"];

    }

    if ($_POST["Email"] == ""){
        $emailErr = " Email Required. ";
    } else{
        $email = $_POST["Email"];
        
    }

    if ($_POST["Colour"] == ""){
        $colourErr = " What colour would you like? ";
    } else{
        $colour = $_POST["Colour"];

    }

    if($_POST["Size"] == "---"){
        $sizeErr = " Please select a shirt size. ";
    } else{
        $size = $_POST["Size"];
    }

    if($_POST["Number"] == "---"){
        $numErr = " Please select a shirt size. ";
    } else{
        $num = $_POST["Number"];
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
<!---  Title Drop down box  --->
<p> 
<select name='title'>
<option>---</option>
<option> Mr</option>
<option> Dr</option>
<option> Mrs</option>
<option> Ms</option>
<option> Prof</option>
</select><span class="error"> * <?php echo $titleErr;?></span></p>

<br>


First Name: <input type="text" name="First Name" value="<?php echo $fName;?>">
<span class="error"> * <?php echo $fNameErr;?></span><br>

Surname: <input type="text" name="Surname" value="<?php echo $sName;?>">
<span class="error"> * <?php echo $sNameErr;?></span><br>

E-mail: <input type="text" name="Email" value="<?php echo $email;?>">
<span class="error"> * <?php echo $emailErr;?></span><br>

Colour: <input type="text" name="Colour" value="<?php echo $website;?>">
<span class="error"> * <?php echo $colourErr;?></span><br>

Size: 
<!---  Size Drop down box  --->
<p> 
<select name='Size'>
<option>---</option>
<option>XXS</option>
<option>XS</option>
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>
<option>XXL</option>
</select><span class="error"> * <?php echo $sizeErr;?></span></p>
<br>

Number: 
<!---  Number Drop down box  --->
<p> 
<select name='Number'>
<option>---</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select><span class="error"> * <?php echo $numErr;?></span></p><br>

<input type = 'Submit' name='Submit' value='Submit'/>
</form>

</html>