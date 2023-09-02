<?php
namespace App\Enums;

trait RolesToArray
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
enum Roles:int {
    use RolesToArray;

    case ADMINISTATOR = 1;
    case INSPECTOR = 2;
    case CLIENT = 3;
}