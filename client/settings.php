<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | EditPro</title>
</head>
<body>

<?php include("../includes/header.php"); ?>
<?php include("../includes/sidebar-client.php"); ?><?php include("includes/header.php"); ?

<header>
    <h1>Settings</h1>
    <p>Manage your account preferences.</p>
</header>

<main>

    <!-- Appearance -->
    <section>

        <h2>Appearance</h2>

        <label>
            <input type="checkbox">
            Enable Dark Mode
        </label>

    </section>

    <hr>

    <!-- Notifications -->
    <section>

        <h2>Notifications</h2>

        <label>
            <input type="checkbox" checked="">
            Email Notifications
        </label>

        <br><br>

        <label>
            <input type="checkbox" checked="">
            Project Updates
        </label>

        <br><br>

        <label>
            <input type="checkbox">
            Promotional Emails
        </label>

    </section>

    <hr>

    <!-- Language -->
    <section>

        <h2>Language</h2>

        <select>
            <option>English</option>
            <option>Telugu</option>
            <option>Hindi</option>
        </select>

    </section>

    <hr>

    <!-- Security -->
    <section>

        <h2>Security</h2>

        <button>Change Password</button>

        <button>Enable Two-Factor Authentication</button>

    </section>

    <hr>

    <!-- Account -->
    <section>

        <h2>Account</h2>

        <button>Logout</button>

        <button>Delete Account</button>

    </section>

</main>


<?php include("../includes/footer.php"); ?>
</body></html>
