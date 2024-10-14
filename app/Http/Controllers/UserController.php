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
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048'
        ]);

        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            // $fotoPath = $foto->move(('upload/img'), $fotoName);
            $foto->storeAs('upload/img', $fotoName);
            
            $this->userModel->create([
                'nama' => $request->input('nama'),
                'npm' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
                'foto' => $foto
            ]);
        }

        return redirect()->to('/user/list')->with('success', 'User berhasil ditambahkan');
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    public function show($id) {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => "Profile",
            'user' => $user
        ];

        return view('profile', $data);
    }

    public function edit($id) {
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = "Edit User";
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id) {
        $user = UserModel::findOrFail($id);

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('upload/img'), $fileName);
            $user->foto = 'upload/img/' . $fileName;
        }

        $user->save();
        return redirect()->route('user.list')->with('success', 'User update successfully');
    }

    public function destroy($id) {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('user/list')->with('success', 'User has been deleted successfully');
    }
}
