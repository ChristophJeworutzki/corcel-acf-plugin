<?php

use ChristophJeworutzki\CorcelACF\Models\User;
use ChristophJeworutzki\CorcelACF\Tests\TestCase;
use Corcel\Model\User as CorcelUser;
use Illuminate\Support\Collection;

class FieldUserTest extends TestCase
{
    public function testUserField()
    {
        $user = factory(CorcelUser::class)->create();

        $acfField = factory(User::class)->create();

        $this->addData($acfField, 'fake_user_single', $user->ID);

        $this->assertInstanceOf(CorcelUser::class, $acfField->value);

        $this->assertTrue($user->is($acfField->value));
    }

    public function testTermMultiple()
    {
        $user = factory(CorcelUser::class)->create();
        $user2 = factory(CorcelUser::class)->create();

        $acfField = factory(User::class)->states('multiple')->create();
        $this->addData($acfField, 'fake_user_multiple', serialize([$user2->ID, $user->ID]));

        $this->assertInstanceOf(Collection::class, $acfField->value);
        $this->assertEquals(2, $acfField->value->count());
        $this->assertTrue($user2->is($acfField->value->first()));
        $this->assertTrue($user->is($acfField->value->get(1)));
    }
}