<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer id
 * @property mixed user_id
 * @property mixed technical_id
 * @property mixed category_id
 * @property mixed issue_id
 * @property mixed issue_type_id
 * @property mixed status
 * @property mixed address
 * @property mixed amount
 * @property mixed order_date
 * @property mixed order_time
 * @property mixed note
 * @property mixed reject_reason
 * @property mixed cancel_reason
 * @method Order find(mixed $order_id)
 */
class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id','technical_id','category_id','issue_id','issue_type_id','address','status','amount','order_date','order_time','note','reject_reason','cancel_reason',];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function technical(): BelongsTo
    {
        return $this->belongsTo(User::class,'technical_id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function issue(): BelongsTo
    {
        return $this->belongsTo(Issue::class,'issue_id');
    }
    public function issue_type(): BelongsTo
    {
        return $this->belongsTo(IssueType::class,'issue_type_id');
    }
    public function order_statuses(): HasMany
    {
        return $this->hasMany(OrderStatus::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
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
    public function getTechnicalId()
    {
        return $this->technical_id;
    }

    /**
     * @param mixed $technical_id
     */
    public function setTechnicalId($technical_id): void
    {
        $this->technical_id = $technical_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getIssueId()
    {
        return $this->issue_id;
    }

    /**
     * @param mixed $issue_id
     */
    public function setIssueId($issue_id): void
    {
        $this->issue_id = $issue_id;
    }

    /**
     * @return mixed
     */
    public function getIssueTypeId()
    {
        return $this->issue_type_id;
    }

    /**
     * @param mixed $issue_type_id
     */
    public function setIssueTypeId($issue_type_id): void
    {
        $this->issue_type_id = $issue_type_id;
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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param mixed $order_date
     */
    public function setOrderDate($order_date): void
    {
        $this->order_date = $order_date;
    }

    /**
     * @return mixed
     */
    public function getOrderTime()
    {
        return $this->order_time;
    }

    /**
     * @param mixed $order_time
     */
    public function setOrderTime($order_time): void
    {
        $this->order_time = $order_time;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getRejectReason()
    {
        return $this->reject_reason;
    }

    /**
     * @param mixed $reject_reason
     */
    public function setRejectReason($reject_reason): void
    {
        $this->reject_reason = $reject_reason;
    }

    /**
     * @return mixed
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * @param mixed $cancel_reason
     */
    public function setCancelReason($cancel_reason): void
    {
        $this->cancel_reason = $cancel_reason;
    }

}
