<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** -------- ROLES ------- **/
        $master_id = DB::table('roles')->insert([
            'name' => 'master',
            'display_name' => 'Master',
            'description' => 'Tem acesso a tudo'
        ]);

        $master_permissions_ids = DB::table('permissions')->pluck('id');

        // Vinculando as permissoes ao perfil master
		foreach ($master_permissions_ids as $p) {
			DB::table('permission_role')->insert([
				'permission_id' => $p,
                'role_id' => $master_id
      	    ]);
		}

        $admin_id = DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Gerencia tudo de uma franquia.'
        ]);

        // Vinculando as permissoes ao perfil admin
		foreach ($master_permissions_ids as $p) {
			DB::table('permission_role')->insert([
				'permission_id' => $p,
                'role_id' => $admin_id
      	    ]);
        }
        
        DB::table('roles')->insert([
            'name' => 'manager',
            'display_name' => 'Gerente',
            'description' => ''
        ]);
        DB::table('roles')->insert([
            'name' => 'agent',
            'display_name' => 'Agente',
            'description' => ''
        ]);
    }
}
