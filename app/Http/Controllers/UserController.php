<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('level_user', 'Pengguna')->get();
        return view('admin.datamaster.users.main', [
            'title' => 'Table User',
            'active' => 'datamaster',
            'users' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('admin.datamaster.users.add', [
            'title' => 'Form User',
            'active' => 'datamaster',
            'provinsis' => $provinsi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $validatedData = $request->validate([
                'nama_lengkap' => 'required',
                'username' => 'required|unique:users',
                'email' => 'required|unique:users',
                'password' => 'required',
                'no_telp' => 'required',
                'provinsi_id' => 'required',
                'kabupaten_id' => 'required',
                'kode_pos' => 'required',
                'alamat_lengkap' => 'required',
            ]);
            $validatedData['level_user'] = 'Pengguna';
            $validatedData['password'] = bcrypt($request->password);
            User::create($validatedData);
            if (Auth::check()) {
                return redirect('/datamaster/users')->withInput()->with('status', 'success')->with('message', 'Berhasil tambah user');
            } else {
                return redirect('/login')->withInput()->with('status', 'success')->with('message', 'Berhasil registrasi');
            }
        } catch (Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $provinsi = Provinsi::all();
        return view('admin.datamaster.users.show', [
            'title' => 'Detail User',
            'active' => 'datamaster',
            'user' => $user,
            'provinsis' => $provinsi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $provinsi = Provinsi::all();
        return view('admin.datamaster.users.edit', [
            'title' => 'Edit User',
            'active' => 'datamaster',
            'user' => $user,
            'provinsis' => $provinsi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            //code...
            $validatedData = $request->validate([
                'nama_lengkap' => 'required',
                'username' => 'required',
                'email' => 'required',
                'no_telp' => 'required',
                'provinsi_id' => 'required',
                'kabupaten_id' => 'required',
                'kode_pos' => 'required',
                'alamat_lengkap' => 'required',
            ]);
            if (empty($request->password)) {
                $validatedData['password'] = $user->password;
            } else {
                $validatedData['password'] = $request->password;
            }
            if ($request->username != $user->username) {
                $request->validate([
                    'username' => 'required|unique:users',
                ]);
            }
            if ($request->email != $user->email) {
                $request->validate([
                    'email' => 'required|unique:users',
                ]);
            }
            $validatedData['level_user'] = 'Pengguna';
            $validatedData['password'] = bcrypt($request->password);
            $user->update($validatedData);
            return redirect('/datamaster/users')->withInput()->with('status', 'success')->with('message', 'Berhasil update user');
        } catch (Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect('/datamaster/users')->withInput()->with('status', 'success')->with('message', 'Berhasil delete user');
        } catch (\Throwable $th) {
            return ['status' => 'success', 'code' => 200, 'message' => $th->getMessage(), 'data' => ''];
        }
    }
    public function getKabupaten($id)
    {
        $kabupaten = Kabupaten::where('id_provinsi', $id)->get();
        if ($kabupaten->count() > 0) {
            return ['status' => 'success', 'code' => 200, 'message' => 'Berhasil mengambil data', 'data' => $kabupaten];
        } else {
            return ['status' => 'error', 'code' => 500, 'message' => 'Gagal mengambil data', 'data' => $kabupaten];
        }
    }
}
