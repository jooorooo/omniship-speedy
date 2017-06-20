<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 20.6.2017 г.
 * Time: 16:28 ч.
 */

namespace Omniship\Speedy\Helper;

use Crisu83\Conversion\Quantity\Mass\Unit AS MassUnit;
use Crisu83\Conversion\Quantity\Length\Unit AS LengthUnit;
use Omniship\Traits\Convert AS ConvertTrait;

class Convert
{

    use ConvertTrait;

    const SUPPORT_WEIGHT = MassUnit::KILOGRAM;

    const SUPPORT_LENGTH = LengthUnit::CENTIMETRE;

}