<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManagerController extends Controller
{
    public function index()
    {
        $admins = admins::all();
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
        ]);

        admins::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Administrateur créé avec succès !');
    }





    public function edit($id)
    {
        $admin = admins::findOrFail($id);
        return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = admins::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:6',
        ]);

        $admin->name = $validated['name'];
        $admin->email = $validated['email'];

        if (!empty($validated['password'])) {
            $admin->password = Hash::make($validated['password']);
        }

        $admin->save();

        return redirect()->route('admin.admins.index')->with('success', 'Administrateur mis à jour avec succès.');
    }




    public function destroy($id)
    {
        $admin = admins::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.admins.index')->with('success', 'Administrateur supprimé avec succès.');
    }

}
