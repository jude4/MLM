<?php
namespace App\Traits;

trait Stateable {

    public function getStatusAttribute($value)
    {

        switch ($value) {
            case 0:
                return 'pending';
                break;
            
            case 2:
                return 'approved';
                break;
            
            case 1:
                return 'cancelled';
                break;
            default:
                return 'cancelled';
                break;
        }
    }
}