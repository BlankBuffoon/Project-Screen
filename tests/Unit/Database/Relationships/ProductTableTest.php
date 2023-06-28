<?php

namespace Tests\Unit\Database\Relationships;

use App\Models\Project;
use App\Models\User;
use Tests\TestCase;

class ProductTableTest extends TestCase
{
    public function test_projects_has_many_users_as_maintainers(): void
    {
        $child = new Project;

        $this->assertBelongsToManyUsing(User::class, $child->maintainers(), 'maintainers');
    }

    public function test_projects_has_many_users_as_developers(): void
    {
        $child = new Project;

        $this->assertBelongsToManyUsing(User::class, $child->developers(), 'developers');
    }
}
