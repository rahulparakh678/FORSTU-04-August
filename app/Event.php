<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;



class Event extends Model implements Feedable
{
    
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->author($this->author)
            ->link($this->link);
            
    }

    //public static function getFeedItems()
    //{
        //return static::all();
    //}
    public static function getFeedItems()
    {
        return Event::where('status','Active')->orderBy('id','desc')->get();
    }
/*
    public function getLinkAttribute()
    {
        return route('events.show', $this);
    }
*/
    public $table='events';
    protected $fillable = [
        'title',
        'description',
        'author',
        'status',
        'link',
        
    ];
}
