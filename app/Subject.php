<?php
// Model responsible for taking Subject database data to the controller to be passed on to the views
namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $primaryKey='id';
    protected $fillable=['name','slug'];


    public function videos() // A relationship with the videos
    {
        return $this->hasMany(Video::class);
    }
}
