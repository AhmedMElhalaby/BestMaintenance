<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer id
 * @property mixed category_id
 * @property mixed name
 * @property mixed name_ar
 */
class Issue extends Model
{
    protected $table = 'issues';
    protected $fillable = ['category_id','name','name_ar'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
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
    public function getNameAr()
    {
        return $this->name_ar;
    }

    /**
     * @param mixed $name_ar
     */
    public function setNameAr($name_ar): void
    {
        $this->name_ar = $name_ar;
    }

}
