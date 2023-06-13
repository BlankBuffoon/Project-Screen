<?php

namespace Tests\Unit\Database\Relationships;

use App\Models\Project;
use App\Models\User;
use Tests\TestCase;

class UserTableTest extends TestCase
{
    public function test_user_as_maintainer_has_many_projects(): void
    {
        $child = new User;

        $this->assertBelongsToManyUsing(Project::class, $child->maintained_project(), 'maintainers');
    }

    public function test_user_as_developer_has_many_projects(): void
    {
        $child = new User;

        $this->assertBelongsToManyUsing(Project::class, $child->developed_project(), 'developers');
    }
}
