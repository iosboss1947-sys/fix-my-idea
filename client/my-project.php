<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects | EditPro</title>
</head>
<body>

    <header>
        <h1>My Projects</h1>
        <p>Manage and track all your uploaded projects.</p>
    </header>

    <main>

        <!-- Search -->
        <section>
            <input type="search" placeholder="Search Project...">

            <select>
                <option>All Status</option>
                <option>Pending</option>
                <option>In Progress</option>
                <option>Completed</option>
                <option>Rejected</option>
            </select>
        </section>

        <br>

        <!-- Projects Table -->
        <section>

            <table border="1">

                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Category</th>
                        <th>Editor</th>
                        <th>Status</th>
                        <th>Budget</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>#001</td>
                        <td>YouTube Video Edit</td>
                        <td>Video Editing</td>
                        <td>Editor A</td>
                        <td>In Progress</td>
                        <td>₹2,000</td>
                        <td>10 Jul 2026</td>
                        <td>
                            <button>View</button>
                            <button>Edit</button>
                        </td>
                    </tr>

                    <tr>
                        <td>#002</td>
                        <td>Instagram Reel</td>
                        <td>Short Video</td>
                        <td>Editor B</td>
                        <td>Completed</td>
                        <td>₹800</td>
                        <td>05 Jul 2026</td>
                        <td>
                            <button>View</button>
                            <button>Download</button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </section>

    </main>


</body></html>
