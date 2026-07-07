<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments | EditPro</title>
</head>
<body>

<?php include("../includes/header.php"); ?>
<?php include("../includes/sidebar-client.php"); ?><?php include("includes/header.php"); ?

<header>
    <h1>Payments</h1>
    <p>View your payment history.</p>
</header>

<main>

    <!-- Payment Summary -->
    <section>

        <h2>Payment Summary</h2>

        <p><strong>Total Paid:</strong> ₹18,500</p>
        <p><strong>Pending Payments:</strong> ₹2,000</p>

    </section>

    <hr>

    <!-- Payment History -->
    <section>

        <h2>Payment History</h2>

        <table border="1">

            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Project</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Invoice</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>#PAY001</td>
                    <td>YouTube Video Edit</td>
                    <td>₹2,000</td>
                    <td>05 Jul 2026</td>
                    <td>Paid</td>
                    <td><button>View</button></td>
                </tr>

                <tr>
                    <td>#PAY002</td>
                    <td>Instagram Reel</td>
                    <td>₹800</td>
                    <td>01 Jul 2026</td>
                    <td>Paid</td>
                    <td><button>View</button></td>
                </tr>

            </tbody>

        </table>

    </section>

</main>


<?php include("../includes/footer.php"); ?>
</body></html>
