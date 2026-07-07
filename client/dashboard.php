<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard | EditPro</title>
</head>



<body>      
                 <?php include("../includes/header.php"); ?>
<?php include("../includes/sidebar-client.php"); ?>

    <!-- Sidebar -->
    <aside>

        <div>
            <h2>EditPro</h2>
        </div>

        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="upload-project.html">Upload Project</a></li>
                <li><a href="my-projects.html">My Projects</a></li>
                <li><a href="#">Payments</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="../login.html">Logout</a></li>
            </ul>
        </nav>

    </aside>

    <!-- Main Content -->
    <main>

        <!-- Top Header -->
        <header>

            <div>
                <h1>Dashboard</h1>
                <p>Welcome back, Client!</p>
            </div>

            <div>
                <input type="search" placeholder="Search Projects">
                <button>Notifications</button>
                <button>Profile</button>
            </div>

        </header>

        <!-- Statistics -->
        <section>

            <article>
                <h3>Total Projects</h3>
                <p>0</p>
            </article>

            <article>
                <h3>Active Projects</h3>
                <p>0</p>
            </article>

            <article>
                <h3>Completed Projects</h3>
                <p>0</p>
            </article>

            <article>
                <h3>Total Payments</h3>
                <p>₹0</p>
            </article>

        </section>

        <!-- Quick Actions -->
        <section>

            <h2>Quick Actions</h2>

            <button>Upload New Project</button>
            <button>View Projects</button>
            <button>Contact Support</button>

        </section>

        <!-- Recent Projects -->
        <section>

            <h2>Recent Projects</h2>

            <table>

                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Status</th>
                        <th>Deadline</th>
                        <th>Editor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>No Projects</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>

            </table>

        </section>

        <!-- Activity -->
        <section>

            <h2>Recent Activity</h2>

            <ul>
                <li>No recent activity.</li>
            </ul>

        </section>

    </main>


<?php include("../includes/footer.php"); ?>
</body></html>
