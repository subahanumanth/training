<?php
require("phpfile.php");
?>

<html>
<form  method="POST" name="validate" onsubmit="return validateForm()">
Name : <input id="name" type="text" name="name" required><?php echo sprintf("%s",$nameError); ?><br><br>
Age : <input id="age" type = "text" name="age" required><?php echo sprintf("%s",$ageError);  ?><br><br>
Gender : <?php echo sprintf("%s",$genderError);  ?><input type="radio" name="gender" value = "Male">Male
<input type="radio" name="gender" value = "Female" required>Female<br><br>
City : <select name="city" required><?php echo sprintf("%s",$cityError);  ?>
<option value = "Virudhunagar">Virudhunagar</option>
<option value = "Madurai">Madurai</option>
<option value = "Coimbatore">Coimbatore</option>
</select><br><br>
Flavours :<?php echo sprintf("%s",$flavourError);  ?> <br><br><input type="checkbox" name="flavour[]" value= " Strawberry">Strawberry<br>
<input type="checkbox" name="flavour[]" value= "Butterscotch">Butterscotch<br>
<input type="checkbox" name="flavour[]" value= "Black Current">Black Current<br><br>
Email ID : <input id="email" type="email" name="email" required><?php echo sprintf("%s",$emailError);  ?><br><br>
<input type="submit" name="submit">

<form>

<script src="form.js"></script>

</html>
