<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSignment daw shees</title>
</head>
<body>
    
<?php 
    
    echo '<input type ="text" name="username">';
    echo '<input type="submit" value="Submit">';
    $grade1 = 92;
    $grade2 = 90;
    $grade3 = 89;
    $grade4 = 91;
    $grade5 = 87;

    echo "Your final grade is ". ($grade1 + $grade2 + $grade3 + $grade4 + $grade5) / 5;

?>
    

</body>
</html>