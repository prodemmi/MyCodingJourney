<?php

namespace App\Models;

use App\Traits\HasTag;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use CrudTrait;
    use HasFactory, HasUuids, HasTag;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //    public static function getReadingTimeProperty(string $content) : string
    //    {
    //        $words_per_minute = 225;
    //        $word_count       = str_word_count(strip_tags($content));
    //
    //        return ceil($word_count / $words_per_minute) . " Min";
    //    }
}
