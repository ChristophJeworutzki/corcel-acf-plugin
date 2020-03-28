<?php

use ChristophJeworutzki\CorcelACF\Models\Text;
use ChristophJeworutzki\CorcelACF\Models\Choice;
use ChristophJeworutzki\CorcelACF\Models\Link;
use ChristophJeworutzki\CorcelACF\Models\Image;
use ChristophJeworutzki\CorcelACF\Models\File;
use ChristophJeworutzki\CorcelACF\Models\Boolean;
use ChristophJeworutzki\CorcelACF\Models\Post;
use ChristophJeworutzki\CorcelACF\Models\PageLink;
use ChristophJeworutzki\CorcelACF\Models\Term;
use ChristophJeworutzki\CorcelACF\Models\DateTime;
use ChristophJeworutzki\CorcelACF\Models\Group;
use ChristophJeworutzki\CorcelACF\Models\Repeater;
use ChristophJeworutzki\CorcelACF\Models\FlexibleContent;
use ChristophJeworutzki\CorcelACF\Models\Generic;
use ChristophJeworutzki\CorcelACF\Models\Gallery;
use ChristophJeworutzki\CorcelACF\Models\User;

return [
    'classMapping' => [
        'text' => Text::class,
        'textarea' => Text::class,
        'number' => Text::class,
        'email' => Text::class,
        'url' => Text::class,
        'password' => Text::class,
        'wysiwyg' => Text::class,
        'editor' => Text::class,
        'oembed' => Text::class,
        'embed' => Text::class,
        'color_picker' => Text::class,
        'select' => Choice::class,
        'checkbox' => Choice::class,
        'radio' => Choice::class,
        'link' => Link::class,
        'image' => Image::class,
        'img' => Image::class,
        'file' => File::class,
        'gallery' => Gallery::class,
        'true_false' => Boolean::class,
        'boolean' => Boolean::class,
        'post_object' => Post::class,
        'post' => Post::class,
        'relationship' => Post::class,
        'page_link' => PageLink::class,
        'taxonomy' => Term::class,
        'term' => Term::class,
        'user' => User::class,
        'date_picker' => DateTime::class,
        'date_time_picker' => DateTime::class,
        'time_picker' => DateTime::class,
        'group' => Group::class,
        'repeater' => Repeater::class,
        'flexible_content' => FlexibleContent::class,
    ],
];
