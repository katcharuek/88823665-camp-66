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
    <div class="container mt-5">
        <form method="POST" action = "{{url('/mylaravel')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter the multiplication table</label>
                <input name="myinput" type="number" class="form-control" id="exampleFormControlInput2" placeholder="ป้อนตัวเลข">
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success btn-lg" type="submit">Submit</button>
            </div>
            <div class="text-center mb-3">
                <h2>Please fill in complete information</h2>
            </div>
        </action>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php if (!empty($_POST["myinput"])): ?>
                <?php $mul = $myinput; ?>
                <div class="border-dark mt-3">
                    <h2 class="text-center">Multiplication Table of <?= $mul ?></h2>
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <h3><?= "$mul x $i = " . ($mul * $i) ?></h3>
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