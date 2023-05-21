<?php
include('header.php');
?>

<main>
    <div class="container">
        <h1>Admin - Confirm</h1>

        <!-- Connecting to the DB -->

        <?php
            include('db-connect.php');

            # Confirmation 

            $heading = $_POST['heading'];
            $tripDate = $_POST['tripDate'];
            $duration = $_POST['duration'];
            $summary = $_POST['summary'];

            $sql = 
                "INSERT INTO halifaxcnk.adventures (heading, tripDate, duration, summary)
                 VALUES ('$heading', '$tripDate', '$duration', '$duration')";

            if(mysqli_query($connect, $sql)) {
                echo "New record created successfully";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
                }
                
        ?>
        
        <button id="home"><a href="all-adventures.php">View all adventures</a></button>
    </div>
</main>

<?php
include('footer.php');
?>