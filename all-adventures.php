<?php
include('header.php');
?>

<!-- main content -->
<main>
    <div class="container">
        <img src="images/canoe.jpg" alt="canoe photo" id="main-image">
        <div class="over-text"><h4 class="text-over">Come Experience Canada</h4></div>
    </div>
    <div>
        <h1>Upcoming Adventures</h1>
        <div id="cards">

            <!-- Connecting to DB -->
            <?php 
            include('db-connect.php');

            #SELECTing data from DB
            $sql = "SELECT * FROM halifaxcnk.adventures";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo <<<LGA
                    <div class="card">
                        <div class="card-content">
                            <h2>{$row['heading']}</h2>
                            <h4>{$row['tripDate']}</h4>
                            <h3>Duration: {$row['duration']} minutes</h3>
                            <h3>Summary</h3>
                            <h4>{$row['summary']}</h4>
                        </div>
                    </div>
                    LGA;
                }
                } else {
                    echo "<h2>No results found</h2>";
            }
            ?>

            <!-- Previous HARD-CODED version of adventure cards
            <div class="card">
                <div class="card-content">
                    <h2>Halifax</h2>
                    <h4>Every Friday and Sunday</h4>
                    <h3>Summary</h3>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores ullam, aliquid sapiente tenetur veritatis quos iste 
                        harum unde nihil nemo quae, inventore, eveniet laborum 
                        error recusandae vero ex non distinctio!</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h2>Sydney</h2>
                    <h4>Every Saturday</h4>
                    <h3>Summary</h3>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores ullam, aliquid sapiente tenetur veritatis quos iste 
                        harum unde nihil nemo quae, inventore, eveniet laborum 
                        error recusandae vero ex non distinctio!</h4>
                </div>
            </div>
            -->
        </div>
    </div>
</main>\

<?php
include('footer.php');
?>