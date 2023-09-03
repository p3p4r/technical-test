<?php
namespace App\Enums;

/*
* Statuses For Farms
*/
enum Components:string {
    case BLADE = 1;
    case HUB = 2;
    case GENERATOR = 3;
    case ROTOR = 4;
}