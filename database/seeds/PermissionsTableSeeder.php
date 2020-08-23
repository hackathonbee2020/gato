<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        /** -------- PERMISSÕES USUARIOS ------- **/
        DB::table('permissions')->insert([
            'name' => 'add-user',
            'display_name' => 'Adicionar usuarios',
            'description' => 'O usuário tem permissão para adicionar um novo usuario'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit-user',
            'display_name' => 'Editar usuarios',
            'description' => 'O usuário tem permissão para editar um usuario'
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete-user',
            'display_name' => 'Excluir usuarios',
            'description' => 'O usuário tem permissão para excluir um usuario'
        ]);
        DB::table('permissions')->insert([
            'name' => 'show-user',
            'display_name' => 'Visualizar usuarios',
            'description' => 'O usuário tem permissão para visualizar os usuarios'
        ]);

        /** -------- PERMISSÕES DEPARTAMENTOS ------- **/
        DB::table('permissions')->insert([
            'name' => 'add-departament',
            'display_name' => 'Adicionar departamentos',
            'description' => 'O usuário tem permissão para adicionar uma nova departamento'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit-departament',
            'display_name' => 'Editar departamentos',
            'description' => 'O usuário tem permissão para editar uma departamento'
        ]);
        DB::table('permissions')->insert([

            'name' => 'delete-departament',
            'display_name' => 'Excluir departamentos',
            'description' => 'O usuário tem permissão para excluir uma departamento'
        ]);
        DB::table('permissions')->insert([
            'name' => 'show-departament',
            'display_name' => 'Visualizar departamentos',
            'description' => 'O usuário tem permissão para visualizar as departamentos'
        ]);

        /** -------- PERMISSÕES CANAIS ------- **/
        DB::table('permissions')->insert([
            'name' => 'add-channel',
            'display_name' => 'Adicionar canais',
            'description' => 'O usuário tem permissão para adicionar um novo canal'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit-channel',
            'display_name' => 'Editar canais',
            'description' => 'O usuário tem permissão para editar um canal'
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete-channel',
            'display_name' => 'Excluir canais',
            'description' => 'O usuário tem permissão para excluir um canal'
        ]);
        DB::table('permissions')->insert([
            'name' => 'show-channel',
            'display_name' => 'Visualizar canais',
            'description' => 'O usuário tem permissão para visualizar os canais'
        ]);

        /** -------- PERMISSÕES CONVERSAS ------- **/
        DB::table('permissions')->insert([
            'name' => 'start-conversation',
            'display_name' => 'Iniciar conversa',
            'description' => 'O usuário tem permissão para iniciar uma conversa'
        ]);
        DB::table('permissions')->insert([
            'name' => 'end-conversation',
            'display_name' => 'Finalizar conversa',
            'description' => 'O usuário tem permissão para finalizar uma conversa'
        ]);
        DB::table('permissions')->insert([
            'name' => 'transfer-conversation',
            'display_name' => 'Transferir conversa',
            'description' => 'O usuário tem permissão para tranferir uma conversa'
        ]);
        DB::table('permissions')->insert([
            'name' => 'show-conversation',
            'display_name' => 'Visualizar conversa',
            'description' => 'O usuário tem permissão para visualizar uma conversa'
        ]);

        /** -------- PERMISSÕES PERFILS ------- **/
        DB::table('permissions')->insert([
            'name' => 'add-perfil',
            'display_name' => 'Adicionar perfils',
            'description' => 'O usuário tem permissão para adicionar um novo perfil'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit-perfil',
            'display_name' => 'Editar perfils',
            'description' => 'O usuário tem permissão para editar um perfil'
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete-perfil',
            'display_name' => 'Excluir perfils',
            'description' => 'O usuário tem permissão para excluir um perfil'
        ]);
        DB::table('permissions')->insert([
            'name' => 'show-perfil',
            'display_name' => 'Visualizar perfils',
            'description' => 'O usuário tem permissão para visualizar os perfils'
        ]);
        /** -------- PERMISSÕES RELATORIOS ------- **/
        DB::table('permissions')->insert([
            'name' => 'show-report',
            'display_name' => 'Visualizar relatorios',
            'description' => 'O usuário tem permissão para visualizar os relatorios'
        ]);
    }
}
