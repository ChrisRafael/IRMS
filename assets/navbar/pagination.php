    <?php 
        // Ensure the page number is at least 1
        $pageNumber = max(1, isset($_GET['page']) ? (int)$_GET['page'] : 1);
        // Calculate the offset based on the valid page number
        $offset = ($pageNumber - 1) * $limit;
        // Initialize row number based on the current page
        $rowNumber = $offset + 1;
    
    ?>
    <!-- Pagination Controls -->
    <div c-p[lass="pagination">
        <span>Page <?php echo $pageNumber; ?> of <?php echo $totalPages; ?></span> <!-- Display current page info -->

        <?php if ($pageNumber > 1): ?>
            <a href="?limit=<?php echo $limit; ?>&page=<?php echo $pageNumber - 1; ?>">Previous</a>
        <?php endif; ?>
        
        <?php if ($pageNumber < $totalPages): ?>
            <a href="?limit=<?php echo $limit; ?>&page=<?php echo $pageNumber + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
