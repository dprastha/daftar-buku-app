<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Writer;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_writer', 'title', 'slug', 'genre', 'picture', 'pages', 'publish_date'
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class, 'id_writer', 'id');
    }

    public function getPictureAttribute($value)
    {
        return url('storage/' . $value);
    }
}
