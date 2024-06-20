<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Units;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Menampilkan halaman user
     */
    public function index(): View
    {
        $users = User::with(['detail_role','detail_cabang'])->where('status', 1)->orderBy('name', 'asc')->get();
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $roles = Role::get();
        
        return view('pengaturan.user', [
            'users' => $users,
            'units' => $units,
            'roles' => $roles,
        ]);
    }
    
    /**
     * Menampilkan halaman roles
     */
    public function roles(): View
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $roles = Role::get();
        
        return view('pengaturan.role', [
            'units' => $units,
            'roles' => $roles,
        ]);
    }

    /**
     * Menambah role baru
     */
    public function store_role(Request $request)
    {
        $name  = strtolower(trim($request->nama));
        $guard = $request->guard;

        // cek apakah role name sudah ada atau tidak
        $isExist = Role::where('name', $name)->exists();
        if ($isExist) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Role sudah tersedia, silakan pilih nama role lainnya!');
            return redirect()->route('admin.pengaturan.role')->with('warning', 'Role sudah tersedia, silakan pilih nama role lainnya!');
        }

        $insert = Role::create([
            'name'       => $name,
            'guard_name' => $guard,
        ]);

        if ($insert) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil tambah role baru');
            return redirect()->route('admin.pengaturan.role')->with('success', 'Berhasil tambah role baru.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal tambah role baru.');
            return redirect()->route('admin.pengaturan.role')->with('failed', 'Gagal tambah role baru.');
        }
    }

    /**
     * Mappin role ke user
     */
    public function mapping_role(Request $request)
    {
        $id_user   = $request->userid;
        $role_user = $request->role;
        $user     = User::findOrFail($id_user);

        $assigned = $user->assignRole($role_user->name);

        if ($assigned) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil mapping role');
            return redirect()->route('admin.pengaturan.role')->with('success', 'Berhasil role ke user tersebut.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal mapping role.');
            return redirect()->route('admin.pengaturan.role')->with('failed', 'Gagal mapping role.');
        }
    }

    /**
     * Hapus data role by rolid
     */
    public function delete_role($id) {
        $roleHasUser = DB::table('model_has_roles')
            ->where('role_id', $id)
            ->exists();

        if ($roleHasUser) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal hapus role.');
            return redirect()->route('admin.pengaturan.role')->with('failed', 'Gagal hapus role. Role terikat dengan user aktif!');
        }

        $delete = Role::where('id', $id)->delete();
        if ($delete) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil hapus role');
            return redirect()->route('admin.pengaturan.role')->with('success', 'Berhasil hapus role.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal hapus role.');
            return redirect()->route('admin.pengaturan.role')->with('failed', 'Gagal hapus role.');
        }
    }

}