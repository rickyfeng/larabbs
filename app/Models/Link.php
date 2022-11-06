<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cache;

class Link extends Model
{
    use HasFactory;

    protected $fillable  = [
        'title', 'link'
    ];

    public $cache_key = 'larabbs_links';
    protected $cache_expire_in_minutes = 1400;

    public function getAllCached()
    {
        return Cache::remember($this->cache_key, $this->cache_expire_in_minutes, function(){
            return $this->all();
        });
    }
}
