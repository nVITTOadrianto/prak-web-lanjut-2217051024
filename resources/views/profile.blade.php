<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-info">
    <div class="container position-absolute top-50 start-50 translate-middle bg-warning rounded-5 p-5" style="max-width: 50rem; box-shadow: 0px 0px 50px gray">
        <div class="d-flex justify-content-center m-5">
            <img class="bg-white border border-4 border-black rounded-circle" src="<?= asset('assets/img/default.webp') ?>" style="width: 10rem" alt="...">
            {{-- <img class="bg-white border border-4 border-black rounded-circle" src="https://static.vecteezy.com/system/resources/previews/020/911/747/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" style="width: 10rem" alt="..."> --}}
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="text-center text-bg-secondary p-2 " style="max-width: 30rem; width: 100%"><?= $nama ?></h2>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="text-center text-bg-secondary p-2" style="max-width: 30rem; width: 100%"><?= $npm ?></h2>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="text-center text-bg-secondary p-2" style="max-width: 30rem; width: 100%"><?= $nama_kelas ?? "Kelas tidak ditemukan" ?></h2>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
