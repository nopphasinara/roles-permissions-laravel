<?php

namespace App;

use \Spatie\Permission\Models\Permission as BasePermission;

class Permission extends BasePermission
{
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',

            'view_agents',
            'add_agents',
            'edit_agents',
            'delete_agents',

            'view_owners',
            'add_owners',
            'edit_owners',
            'delete_owners',
        ];
    }
}
