<?php
//including header.php
include('header.php');

//checking if form values are set
userCheck();
?>

<!-- main content -->
<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">
        <div class="form-wrap">
            <h1>Hello, <?php echo $_POST['title'].$_POST['first_name'] . ' ' . $_POST['last_name']; ?></h1>
            <hr>
            <div id="problem">
                <?php
                    //show links based on the selected role
                    $role = $_POST['role'];
                    if ($role == "admin"){
                        echo "<a href='new-account.php'><button class='select-button'>Create New Account</button></a>";
                        echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a>";
                        echo "<a href='admin-add.php'><button class='select-button'>Add new trip</button></a>";
                    } elseif ($role == "manager"){
                        echo "<a href='lost-password.php'><button class='select-button'>Lost Password</button></a>";
                        echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a>";    
                    } elseif ($role == "ceo"){
                        echo "<a href='need-help.php'><button class='select-button'>Need Help</button></a>";
                        echo "<a href='isnt-working.php'><button class='select-button'>Is Not Working</button></a>";
                    } else {
                        echo "Invalid role selected";
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
//including footer.php
include('footer.php');
?>