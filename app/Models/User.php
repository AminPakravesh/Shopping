<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\OtpMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public static function generateOtp(\Illuminate\Http\Request $request)
    {

        $user = null;

        $otp = random_int(10000, 99999);

        $userQuery = User::query()->where('email', $request->get('email'));

        if ($userQuery->exists()) {
            $user = $userQuery->first();
            $user->update([
                'password' => bcrypt($otp)
            ]);
        } else {
            $user = User::query()->create([
                'email' => $request->get('email'),
                'role_id' => Role::findByTitle('user')->id,
                'password' => bcrypt($otp)
            ]);
        }


        //send verify code by otpGmail
        Mail::to($user->email)->send(new OtpMail($otp));

        return $user;
    }

    public function likes()
    {
        return $this->belongsToMany(Product::class, 'likes')
            ->withTimestamps();
    }


    public function like(Product $product)
    {
        $isLikedBefore=$this->likes()->where('id',$product->id)
            ->exists();

        if ($isLikedBefore)
        {
            return $this->likes()->detach($product);

        }

        $this->likes()->attach($product);
    }
}
