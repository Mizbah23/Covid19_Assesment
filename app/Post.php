<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['age','sex','temperature','symptoms1','symptoms2'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['symptoms1'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['symptoms1'] = json_decode($value);
    }

    public function setCategoryAttribute($value)
    {
        $this->attributes['symptoms2'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['symptoms2'] = json_decode($value);
    }
}
