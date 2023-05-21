<?php
include('header.php');
?>

<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">

        <!-- Welcome message -->

        <h1>Welcome <?php echo $_SESSION['username'] . "! Add Adventure"; ?></h1>
        <br>
        <h4>Please provide details of the trip</h4>

        <!-- Form with 4 fields -->

        <div class="form-wrap">
            <form action="admin-confirm.php" method="POST">
                <label class="form-label" for="heading">Headding</label>
                <input name="heading" id="heading" title="heading" type="text" 
            </form>
        </div>
    </div>
</main>

<?php
include('footer.php');
?>