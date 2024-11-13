<?php 
    // Set default values for pagination
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;  // Number of rows per page
    $pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
    $offset = ($pageNumber - 1) * $limit;  // Offset for SQL query

    // Fetch the total number of records for pagination
    $totalResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM student WHERE del_status != 'deleted'");
    $totalRows = mysqli_fetch_assoc($totalResult)['total'];
    $totalPages = ceil($totalRows / $limit);
    //LIMIT $limit OFFSET $offset biside of order list
?>

    <div class="">
                <!-- Rows per page dropdown -->
            <label for="rowsPerPage">View:</label>
            <select id="rowsPerPage" onchange="updateRowsPerPage()">
                <option value="10" <?php echo $limit == 10 ? 'selected' : ''; ?>>10</option>
                <option value="25" <?php echo $limit == 25 ? 'selected' : ''; ?>>25</option>
                <option value="50" <?php echo $limit == 50 ? 'selected' : ''; ?>>50</option>
                <option value="100" <?php echo $limit == 100 ? 'selected' : ''; ?>>100</option>
            </select>

    </div>
    <script>
        // Update rows per page
        function updateRowsPerPage() {
            const limit = document.getElementById("rowsPerPage").value;
        }
    </script>
<?php echo $rowNumber++; ?>