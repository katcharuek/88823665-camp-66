<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณแม่ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #fef4c5; 
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #4CAF50;
        }
        .multiplication-table {
            margin-top: 40px;
            padding: 20px;
            border: 5px solid #4CAF50;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .row {
            margin-bottom: 10px;
        }
        .col-md-4 {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>สูตรคูณแม่ 2</h1>
    <div class="container multiplication-table">
        <?php
        $mul = 2;
        for ($i = 1; $i <= 12; $i++) {
        ?>
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 text-center">
                <?php echo $mul; ?> x <?php echo $i; ?> = <?php echo $mul * $i; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
