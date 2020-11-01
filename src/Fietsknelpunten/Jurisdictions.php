<?php

namespace Fietsknelpunten;

use Base\Config;


class Jurisdictions
{
	public static function GetAll()
	{
		return Config::Get('fietsknelpunten', 'jurisdictions');
	}
	
	function GetFiltered($inCountryCode, $inPostalCode, $inExtraType = NULL)
	{
		$countryCode = strtoupper(trim($inCountryCode));
		$postalCode = strtoupper(trim($inPostalCode));
		
		if (is_string($inExtraType))
		{
			$type = trim($inExtraType);
			if (strlen($type) == 0)
			{
				$type = NULL;
			}
		}
		
		$jurisdictions = Jurisdictions::GetAll();
		
		$results = array();
		$otherTypes = array();
		
		foreach ($jurisdictions as $jurisdiction)
		{
			if ($jurisdiction['country'] === $countryCode)
			{
				$postalCodes =& $jurisdiction['postalcodes'];
				if (in_array($postalCode, $postalCodes))
				{
					if (isset($jurisdiction['types']))
					{
						$jurisdictionTypes = $jurisdiction['types'];
						if (!in_array($type, $jurisdictionTypes))
						{
							$otherTypes = array_values(array_unique(array_merge($jurisdictionTypes, $otherTypes)));
							continue;
						}
					}
					else if ($type)
					{
						continue;
					}
					
					$result = $jurisdiction;
					$result['confidence'] = 1.0 / count($postalCodes);
					
					$results[] = $result;
				}
			}
		}
		
		
		
		usort($results,
			function ($jurisdiction1, $jurisdiction2)
			{
				$a = $jurisdiction1['confidence'];
				$b = $jurisdiction2['confidence'];
			
				if ($a == $b)
				{
					return 0;
				}
				return ($a < $b) ? 1 : -1;
			}
		);

		return array
		(
			'jurisdictions' => $results,
			'otherTypes' => $otherTypes
		);
	}
	
};