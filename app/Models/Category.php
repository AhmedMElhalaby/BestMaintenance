<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer id
 * @property mixed manager_id
 * @property string name
 * @property string name_ar
 * @property string description
 * @property string description_ar
 * @property string image
 * @property boolean is_active
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['manager_id','name','name_ar','description','description_ar','image','is_active'];

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class);
    }
    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
    public function getManagerId()
    {
        return $this->manager_id;
    }

    /**
     * @param mixed $manager_id
     */
    public function setManagerId($manager_id): void
    {
        $this->manager_id = $manager_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameAr(): string
    {
        return $this->name_ar;
    }

    /**
     * @param string $name_ar
     */
    public function setNameAr(string $name_ar): void
    {
        $this->name_ar = $name_ar;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescriptionAr(): string
    {
        return $this->description_ar;
    }

    /**
     * @param string $description_ar
     */
    public function setDescriptionAr(string $description_ar): void
    {
        $this->description_ar = $description_ar;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
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

}
