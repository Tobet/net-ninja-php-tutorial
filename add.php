<?php

$title = $email = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

// post method is more secure because the data is not showed in url
if (isset($_POST['submit'])) {
//    echo htmlspecialchars($_POST['email']); // htmlspecial chars protects from xss attacks
//    echo htmlspecialchars($_POST['title']);
//    echo htmlspecialchars($_POST['ingredients']);

    // check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // built in mail filter check
            $errors['email'] = 'Email must be a valid email address <br />';
        }
    }

    // check title
    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only <br />';
        }
    }

    // check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma separated list <br />';
        }
    }

    if (array_filter($errors)) {
        echo 'errors in the form';
    } else {
        header('Location: index.php');
    }
} // end of post check

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

    <form class="white" action="add.php" method="POST">

        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input class="btn brand z-depth-0"
                   type="submit"
                   name="submit"
                   value="submit">
        </div>

    </form>

</section>

<?php include('templates/footer.php'); ?>

</html>
