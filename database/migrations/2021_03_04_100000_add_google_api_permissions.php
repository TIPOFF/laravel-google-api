<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddGoogleApiPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions = [
            'view gmb accounts' => ['Owner','Staff'],
            'create gmb accounts' => ['Owner'],
            'update gmb accounts' => ['Owner'],
            'view keys' => [],
        ];

        $this->createPermissions($permissions);
    }
}
