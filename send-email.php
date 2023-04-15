<?php
// include header
include('header.php');
?>

<!-- main content -->
<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">
        <?php
            if ($_POST['emailType'] == 'newAccount') {
            echo 'New account has been successfully created.';
            } elseif ($_POST['emailType'] == 'lostPassword') {
            echo 'Check your inbox for the link to reset your password.';
            }
        ?>
    </div>
</main>

<?php
// include footer
include('footer.php');
?>