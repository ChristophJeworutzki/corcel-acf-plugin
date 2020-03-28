<?php

use ChristophJeworutzki\CorcelACF\Models\Boolean;
use ChristophJeworutzki\CorcelACF\Tests\TestCase;

class FieldBooleanTest extends TestCase
{
    public function testTrueFalseField()
    {
        $acfField = factory(Boolean::class)->create();
        $this->addData($acfField, 'fake_true_false', '1');
        $this->assertTrue($acfField->value);
    }
}
