<?php

namespace Shm379\Media\Tests\Models;

use Shm379\Media\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    protected $fillable = [
        'name', 'file_name', 'disk', 'mime_type', 'size', 'custom_attribute',
    ];
}
