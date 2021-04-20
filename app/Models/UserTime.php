<?php

namespace App\Models;

use App\Helpers\Functions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer id
 * @property mixed user_id
 * @property mixed saturday
 * @property mixed saturday_start
 * @property mixed saturday_end
 * @property mixed sunday
 * @property mixed sunday_start
 * @property mixed sunday_end
 * @property mixed monday
 * @property mixed monday_start
 * @property mixed monday_end
 * @property mixed tuesday
 * @property mixed tuesday_start
 * @property mixed tuesday_end
 * @property mixed wednesday
 * @property mixed wednesday_start
 * @property mixed wednesday_end
 * @property mixed thursday
 * @property mixed thursday_start
 * @property mixed thursday_end
 * @property mixed friday
 * @property mixed friday_start
 * @property mixed friday_end
 */
class UserTime extends Model
{
    protected $table = 'users_times';
    protected $fillable = ['user_id','saturday','saturday_start','saturday_end','sunday','sunday_start','sunday_end','monday','monday_start','monday_end','tuesday','tuesday_start','tuesday_end','wednesday','wednesday_start','wednesday_end','thursday','thursday_start','thursday_end','friday','friday_start','friday_end',];

    public function user(): BelongsTo
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
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * @param mixed $saturday
     */
    public function setSaturday($saturday): void
    {
        $this->saturday = $saturday;
    }

    /**
     * @return mixed
     */
    public function getSaturdayStart()
    {
        return $this->saturday_start;
    }

    /**
     * @param mixed $saturday_start
     */
    public function setSaturdayStart($saturday_start): void
    {
        $this->saturday_start = $saturday_start;
    }

    /**
     * @return mixed
     */
    public function getSaturdayEnd()
    {
        return $this->saturday_end;
    }

    /**
     * @param mixed $saturday_end
     */
    public function setSaturdayEnd($saturday_end): void
    {
        $this->saturday_end = $saturday_end;
    }

    /**
     * @return mixed
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * @param mixed $sunday
     */
    public function setSunday($sunday): void
    {
        $this->sunday = $sunday;
    }

    /**
     * @return mixed
     */
    public function getSundayStart()
    {
        return $this->sunday_start;
    }

    /**
     * @param mixed $sunday_start
     */
    public function setSundayStart($sunday_start): void
    {
        $this->sunday_start = $sunday_start;
    }

    /**
     * @return mixed
     */
    public function getSundayEnd()
    {
        return $this->sunday_end;
    }

    /**
     * @param mixed $sunday_end
     */
    public function setSundayEnd($sunday_end): void
    {
        $this->sunday_end = $sunday_end;
    }

    /**
     * @return mixed
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * @param mixed $monday
     */
    public function setMonday($monday): void
    {
        $this->monday = $monday;
    }

    /**
     * @return mixed
     */
    public function getMondayStart()
    {
        return $this->monday_start;
    }

    /**
     * @param mixed $monday_start
     */
    public function setMondayStart($monday_start): void
    {
        $this->monday_start = $monday_start;
    }

    /**
     * @return mixed
     */
    public function getMondayEnd()
    {
        return $this->monday_end;
    }

    /**
     * @param mixed $monday_end
     */
    public function setMondayEnd($monday_end): void
    {
        $this->monday_end = $monday_end;
    }

    /**
     * @return mixed
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * @param mixed $tuesday
     */
    public function setTuesday($tuesday): void
    {
        $this->tuesday = $tuesday;
    }

    /**
     * @return mixed
     */
    public function getTuesdayStart()
    {
        return $this->tuesday_start;
    }

    /**
     * @param mixed $tuesday_start
     */
    public function setTuesdayStart($tuesday_start): void
    {
        $this->tuesday_start = $tuesday_start;
    }

    /**
     * @return mixed
     */
    public function getTuesdayEnd()
    {
        return $this->tuesday_end;
    }

    /**
     * @param mixed $tuesday_end
     */
    public function setTuesdayEnd($tuesday_end): void
    {
        $this->tuesday_end = $tuesday_end;
    }

    /**
     * @return mixed
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * @param mixed $wednesday
     */
    public function setWednesday($wednesday): void
    {
        $this->wednesday = $wednesday;
    }

    /**
     * @return mixed
     */
    public function getWednesdayStart()
    {
        return $this->wednesday_start;
    }

    /**
     * @param mixed $wednesday_start
     */
    public function setWednesdayStart($wednesday_start): void
    {
        $this->wednesday_start = $wednesday_start;
    }

    /**
     * @return mixed
     */
    public function getWednesdayEnd()
    {
        return $this->wednesday_end;
    }

    /**
     * @param mixed $wednesday_end
     */
    public function setWednesdayEnd($wednesday_end): void
    {
        $this->wednesday_end = $wednesday_end;
    }

    /**
     * @return mixed
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * @param mixed $thursday
     */
    public function setThursday($thursday): void
    {
        $this->thursday = $thursday;
    }

    /**
     * @return mixed
     */
    public function getThursdayStart()
    {
        return $this->thursday_start;
    }

    /**
     * @param mixed $thursday_start
     */
    public function setThursdayStart($thursday_start): void
    {
        $this->thursday_start = $thursday_start;
    }

    /**
     * @return mixed
     */
    public function getThursdayEnd()
    {
        return $this->thursday_end;
    }

    /**
     * @param mixed $thursday_end
     */
    public function setThursdayEnd($thursday_end): void
    {
        $this->thursday_end = $thursday_end;
    }

    /**
     * @return mixed
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * @param mixed $friday
     */
    public function setFriday($friday): void
    {
        $this->friday = $friday;
    }

    /**
     * @return mixed
     */
    public function getFridayStart()
    {
        return $this->friday_start;
    }

    /**
     * @param mixed $friday_start
     */
    public function setFridayStart($friday_start): void
    {
        $this->friday_start = $friday_start;
    }

    /**
     * @return mixed
     */
    public function getFridayEnd()
    {
        return $this->friday_end;
    }

    /**
     * @param mixed $friday_end
     */
    public function setFridayEnd($friday_end): void
    {
        $this->friday_end = $friday_end;
    }

}
