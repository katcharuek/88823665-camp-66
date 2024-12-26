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
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #4CAF50;
        }
        .number-container {
            margin: 20px auto;
            padding: 20px;
            border: 5px solid #4CAF50;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .row {
            margin-bottom: 10px;
        }
        .col {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>เลขคู่และคี่</h1>
    <div class="container number-container">
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <?= "$i เป็นเลข " . ($i % 2 == 0 ? "คู่" : "คี่") ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
