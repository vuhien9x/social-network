<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Comment;
use App\Models\SyntheticItem;
use App\Models\VideoItem;
use App\Models\GameItem;
use App\Models\FilmItem;
use App\Models\MusicItem;
use App\Models\PostItem;
use App\Models\NoteItem;
use App\Models\LearningItem;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'image',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function syntheticItems()
    {
        return $this->hasMany(SyntheticItem::class);
    }

    public function videoItems()
    {
        return $this->hasMany(VideoItem::class);
    }

    public function gameItems()
    {
        return $this->hasMany(GameItem::class);
    }

    public function filmItems()
    {
        return $this->hasMany(FilmItem::class);
    }

    public function musicItems()
    {
        return $this->hasMany(MusicItem::class);
    }

    public function postItems()
    {
        return $this->hasMany(PostItem::class);
    }

    public function noteItems()
    {
        return $this->hasMany(NoteItem::class);
    }

    public function learningItems()
    {
        return $this->hasMany(LearningItem::class);
    }

}
