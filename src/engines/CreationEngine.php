<?php

namespace Farm\Engines;

use \InvalidArgumentException;
use Farm\Libraries\JsonHandling;

abstract class CreationEngine
{
    protected $data;
    protected $norm;
    protected $api = [];

    public function __construct(array $data, float $norm = 2.0)
    {
        $this->data = $data;
        $this->norm = $norm;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getApi(): array
    {
        return $this->api;
    }

    /**
     * Undocumented function
     *
     * @param array $a
     * @param array $b
     * @return float
     */
    public function getEuclideanDistance(array $a, array $b): float
    {
        $distance = 0;

        if(count($a) !== count($b)) 
        {
            throw new InvalidArgumentException('Errore dimensione array');
        }

        foreach($a as $key => $value)
        {
            $distance += abs((int)$a[$key] - (int)$b[$key]) ** $this->norm;
        }

        return $distance ** (1 / $this->norm);
    }
    
    /**
	 * Undocumented function
	 *
	 * @param string $path
	 * @return void
	 */
	protected function getDistances(string $path)
	{
		$file = JsonHandling::decodeFromFile($path);

		$array = $this->iteratorArray($file);

		foreach($array as $key => $value)
		{
			for($i=0; $i < count($value); $i++)
			{
				$distances[$key] = $this->getEuclideanDistance($value[$i], $this->data);
			}
		}

		return $distances;
	}

    /**
     * Undocumented function
     *
     * @param array $array
     * @return array
     */
    protected function iteratorArray(array $array): array
	{
		$data = [];

		foreach($array as $key => $value)
		{
			if(is_array($value))
			{
				foreach($value as $k => $v)
				{
					$data[$key] = $value;
				}
			}
			else
			{
				$data[$key] = $value;
			}
		}

		return $data;
	}
}
