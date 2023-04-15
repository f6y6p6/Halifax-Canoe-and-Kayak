<?php
//including header.php
include('header.php');

//checking if form values are set
if(isset($_POST['title']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['role'])) {
	$_SESSION['user'] = array(
		'title' => $_POST['title'],
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'role' => $_POST['role']
	);
}
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