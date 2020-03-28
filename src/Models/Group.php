<?php

namespace ChristophJeworutzki\CorcelACF\Models;

use ChristophJeworutzki\CorcelACF\Support\GroupLayout;

class Group extends Generic
{
    use Traits\SerializedValue;

    public function getValueAttribute()
    {
        return new GroupLayout($this->children->keyBy('post_excerpt')->map(function ($field) {
            $internalName = sprintf('%s_%s', $this->localKey, $field->post_excerpt);
            return $field->setData($this->data)->setLocalKey($internalName);
        }));
    }
}
