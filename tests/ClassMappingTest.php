<?php

use ChristophJeworutzki\CorcelACF\Models\BaseField;
use ChristophJeworutzki\CorcelACF\Models\Text;
use ChristophJeworutzki\CorcelACF\Models\Generic;
use ChristophJeworutzki\CorcelACF\Models\Gallery;
use ChristophJeworutzki\CorcelACF\Tests\TestCase;
use ChristophJeworutzki\CorcelACF\Tests\Models\CustomField;

class ClassMappingTest extends TestCase
{
    public function testGallery()
    {
        $acfField = factory(BaseField::class)->make();
        $instance = $acfField->newFromBuilder(['post_content' => serialize(['type' => 'gallery'])]);
        $this->assertInstanceOf(Gallery::class, $instance);
    }

    public function testCustomClassExisting()
    {
        \Config::set('corcel-acf.classMapping', ['text' => CustomField::class]);

        $acfField = factory(BaseField::class)->make();
        $instance = $acfField->newFromBuilder(['post_content' => serialize(['type' => 'text'])]);
        $this->assertInstanceOf(CustomField::class, $instance);
    }

    public function testCustomClassNewField()
    {
        \Config::set('corcel-acf.classMapping', ['new_field_type' => CustomField::class]);

        $acfField = factory(BaseField::class)->make();
        $instance = $acfField->newFromBuilder(['post_content' => serialize(['type' => 'new_field_type'])]);
        $this->assertInstanceOf(CustomField::class, $instance);
    }
}
