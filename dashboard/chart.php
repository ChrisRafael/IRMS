<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/js/pei.js"></script>
    <title>chart</title>
</head>
<body>
    <form action="../student/create.php" method="post">
    <?php 
        include "../database/db.php";  // Include your database connection
    // Get the count of male and female students
    $maleCountQuery = "SELECT COUNT(*) AS male_count FROM student WHERE gender = 'Male'";
    $femaleCountQuery = "SELECT COUNT(*) AS female_count FROM student WHERE gender = 'Female'";

    $maleResult = mysqli_query($conn, $maleCountQuery);
    $femaleResult = mysqli_query($conn, $femaleCountQuery);

    $maleCount = mysqli_fetch_assoc($maleResult)['male_count'];
    $femaleCount = mysqli_fetch_assoc($femaleResult)['female_count'];

    ?>
<script>
    // PHP variables to JavaScript
    const maleCount = <?php echo $maleCount; ?>;
    const femaleCount = <?php echo $femaleCount; ?>;

    const ctx = document.getElementById('genderChart').getContext('2d');
    const genderChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Gender Distribution',
                data: [maleCount, femaleCount],
                backgroundColor: ['#36A2EB', '#FF6384'],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            }
        }
    });
</script>

    </form>
</body>
</html>