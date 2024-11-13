<div class="bar-graph">
                    <form action="../student/create.php" method="post">
                        
                    <h6 style="text-align:center;">Student Gender</h6>

                        <!-- Gender Distribution Chart -->
                    <div class=""  style="width: 300px; height: 300px; margin: auto;">
                    <canvas id="genderChart" ></canvas>
                    </div>
                    <script>
                            <?php 
                            include "../database/db.php";  // Include your database connection
                            // Get the count of male and female students
                            $maleCountQuery = "SELECT COUNT(*) AS male_count FROM student WHERE gender = 'Male' AND del_status != 'deleted'";
                            $femaleCountQuery = "SELECT COUNT(*) AS female_count FROM student WHERE gender = 'Female' AND del_status != 'deleted'";

                            $maleResult = mysqli_query($conn, $maleCountQuery);
                            $femaleResult = mysqli_query($conn, $femaleCountQuery);

                            $maleCount = mysqli_fetch_assoc($maleResult)['male_count'];
                            $femaleCount = mysqli_fetch_assoc($femaleResult)['female_count'];

                            ?>

                        // PHP variables to JavaScript
                        const maleCount = <?php echo $maleCount; ?>;
                        const femaleCount = <?php echo $femaleCount; ?>;

                        const ctx = document.getElementById('genderChart').getContext('2d');
                        const genderChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Male', 'Female'],
                                datasets: [{
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
                </div>