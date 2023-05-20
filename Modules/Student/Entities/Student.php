<?php

namespace Modules\Student\Entities;

use Modules\Student\Database\factories\StudentFactoryFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [];

    public const COURSE_TYPE_REGULAR = "course";
    public const COURSE_TYPE_LIBRARY = "library";
    public const COURSE_TYPE_OFFER = "offer";

    public const PAYMENT_MODE_ONLINE = "Online";
    public const PAYMENT_MODE_OFFLINE = "Offline";

    public const ACTIVE = 1;
    public const DEACTIVE = 2;


    protected static function newFactory()
    {
        // return StudentFactory::new();
        return StudentFactoryFactory::new();
    }
}
