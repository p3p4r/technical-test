<?php
namespace App\Enums;

trait GradesToArray
{

  public static function names(): array
  {
    return array_column(self::cases(), 'name');
  }

  public static function values(): array
  {
    return array_column(self::cases(), 'value');
  }

  public static function array(): array
  {
    return array_combine(self::values(), self::names());
  }

}

/*
* Statuses For Inspections
*/
enum Grades:int {
    use GradesToArray;

    case PERFECT = 1;
    case GOOD = 2;
    case MISSING = 3;
    case BROKEN = 4;
    case UNREPAIRABLE = 5;
}