<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENNA'S LAB3 FORM</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>

<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if (empty($_REQUEST['name'])) 
    {
        $errors['name'] = "Name is required";
    }


    if (empty($_REQUEST['email'])) 
    {
        $errors['email'] = "Email is required";
    }


    if (empty($_REQUEST['gender'])) 
    {
        $errors['gender'] = "Gender is required";
    }


    if (empty($_REQUEST['courses'])) 
    {
        $errors['courses'] = "Courses are required";
    }

    if (empty($_REQUEST['agree'])) 
    {
        $errors['agree'] = "You must agree to proceed";
    }

    
    if (empty($errors)) 
    {
        $success = true;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php 
    echo isset($_REQUEST['name']) ? htmlspecialchars($_REQUEST['name']) : ''; ?>">
    <span class="error">*</span><?php echo isset($errors['name']) ? $errors['name'] : ''; ?><br>

    E-mail: <input type="text" name="email" value="<?php echo isset($_REQUEST['email']) ? htmlspecialchars($_REQUEST['email']) : ''; ?>">
    <span class="error">*</span><?php 
    echo isset($errors['email']) ? $errors['email'] : ''; ?><br>

    Group#: <input type="text" name="website" value="<?php 
    echo isset($_REQUEST['website']) ? htmlspecialchars($_REQUEST['website']) : ''; ?>"><br>

   Class Details: <textarea name="comment"><?php 
   echo isset($_REQUEST['comment']) ? htmlspecialchars($_REQUEST['comment']) : ''; ?></textarea><br>


    Gender:
    <input type="radio" name="gender" value="Female" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == 'Female') echo 'checked'; ?>>Female
    <input type="radio" name="gender" value="Male" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == 'Male') echo 'checked'; ?>>Male
    <span class="error"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></span><br>

    Courses:
    <select name="courses[]" multiple>
        <option value="PHP" <?php if(isset($_REQUEST['courses']) && in_array('PHP', $_REQUEST['courses'])) echo 'selected'; ?>>PHP</option>
        <option value="JavaScript" <?php if(isset($_REQUEST['courses']) && in_array('JavaScript', $_REQUEST['courses'])) echo 'selected'; ?>>JavaScript</option>
        <option value="MySQL" <?php if(isset($_REQUEST['courses']) && in_array('MySQL', $_REQUEST['courses'])) echo 'selected'; ?>>MySQL</option>
        <option value="HTML" <?php if(isset($_REQUEST['courses']) && in_array('HTML', $_REQUEST['courses'])) echo 'selected'; ?>>HTML</option>
    </select>
    <span class="error"><?php echo isset($errors['courses']) ? $errors['courses'] : ''; ?></span><br>

    <input type="checkbox" name="agree" <?php if(isset($_REQUEST['agree']) && $_REQUEST['agree'] == 'on') echo 'checked'; ?>> I agree
    <span class="error">*</span><?php echo isset($errors['agree']) ? $errors['agree'] : ''; ?><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($success) {
    echo "<h2>Your Input:</h2>";
    echo "Name: " . htmlspecialchars($_REQUEST['name']) . "<br>";
    echo "E-mail: " . htmlspecialchars($_REQUEST['email']) . "<br>";
    echo "Gender: " . (isset($_REQUEST['gender']) ? htmlspecialchars($_REQUEST['gender']) : '') . "<br>";
    echo "Courses: " . (isset($_REQUEST['courses']) ? implode(', ', $_REQUEST['courses']) : '') . "<br>";
    echo "Agree: " . (isset($_REQUEST['agree']) ? 'Yes' : 'No') . "<br>";
}
?>

</body>
</html>
