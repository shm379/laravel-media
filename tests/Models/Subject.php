<?php

namespace Shm379\Media\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Shm379\Media\HasMedia;

class Subject extends Model
{
    use HasMedia;

    public function registerMediaGroups()
    {
        $this->addMediaGroup('converted-images')
             ->performConversions('conversion');
    }
}
