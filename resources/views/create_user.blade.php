<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="container position-absolute top-50 start-50 translate-middle bg-warning rounded-5 p-5" style="max-width: 50rem; box-shadow: 0px 0px 50px gray">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="m-2">
                <div class="d-flex justify-content-center">
                    <label class="form-label" for="nama">Nama : </label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control-lg" type="text" id="nama" name="nama">
                </div>
                @foreach($errors->get('nama') as $msg)
                    <div class="d-flex justify-content-center">
                        <p class="text-danger">{{ $msg }}</p>    
                    </div>
                @endforeach
            </div>
            <div class="m-2">
                <div class="d-flex justify-content-center">
                    <label class="form-label" for="npm">NPM : </label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control-lg" type="text" id="npm" name="npm">
                </div>
                @foreach($errors->get('npm') as $msg)
                    <div class="d-flex justify-content-center">
                        <p class="text-danger">{{ $msg }}</p>    
                    </div>
                @endforeach
            </div>
            <div class="m-2">
                <div class="d-flex justify-content-center">
                    <label class="form-label" for="kelas_id">Kelas :</label>
                </div>
                <div class="d-flex justify-content-center">
                    {{-- <input class="form-control-lg" type="text" id="kelas" name="kelas"> --}}
                    <select class="form-select-lg" name="kelas_id" id="kelas_id">
                        @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary mt-5" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>