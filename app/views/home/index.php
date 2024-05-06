<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="p-5 mb-4  rounded-3 mt-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Heloo, <?= $data['waktu'] ?></h1>
                <p class="col-md-8 fs-4"><?= $data['deskhome']; ?>
                <p>
                    <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>
    </div>
</body>

</html>