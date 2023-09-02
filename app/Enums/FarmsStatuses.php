<?php
namespace App\Enums;

/*
* Statuses For Farms
*/
enum FarmsStatuses:string {
    case PENDING = 'P';
    case ACTIVE = 'A';
    case DISABLED = 'D';
}