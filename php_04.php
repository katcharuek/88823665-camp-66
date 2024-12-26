<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color:rgb(166, 147, 147);
            font-family: Arial, sans-serif;
        }
        h2, .form-label {
            color: #4CAF50;
        }
        .container {
            max-width: 1400px; 
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgb(0, 0, 0); 
        }
        .border-dark {
            background-color: #e8f5e9; 
            border: 2px solid #4CAF50;
            border-radius: 20px; 
            box-shadow: 0 4px 8px rgb(0, 0, 0);
            padding: 20px; 
        }
        .btn-success {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
        .btn-success:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        .alert-danger {
            text-align: center;
        }
    </style>
</head>
<body>
    <style>
       
    </style>
    <div class="container mt-5">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter a number</label>
                <input name="detail" type="number" class="form-control" id="exampleFormControlInput2" placeholder="Enter a number">
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
                <?php $num = (int)$_POST["detail"]; ?>
                <div class="border rounded p-3 mt-3 border-dark border-3">
                    <?php for ($i = 1; $i <= $num; $i++): ?>
                        <div class="row">
                            <div class="h2 col text-start mt-1">
                                <?= "$i is an " . ($i % 2 == 0 ? "even" : "odd") . " number" ?>
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
