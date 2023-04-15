<?php
//including header.php
include('header.php');
?>

<!-- main content -->
<main>
    <button id="logout-button"><a href="logout.php">Log out</a></button>
    <div class="container">
        <div class="form-wrap">
            <form action="problem.php" method="post">
                <h1>Welcome To Your IT Support System</h1>
                <br>
                <select name="title" title="usersTitle">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
                <input name="first_name" title="first_name" type="text" placeholder="First Name">
                <input name="last_name" title="last_name" type="text" placeholder="Last Name">
                <select name="role" title="role">
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="ceo">CEO</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="submit-button">
            </form>
        </div>
    </div>
</main>

<?php
//including footer.php
include('footer.php');
?>