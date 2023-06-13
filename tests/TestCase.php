<?php

namespace Tests;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Schema;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function assertHasManyUsing($related_model, $relationship, $foreign_key)
    {
        $this->assertInstanceOf(HasMany::class, $relationship);
        $this->assertInstanceOf($related_model, $relationship->getRelated());
        $this->assertEquals($foreign_key, $relationship->getForeignKeyName());
        $this->assertTrue(Schema::hasColumns($relationship->getRelated()->getTable(), array($foreign_key)));
    }

    public function assertHasOneUsing($related_model, $relationship, $foreign_key)
    {
        $this->assertInstanceOf(HasOne::class, $relationship);
        $this->assertInstanceOf($related_model, $relationship->getRelated());
        $this->assertEquals($foreign_key, $relationship->getForeignKeyName());
        $this->assertTrue(Schema::hasColumns($relationship->getRelated()->getTable(), array($foreign_key)));
    }

    public function assertBelongsToUsing($related_model, $relationship, $foreign_key)
    {
        $this->assertInstanceOf(BelongsTo::class, $relationship);
        $this->assertInstanceOf($related_model, $relationship->getRelated());
        $this->assertEquals($foreign_key, $relationship->getForeignKeyName());
        $this->assertTrue(Schema::hasColumns($relationship->getParent()->getTable(), array($foreign_key)));
    }

    public function assertBelongsToManyUsing($related_model, $relationship, $table_name)
    {
        $this->assertInstanceOf(BelongsToMany::class, $relationship);
        $this->assertInstanceOf($related_model, $relationship->getRelated());
        $this->assertEquals($table_name, $relationship->getTable());
    }

}
