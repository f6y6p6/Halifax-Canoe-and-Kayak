<?php
// include header
include('header.php');
?>

<!-- main content -->
<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">
        <div class="form-wrap">
            <h1>Create New Account</h1>
            <form action="send-email.php" method="post">
                <input type="hidden" name="emailTyope" value="newAccount">
                <input type="email" name="email" placeholder="please provide email" required>
                <input type="submit" name="submit" value="Submit" class="submiot-button">
            </form>
        </div>
    </div>
</main>

<?php
// include footer
include('footer.php');
?>