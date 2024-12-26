<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่และคี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #fef4c5; 
        }
    </style>
</head>
<body>
<h1>เลขคู่และคี่</h1>
<?php for ($i = 1; $i <= 100; $i++): ?>
    <div class="row">
        <div class="h2 col text-start">
            <?= "$i เป็นเลข " . ($i % 2 == 0 ? "คู่" : "คี่") ?>
        </div>
    </div>
<?php endfor; ?>
</body>
</html>