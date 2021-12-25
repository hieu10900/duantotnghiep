<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $permissions = $this->getPermissions();
        foreach ($permissions as $permission) {
            gate::define($permission->permission, function ($user) use ($permission) {
                $permissionIdsOfUser = $this->getPermissionIdsOfUser($user);
                // $roleIds = collect(DB::table('user_role')->where('user_id', $user->id)->get())->pluck('role_id')->toArray();
                // $permissionIdsOfUser = collect(DB::table('permission_role')->whereIn('role_id', $roleIds)->get())->pluck('permission_id')->toArray();
                // dd($permissionIdsOfUser);
                return in_array($permission->id, $permissionIdsOfUser);
            });
        }
    }
    private function getPermissionIdsOfUser($user)
    {
        $roleIds = collect(DB::table('user_role')->where('user_id', $user->id)->get())->pluck('role_id')->toArray();
        $permissionIdsOfUser = collect(DB::table('permission_role')->whereIn('role_id', $roleIds)->get())->pluck('permission_id')->toArray();
        return $permissionIdsOfUser;
    }
    private function getPermissions()
    {
        $permission = DB::table('permissions')->get();
        return $permission;
    }
}
