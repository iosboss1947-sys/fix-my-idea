<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details | EditPro</title>
</head>
<body>

<?php include("../includes/header.php"); ?>
<?php include("../includes/sidebar-client.php"); ?><?php include("includes/header.php"); ?

<header>
    <h1>Project Details</h1>
    <a href="my-projects.html">← Back to My Projects</a>
</header>

<main>

    <!-- Project Information -->
    <section>

        <h2>Project Information</h2>

        <p><strong>Project ID:</strong> #001</p>
        <p><strong>Project Title:</strong> YouTube Video Editing</p>
        <p><strong>Category:</strong> Video Editing</p>
        <p><strong>Status:</strong> In Progress</p>
        <p><strong>Budget:</strong> ₹2,000</p>
        <p><strong>Deadline:</strong> 10 July 2026</p>

    </section>

    <hr>

    <!-- Assigned Editor -->
    <section>

        <h2>Assigned Editor</h2>

        <p><strong>Name:</strong> Editor A</p>
        <p><strong>Rank:</strong> Gold</p>
        <p><strong>Rating:</strong> ⭐ 4.9/5</p>

    </section>

    <hr>

    <!-- Progress -->
    <section>

        <h2>Project Progress</h2>

        <progress value="70" max="100"></progress>

        <p>70% Completed</p>

    </section>

    <hr>

    <!-- Uploaded Files -->
    <section>

        <h2>Project Files</h2>

        <ul>
            <li>script.pdf</li>
            <li>raw-video.mp4</li>
            <li>thumbnail.png</li>
        </ul>

    </section>

    <hr>

    <!-- Final Submission -->
    <section>

        <h2>Final Submission</h2>

        <button>Download Final File</button>

    </section>

    <hr>

    <!-- Review -->
    <section>

        <h2>Rate Your Editor</h2>

        <label>Rating</label>

        <select>
            <option>⭐⭐⭐⭐⭐</option>
            <option>⭐⭐⭐⭐</option>
            <option>⭐⭐⭐</option>
            <option>⭐⭐</option>
            <option>⭐</option>
        </select>

        <br><br>

        <textarea placeholder="Write your review"></textarea>

        <br><br>

        <button>Submit Review</button>

    </section>

</main>


<?php include("../includes/footer.php"); ?>
</body></html>
