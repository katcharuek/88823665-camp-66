<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #fef4c5; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter the multiplication table.</label>
                <input name="detail" type="number" class="form-control" id="exampleFormControlInput2" placeholder="ป้อนตัวเลข">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
            <div class="h2 mb-3">
                Please fill in complete information.
            </div>
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php if (!empty($_POST["detail"])): ?>
                <?php $mul = (int)$_POST["detail"]; ?>
                <div class="border rounded p-3 mt-3 border-dark border-3">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <div class="row">
                            <div class="h2 col text-start">
                                <?= "$mul x $i = " . ($mul * $i) ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-danger mt-3">Please fill in the required field.</div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
