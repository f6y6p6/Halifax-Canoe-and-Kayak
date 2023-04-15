<?php
include('header.php');

//unset session variables
$_SESSION = array();

//check if logout is valid
if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
// Destroy session
    session_destroy();
} 
?>

<main>
    <div class="form-wrap">
        <h3>Are you sure you want to log out?</h3>
        <br>
            <?php
                echo "<button class='select-button'><a href='index.php'>Yes, bye-bye!</a></button>";
                echo "<button class='select-button'><a href='index.php'>No, I'm staying.</a></button>";
            ?>
    </div>
</main>

<?php
include('footer.php');
?>