<?php

class CreationEngine
{
    protected $data;
    protected $norm;
    protected $api = [];

    public function __construct(array $data, float $norm = 2.0)
    {
        $this->data = $data;
        $this->norm = $norm;
    }

    public function getApi(): array
    {
        return $this->api;
    }

    public function getDistance(array $a, array $b): float
    {
        $distance = 0;

        if (count($a) !== count($b)) 
        {
            throw new InvalidArgumentException('Errore dimensione array');
        }

        foreach($a as $key => $value)
        {
            $distance += abs($a[$key] - $b[$key]) ** $this->norm;
        }

        return $distance ** (1 / $this->norm);
    }
    
}

$a = ['foo' => 1, 'bar' => 2, 'hello' => 4, 'world' => 68];
$b = ['foo' => 12, 'bar' => 2, 'hello' => 46, 'world' => 68];

$dist = new CreationEngine($data = []);
echo $dist->getDistance($a, $b);