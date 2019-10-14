<?php

// distinguish between page load and data sent
// the code inside this block will not run if we come on the page
// only if we submit
//if (isset($_GET['submit'])) {
//
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['ingredients'];
//}

// post method is more secure because the data is not showed in url
if (isset($_POST['submit'])) {

    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

    <form class="white" action="add.php " method="POST">

        <label>Your Email:</label>
        <input type="text" name="email">

        <label>Pizza Title:</label>
        <input type="text" name="title">

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">

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
