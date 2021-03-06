<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests\Unit\Policies;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\GoogleApi\Models\GmbAccount;
use Tipoff\GoogleApi\Tests\TestCase;
use Tipoff\Support\Contracts\Models\UserInterface;

class GmbAccountPolicyTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function view_any()
    {
        $user = self::createPermissionedUser('view gmb accounts', true);
        $this->assertTrue($user->can('viewAny', GmbAccount::class));

        $user = self::createPermissionedUser('view gmb accounts', false);
        $this->assertFalse($user->can('viewAny', GmbAccount::class));
    }

    /**
     * @test
     * @dataProvider data_provider_for_all_permissions_as_creator
     */
    public function all_permissions_as_creator(string $permission, UserInterface $user, bool $expected)
    {
        $rate = GmbAccount::factory()->make([
            'creator_id' => $user,
        ]);

        $this->assertEquals($expected, $user->can($permission, $rate));
    }

    public function data_provider_for_all_permissions_as_creator()
    {
        return [
            'view-true' => [ 'view', self::createPermissionedUser('view gmb accounts', true), true ],
            'view-false' => [ 'view', self::createPermissionedUser('view gmb accounts', false), false ],
            'create-true' => [ 'create', self::createPermissionedUser('create gmb accounts', true), true ],
            'create-false' => [ 'create', self::createPermissionedUser('create gmb accounts', false), false ],
            'update-true' => [ 'update', self::createPermissionedUser('update gmb accounts', true), true ],
            'update-false' => [ 'update', self::createPermissionedUser('update gmb accounts', false), false ],
            'delete-true' => [ 'delete', self::createPermissionedUser('delete gmb accounts', true), false ],
            'delete-false' => [ 'delete', self::createPermissionedUser('delete gmb accounts', false), false ],
        ];
    }

    /**
     * @test
     * @dataProvider data_provider_for_all_permissions_not_creator
     */
    public function all_permissions_not_creator(string $permission, UserInterface $user, bool $expected)
    {
        $rate = GmbAccount::factory()->make();

        $this->assertEquals($expected, $user->can($permission, $rate));
    }

    public function data_provider_for_all_permissions_not_creator()
    {
        // Permissions are identical for creator or others
        return $this->data_provider_for_all_permissions_as_creator();
    }
}
