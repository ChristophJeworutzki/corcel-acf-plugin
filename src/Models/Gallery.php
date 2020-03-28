<?php

namespace ChristophJeworutzki\CorcelACF\Models;

use Corcel\Model\Attachment;

class Gallery extends Generic
{
    use Traits\SerializedValue;

    public function getValueAttribute()
    {
        return $this->getSortedRelation(Attachment::class, $this->internal_value);
    }
}
