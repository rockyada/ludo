<?php
 
namespace App\Models;
 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\File;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public static function getImageAttribute($value = ""){
    //     if (!empty($value) && file_exists(Config('constants.USER_IMAGE_ROOT_PATH').$value)) {
    //         $value = Config('constants.USER_IMAGE_PATH').$value;
    //     }else {
    //         $value = Config('constants.WEBSITE_URL').'public/img/user.png';
    //     }
    //     return $value;
    // }


    public function users_bank_details()
    {
       return $this->hasOne(UsersBankDetails::class,'user_id','id');
    }

    public function users_kyc_details()
    {
       return $this->hasOne(UsersKycDetails::class,'user_id','id');
    }
       
}