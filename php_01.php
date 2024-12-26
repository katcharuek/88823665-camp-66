
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณแม่ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>สูตรคูณแม่ 2</h1>
    <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="row">
            <div class="h2 col text-start">
                <?= "2 x $i = " . (2 * $i) ?>
            </div>
        </div>
    <?php endfor; ?>
</body>
</html>