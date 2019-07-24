<?php echo '<?php' ?>


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        $this->command->info('Truncating User, Role and Permission tables');
        $this->truncateLaratrustTables();
        
        $config = config('laratrust_seeder.role_structure');
        $userPermission = config('laratrust_seeder.permission_structure');
        $mapPermission = collect(config('laratrust_seeder.permissions_map'));

        foreach ($config as $key => $modules) {
            // Create a new role
            $role = \<?php echo e($role); ?>::create([
                'name' => $key,
                'display_name' => ucwords(str_replace("_", " ", $key)),
                'description' => ucwords(str_replace("_", " ", $key))
            ]);

            $this->command->info('Creating Role '. strtoupper($key));

            // Reading role permission modules
            foreach ($modules as $module => $value) {
                $permissions = explode(',', $value);

                foreach ($permissions as $p => $perm) {
                    $permissionValue = $mapPermission->get($perm);

                    $permission = \<?php echo e($permission); ?>::firstOrCreate([
                        'name' => $permissionValue . '-' . $module,
                        'display_name' => ucfirst($permissionValue) . ' ' . ucfirst($module),
                        'description' => ucfirst($permissionValue) . ' ' . ucfirst($module),
                    ]);

                    $this->command->info('Creating Permission to '.$permissionValue.' for '. $module);
                    
                    if (!$role->hasPermission($permission->name)) {
                        $role->attachPermission($permission);
                    } else {
                        $this->command->info($key . ': ' . $p . ' ' . $permissionValue . ' already exist');
                    }
                }
            }

            $this->command->info("Creating '{$key}' user");
            // Create default user for each role
            $user = \<?php echo e($user); ?>::create([
                'name' => ucwords(str_replace("_", " ", $key)),
                'email' => $key.'@app.com',
                'password' => bcrypt('password')
            ]);
            $user->attachRole($role);
        }

        // creating user with permissions
        if (!empty($userPermission)) {
            foreach ($userPermission as $key => $modules) {
                foreach ($modules as $module => $value) {
                    $permissions = explode(',', $value);
                    // Create default user for each permission set
                    $user = \<?php echo e($user); ?>::create([
                        'name' => ucwords(str_replace("_", " ", $key)),
                        'email' => $key.'@app.com',
                        'password' => bcrypt('password'),
                        'remember_token' => str_random(10),
                    ]);
                    foreach ($permissions as $p => $perm) {
                        $permissionValue = $mapPermission->get($perm);

                        $permission = \<?php echo e($permission); ?>::firstOrCreate([
                            'name' => $permissionValue . '-' . $module,
                            'display_name' => ucfirst($permissionValue) . ' ' . ucfirst($module),
                            'description' => ucfirst($permissionValue) . ' ' . ucfirst($module),
                        ]);

                        $this->command->info('Creating Permission to '.$permissionValue.' for '. $module);
                        
                        if (!$user->hasPermission($permission->name)) {
                            $user->attachPermission($permission);
                        } else {
                            $this->command->info($key . ': ' . $p . ' ' . $permissionValue . ' already exist');
                        }
                    }
                }
            }
        }
    }

    /**
     * Truncates all the laratrust tables and the users table
     * @return    void
     */
    public function truncateLaratrustTables()
    {
<?php if(Config::get('database.default') == 'pgsql'): ?>
        DB::table('<?php echo e(config('laratrust.tables.permission_role')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.permission_user')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.role_user')); ?>')->truncate();
        $usersTable = (new \<?php echo e($user); ?>)->getTable();
        $rolesTable = (new \<?php echo e($role); ?>)->getTable();
        $permissionsTable = (new \<?php echo e($permission); ?>)->getTable();
        DB::statement("TRUNCATE TABLE {$usersTable} CASCADE");
        DB::statement("TRUNCATE TABLE {$rolesTable} CASCADE");
        DB::statement("TRUNCATE TABLE {$permissionsTable} CASCADE");
<?php elseif(Config::get('database.default') == 'mysql'): ?>
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('<?php echo e(config('laratrust.tables.permission_role')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.permission_user')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.role_user')); ?>')->truncate();
        \<?php echo e($user); ?>::truncate();
        \<?php echo e($role); ?>::truncate();
        \<?php echo e($permission); ?>::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
<?php elseif(Config::get('database.default') == 'sqlsrv'): ?>
        DB::statement('EXEC sp_msforeachtable "ALTER TABLE ? NOCHECK CONSTRAINT all"');
        DB::table('<?php echo e(config('laratrust.tables.permission_role')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.permission_user')); ?>')->truncate();
        DB::table('<?php echo e(config('laratrust.tables.role_user')); ?>')->truncate();
        \<?php echo e($user); ?>::truncate();
        \<?php echo e($role); ?>::truncate();
        \<?php echo e($permission); ?>::truncate();
        DB::statement('EXEC sp_msforeachtable "ALTER TABLE ? WITH CHECK CHECK CONSTRAINT all"');
<?php endif; ?>
    }
}
<?php /**PATH /home/a7med404/a7meD404/WD_WORK/WorkingFolder/work-on/school-system/vendor/santigarcor/laratrust/src/views/generators/seeder.blade.php ENDPATH**/ ?>