<?php
// include header
include('header.php');
?>

<!-- main content -->
<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">
        <div class="form-wrap">
            <h1>Forgotten Your Password?</h1>
            <hr>
            <form action="send-email.php" method="post">
                <p>Please enter your email address and we'll send you a link to reset your password.</p>
                <input type="hidden" name="emailType" value="lostPassword">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="submit" name="submit" value="Submit" class="submit-button">
            </form>
        </div>
    </div>
</main>

<?php
// include footer
include('footer.php');
?>