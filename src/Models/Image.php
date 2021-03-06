<?php

namespace ChristophJeworutzki\CorcelACF\Models;

use Corcel\Model\Attachment;

class Image extends BaseField
{
    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'ID', 'internal_value');
    }

    public function getValueAttribute()
    {
        return $this->attachment;
    }
}
