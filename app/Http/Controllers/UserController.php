<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }

    public function create() 
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => "Create User",
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function store(Request $request) 
    {
        // $this->userModel->create([
        //     'nama' => $request->input('nama'),
        //     'npm' => $request->input('npm'),
        //     'kelas_id' => $request->input('kelas_id')
        // ]);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create($validatedData);

        return redirect()->to('/user/list');
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }
}
