<?php
// Model responsible for taking user video input data into the database and retrieves user videos
namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Table Name
    protected $table = 'videos';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable=['slug','user_id','subject_id','replies_count','visits','title','body','video_path'];

    public function user()// Relationship with the user
    {
        return $this->belongsTo('App\User');
    }

    /**
     * A video may have many replies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies() // Video relationship with the replies
    {
        return $this->hasMany(Reply::class)->whereNull('parent_id');
    }

    /**
     * A reply belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A reply is assigned a video.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    /**
     * Add a reply to the video.
     *
     * @param  array $reply
     * @return Model
     */
    public function addReply($reply)
    {
        $reply = $this->replies()->create($reply);
        return $reply;
    }
}

