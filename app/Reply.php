<?php
// Model responsible for taking user reply input data into the database and retrieves user replies
namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Purify;

class Reply extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    // Table Name
    protected $table = 'replies';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable=['user_id', 'video_id', 'parent_id', 'body'];

    /**
     * A reply has an owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A reply belongs to a video.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class, 'parent_id');
    }

    public function path()
    {
        return $this->thread->path() . "#reply-{$this->id}";
    }

}
