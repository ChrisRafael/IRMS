

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="google" value="notranslate" />
    <link rel="icon" type="image/x-icon" href="../file_index/image/jhslogo.png">
    <link rel="stylesheet" href="../style.cssassets/css/style.css">
    <link rel="stylesheet" href="../assets/css/subject.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Add User</title>
</head>
<style>
                /* Table Styles */
                .table-box{
                    width: 500px;
                    border:1px solid #ddd;
                    padding:3px;
                    border-radius: 8px;
                }
                .data {
                width: 100%;
                border-collapse: collapse;
                font-size: 14px;
            }
    
            .data th, .data td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
    
            .data th {
                background-color: #550000;
                color: white;
            }
    
            .data tr:hover {
                background-color: #f1f1f1;
            }
    
            .data td a {
                text-decoration: none;
                color: #000;
            }
    
            .data td a:hover {
                color: #aaaeb2;
            }
    
            .action{
                display:flex;
                gap:1;
            }

            .action a {
                display: inline-block;
                padding: 6px 10px;
                background-color: #fff;
                margin-left:4px;
                color: black;
                border: 1px solid black;
                border-radius: 4px;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            .action a i{
                font-size:15px;
            }

           .action #delete {
                background-color: red;
            }
            .action a:hover {
                background-color: #ddd;
                color: black;
            }

</style>
<body>
<?php
        $page = 'subject';
        include '../navbar.php'; // Include this template code
    ?>


    <div class="content">
        <a href="index.php?page=user" class=""> <i class="fa-solid fa-arrow-left"></i>  </a>
        <form class="row g-3" action="../subject/create.php" method="post">
            <h3>User Information</h3>
            <div class="grid-container grid-container--fill">
                <div class="grid-item">
                    <label class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                </div>
                <div class="grid-item">
                    <label class="form-label">Subject Code</label>
                    <input type="text" class="form-control" id="subject_code" name="subject_code">
                </div>
            </div>
            <div class="footer">
                <button class="save" type="submit">Save</button>
                <a href="./"><button class="cancel" type="button">Cancel</button></a>
            </div>
    

        </form>
        <!-- table for subject -->
         <div class="table-box">
         <table id="example" class="data list">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>Subject</th>
                    <th>Subject Code</th> <!-- Show email -->
                    <th style="width: 55px;">Action</th>
                </tr>
            </thead>
            <tbody id="">
                <?php

                // Fetch user data from the database
                
                $squery = mysqli_query($conn, "SELECT * FROM subject WHERE del_status != 'deleted' ORDER BY id DESC;");
                while ($row = mysqli_fetch_array($squery)) { 
                
                ?>
                <tr class="table-row" >
                    <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['subject_code']; ?></td>
                    <td class="action">
                        <a class="view" href="edit.php?id=<?php // echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="view" href="edit.php?id=<?php // echo $row['id']; ?>" id="delete"><i class="fa fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php  } ?>
                <script>
                new DataTable('#example', {
                order: [[0, 'desc']]
                });
                </script>

            </tbody>
        </table>

         </div>


    </div>
</body>
</html>
