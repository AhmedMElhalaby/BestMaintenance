<?php

namespace App\Models;

use App\Helpers\Functions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer id
 * @property mixed user_id
 * @property mixed subscription_id
 * @property mixed expire_date
 * @property mixed status
 */
class UserSubscription extends Model
{
    protected $table = 'users_subscriptions';
    protected $fillable = ['user_id','subscription_id','expire_date','status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }

    /**
     * @param mixed $subscription_id
     */
    public function setSubscriptionId($subscription_id): void
    {
        $this->subscription_id = $subscription_id;
    }

    /**
     * @return mixed
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * @param mixed $expire_date
     */
    public function setExpireDate($expire_date): void
    {
        $this->expire_date = $expire_date;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}
