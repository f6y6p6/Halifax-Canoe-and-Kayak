<?php
include('header.php');

userCheck();
?>

<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">

        <!-- Connect to DB -->

        <?php
            include('db-connect.php');
        ?>

        <!-- Welcome message -->

        <h1>Welcome <?php echo implode(" ", $_SESSION['user']). "! Add a new adventure" ?></h1>
        <br>
        <h4>Please provide details of the trip</h4>

        <!-- Form with 4 fields -->

        <div class="form-wrap">
            <form action="admin-confirm.php" method="POST">
                <label class="form-label" for="heading">Headding</label>
                <input name="heading" id="heading" title="heading" type="text" required>
                <br>
                <label class="form-label" for="tripDate">Trip Date</label>
                <input name="tripDate" id="tripDate" title="tripDate" type="date" placeholder="mm/dd/yyyy" required>
                <br>
                <label class="form-label" for="duration">Duration</label>
                <input name="duration" id="duration" title="duration" type="text" required>
                <br>
                <label class="form-label" for="summary">Summary</label>
                <input name="summary" id="summary" title="summary" type="text">
                <br>
                <input type="submit" name="submit" value="Submit" class="submit-button">
            </form>
        </div>
    </div>
</main>

<?php
include('footer.php');
?>