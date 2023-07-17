
<html>
<body>
    <?php
#<!-- Declaring variables -->

$name <input type="text" name="name"><br>
$lastname <input type="text" name="name"><br>
$id <input type="text" name="name"><br>
$studentnum <input type="text" name="name"><br>
$cellno <input type="text" name="name"><br>
$Email: <input type="text" name="email"><br>

<!-- radio group -->
<input type="radio" name="male" value="0">Female
<input type="radio" name="female" value="1">Male

function determineGenderFromID($id) {
    // Extract the relevant digits from the ID number
    $genderDigits = substr($idNumber, -2, 1);

    // Check if the extracted digits indicate male or female
    if ($genderDigits % 2 === 0) {
        return 'Female';
    } else {
        return 'Male';
    }
}
#<!--$name = $lastname = $id = $studentnum = $cellno = $Email = "";-->



<!-- <input type="Confirm "> -->

</form>
>?
</body>
</html>