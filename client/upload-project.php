<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project | EditPro</title>
</head>
<body>

    <header>
        <h1>Upload New Project</h1>
        <p>Fill in the project details below.</p>
    </header>

    <main>

        <form>

            <section>

                <label for="title">Project Title</label><br>
                <input type="text" id="title" name="title" placeholder="Enter project title">

            </section>

            <br>

            <section>

                <label for="category">Category</label><br>

                <select id="category" name="category">
                    <option>Select Category</option>
                    <option>Video Editing</option>
                    <option>Photo Editing</option>
                    <option>Graphic Design</option>
                    <option>Thumbnail Design</option>
                    <option>Animation</option>
                </select>

            </section>

            <br>

            <section>

                <label for="description">Project Description</label><br>

                <textarea id="description" rows="6" placeholder="Describe your project"></textarea>

            </section>

            <br>

            <section>

                <label for="budget">Budget (₹)</label><br>

                <input type="number" id="budget" placeholder="Enter budget">

            </section>

            <br>

            <section>

                <label for="deadline">Deadline</label><br>

                <input type="date" id="deadline">

            </section>

            <br>

            <section>

                <label for="priority">Priority</label><br>

                <select id="priority">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Urgent</option>
                </select>

            </section>

            <br>

            <section>

                <label for="files">Upload Files</label><br>

                <input type="file" id="files" multiple="">

            </section>

            <br>

            <section>

                <label>
                    <input type="checkbox">
                    I agree to the platform rules.
                </label>

            </section>

            <br>

            <button type="submit">Upload Project</button>
            <button type="reset">Reset</button>

        </form>

    </main>


</body></html>
