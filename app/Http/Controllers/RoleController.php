<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use App\Models\Role;
use App\Models\Permission;
use App\Repositories\RoleRepository;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleRepository $model)
    {
        $roles = Role::orderBy('name', 'asc')->paginate(8);

        return view('pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('pages.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, RoleRepository $model)
    {
        $role = $model->store($request);
        $role->permissions()->sync($request->permissions);

        if ($role)
        {
            return redirect("/roles")->with('success', 'Perfil adicionado com sucesso!');
        }

        return back()->with('errors', 'Falha ao adicionar perfil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $role_permissions = [];

        foreach ($role->permissions as $p) {
            array_push($role_permissions, $p->id);
        }

        return view('pages.roles.edit', compact('role', 'role_permissions', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id, RoleRepository $model)
    {
        $role = $model->update($request, $id);
        
        return redirect("/roles")->with('success', 'Perfil atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleRepository $model, $id)
    {
        $model->destroy($id);

        return back()->with('success', 'Perfil excluido com sucesso!');
    }
}
