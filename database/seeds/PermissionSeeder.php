<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

use App\User;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       

    $permissions_adm = [];
    array_push($permissions_adm,Permission::create(['name' => 'crear_empleado']));
    array_push($permissions_adm,Permission::create(['name' => 'modificar_empleado']));
    array_push($permissions_adm,Permission::create(['name' => 'darbaja_empleado']));
    array_push($permissions_adm,Permission::create(['name' => 'reporte_empleado']));
    
$ADMINISTRADOR = Role::create(['name' => 'ADMINISTRADOR']);

$ADMINISTRADOR->syncPermissions($permissions_adm);


$permissions_array = [];
array_push($permissions_array,Permission::create(['name' => 'crear_productos']));
array_push($permissions_array,Permission::create(['name' => 'modificar_productos']));
array_push($permissions_array,Permission::create(['name' => 'darbaja_productos']));
array_push($permissions_array,Permission::create(['name' => 'crear_categoria']));
array_push($permissions_array,Permission::create(['name' => 'modificar_categoria']));
array_push($permissions_array,Permission::create(['name' => 'darbaja_categoria']));
array_push($permissions_array,Permission::create(['name' => 'reporte_productos']));
array_push($permissions_array,Permission::create(['name' => 'reporte_categoria']));


$EMPLEADO = Role::create(['name' => 'EMPLEADO']);

$EMPLEADO->syncPermissions($permissions_array);

$permissions_user = [];
array_push($permissions_user,Permission::create(['name' => 'comprar_productos']));


$CLIENTE = Role::create(['name' => 'CLIENTE']);

$CLIENTE->syncPermissions($permissions_user);

$admin_user = User::create([
    'rut' => '111111111',
    'name' => 'admin',
    'apellidos' => '1',
    'fono' => '133',
    'email' => 'admin@gmail.com',
    'tipo_usuario' => 'ADMINISTRADOR',
    'password' => Hash::make('admin'),
]);
$admin_user->removeRole('CLIENTE');
$admin_user->assignRole('ADMINISTRADOR');
$empleado_user = User::create([
    'rut' => '111111112',
    'name' => 'empleado',
    'apellidos' => '1',
    'fono' => '133',
    'email' => 'empleado@gmail.com',
    'tipo_usuario' => 'EMPLEADO',
    'password' => Hash::make('empleado'),
]);
$empleado_user->removeRole('CLIENTE');
$empleado_user->assignRole('EMPLEADO');








    }
}
