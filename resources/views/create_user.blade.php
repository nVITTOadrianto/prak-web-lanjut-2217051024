@extends('layouts.app')

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle bg-warning rounded-5 p-5" style="max-width: 50rem; box-shadow: 0px 0px 50px gray">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="m-2">
                <div class="d-flex justify-content-center">
                    <label class="form-label" for="foto">Foto : </label>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="form-control-lg" type="file" id="foto" name="foto">
                </div>
                @foreach($errors->get('foto') as $msg)
                    <div class="d-flex justify-content-center">
                        <p class="text-danger">{{ $msg }}</p>    
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary mt-5" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection