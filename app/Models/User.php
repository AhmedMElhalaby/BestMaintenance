<?php

namespace App\Models;

use App\Helpers\Functions;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;

/**
 * @property integer id
 * @property mixed name
 * @property mixed email
 * @property mixed mobile
 * @property mixed password
 * @property mixed type
 * @property mixed country_id
 * @property mixed city_id
 * @property mixed avatar
 * @property mixed bio
 * @property mixed device_token
 * @property mixed device_type
 * @property mixed lat
 * @property mixed lng
 * @property mixed nationality
 * @property mixed religion
 * @property mixed address
 * @property mixed rate
 * @property mixed email_verified_at
 * @property mixed mobile_verified_at
 * @property mixed app_locale
 * @property boolean is_active
 * @method User find(int $id)
 */
class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    protected $fillable = ['name','email','mobile','type','country_id','city_id','avatar','device_token','device_type','address','rate','lat','lng','nationality','religion','email_verified_at','mobile_verified_at','app_locale','is_active',];

    protected $hidden = ['password'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function user_time(): HasOne
    {
        return $this->hasOne(UserTime::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'users_categories');
    }
    /**
     * @param $id
     * @return bool
     */
    public function hasCategory($id): bool
    {
        return (bool)UserCategory::where('user_id', $this->getId())->where('category_id', $id)->first();
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return ($this->avatar)?asset($this->avatar):null;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar): void
    {
        $this->avatar = Functions::StoreImageModel($avatar,'users/avatar');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * Set the user's first name.
     *
     * @param mixed $password
     * @return void
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param mixed $country_id
     */
    public function setCountryId($country_id): void
    {
        $this->country_id = $country_id;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id): void
    {
        $this->city_id = $city_id;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getDeviceToken()
    {
        return $this->device_token;
    }

    /**
     * @param mixed $device_token
     */
    public function setDeviceToken($device_token): void
    {
        $this->device_token = $device_token;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->device_type;
    }

    /**
     * @param mixed $device_type
     */
    public function setDeviceType($device_type): void
    {
        $this->device_type = $device_type;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param mixed $lng
     */
    public function setLng($lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getEmailVerifiedAt()
    {
        return $this->email_verified_at;
    }

    /**
     * @param mixed $email_verified_at
     */
    public function setEmailVerifiedAt($email_verified_at): void
    {
        $this->email_verified_at = $email_verified_at;
    }

    /**
     * @return mixed
     */
    public function getMobileVerifiedAt()
    {
        return $this->mobile_verified_at;
    }

    /**
     * @param mixed $mobile_verified_at
     */
    public function setMobileVerifiedAt($mobile_verified_at): void
    {
        $this->mobile_verified_at = $mobile_verified_at;
    }

    /**
     * @return mixed
     */
    public function getAppLocale()
    {
        return $this->app_locale;
    }

    /**
     * @param mixed $app_locale
     */
    public function setAppLocale($app_locale): void
    {
        $this->app_locale = $app_locale;
    }

    /**
     * @return bool
     */
    public function isIsActive(): bool
    {
        return $this->is_active;
    }

    /**
     * @param bool $is_active
     */
    public function setIsActive(bool $is_active): void
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @param mixed $religion
     */
    public function setReligion($religion): void
    {
        $this->religion = $religion;
    }

}
