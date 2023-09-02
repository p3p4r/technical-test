<?php
namespace App\Enums;

/*
* Statuses For Inspections
*/
enum InspectionStatuses:string {
    case COMPLETE = 'C';
    case FAILED = 'F';
    case PENDING = 'P';
}