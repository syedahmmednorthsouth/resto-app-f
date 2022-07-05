<?php

namespace App\Enums;


enum TableState: string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';
}
