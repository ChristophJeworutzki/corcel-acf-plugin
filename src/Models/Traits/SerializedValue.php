<?php

namespace ChristophJeworutzki\CorcelACF\Models\Traits;

trait SerializedValue
{
    public function getInternalValueAttribute()
    {
        $value = $this->data->get($this->localKey);
        if (!$value) {
            return $value;
        }
        return @unserialize($value);
    }
}
