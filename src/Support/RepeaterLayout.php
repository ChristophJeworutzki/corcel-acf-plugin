<?php

namespace ChristophJeworutzki\CorcelACF\Support;

use Illuminate\Support\Collection;

/**
 * Represents one block of a repeater field
 */
class RepeaterLayout
{
    use Traits\LayoutBlock;

    /**
     * The fields of this layout
     *
     * @var Collection|null
     */
    protected $data;

    public function __construct(Collection $data = null)
    {
        $this->data = $data;
    }

    /**
     * Return this layout's data collection
     *
     * @return Collection
     */
    public function getData() : Collection
    {
        return $this->data;
    }
    
}
