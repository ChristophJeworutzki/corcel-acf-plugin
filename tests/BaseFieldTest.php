<?php

use ChristophJeworutzki\CorcelACF\Models\BaseField;
use ChristophJeworutzki\CorcelACF\Models\Text;
use ChristophJeworutzki\CorcelACF\Models\Generic;
use ChristophJeworutzki\CorcelACF\Tests\TestCase;

class BaseFieldTest extends TestCase
{
    public function testTextField()
    {
        $acfField = factory(BaseField::class)->make();
        $instance = $acfField->newFromBuilder(['post_content' => serialize(['type' => 'text'])]);
        $this->assertInstanceOf(Text::class, $instance);
    }

    public function testInvalidField()
    {
        $acfField = factory(BaseField::class)->make();
        $instance = $acfField->newFromBuilder(['post_content' => serialize(['type' => 'invalid'])]);
        $this->assertInstanceOf(Generic::class, $instance);
    }
}
