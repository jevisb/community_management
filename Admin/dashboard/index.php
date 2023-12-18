<?php
    // Include logic.php to fetch data or define $query
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <!-- Water.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Custom Styles */
        /* Add your custom styles here */
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card p-4">
            <?php if(isset($_REQUEST['info']) && $_REQUEST['info'] == "added"): ?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php endif; ?>

            <div class="text-center mb-3">
                <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
            </div>

            <div class="row">
                <?php 
                    // Check if $query is set and is iterable
                    if(isset($query) && (is_array($query) || is_object($query))): ?>
                    
                    <?php foreach($query as $q): ?>
                        <div class="col-12 col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $q['title'];?></h5>
                                    <div class="card-image">
                                        <img src="<?php echo $q['images'];?>" alt="<?php echo $q['title'];?> Image">
                                    </div>
                                    <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                                    <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-primary">Read More <span class="text-danger">&rarr;</span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php else: ?>
                    <p>No data available</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
