<?php

use ChristophJeworutzki\CorcelACF\Models\BaseFieldGroup;
use ChristophJeworutzki\CorcelACF\OptionPage;

$factory->define(OptionPage::class, function (Faker\Generator $faker) {
    return array_replace(factory(BaseFieldGroup::class)->make()->getAttributes(), [
    ]);
});
