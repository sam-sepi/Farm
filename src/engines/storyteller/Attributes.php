<?php

namespace Farm\Engines\Storyteller;

use Farm\Engines\CreationEngine;

Class Attributes extends CreationEngine
{
    protected $physical = ['forza', 'destrezza', 'costituzione'];
    protected $social = ['carisma', 'persuasione', 'aspetto'];
    protected $mental = ['percezione', 'intelligenza', 'prontezza'];

    public function setAttributes(string $path)
	{
		$attributes = $this->getDistances($path);
        arsort($attributes);
		$ats = array_keys(array_slice($attributes, 0, 1))[0];

		shuffle($this->physical);
		shuffle($this->social);
		shuffle($this->mental);

		switch($ats)
		{
			case 'PSM':
				$this->api['attributi fisici'] = array_combine($this->physical, ['4', '3', '3']);
				$this->api['attributi sociali'] = array_combine($this->social, ['3', '3', '2']);
				$this->api['attributi mentali'] = array_combine($this->mental, ['2', '2', '2']);
			break;

			case 'PMS':
				$this->api['attributi fisici'] = array_combine($this->physical, ['4', '3', '3']);
				$this->api['attributi mentali'] = array_combine($this->mental, ['3', '3', '2']);
				$this->api['attributi sociali'] = array_combine($this->social, ['2', '2', '2']);
			break;

			case 'SMP':
				$this->api['attributi sociali'] = array_combine($this->social, ['4', '3', '3']);
				$this->api['attributi mentali'] = array_combine($this->mental, ['3', '3', '2']);
				$this->api['attributi fisici'] = array_combine($this->physical, ['2', '2', '2']);
			break;

			case 'SPM':
				$this->api['attributi sociali'] = array_combine($this->social, ['4', '3', '3']);
				$this->api['attributi fisici'] = array_combine($this->physical, ['3', '3', '2']);
				$this->api['attributi mentali'] = array_combine($this->mental, ['2', '2', '2']);
			break;

			case 'MSP':
				$this->api['attributi mentali'] = array_combine($this->mental, ['4', '3', '3']);
				$this->api['attributi sociali'] = array_combine($this->social, ['3', '3', '2']);
				$this->api['attributi fisici'] = array_combine($this->physical, ['2', '2', '2']);
			break;

			case 'MPS':
				$this->api['attributi mentali'] = array_combine($this->mental, ['4', '3', '3']);
				$this->api['attributi fisici'] = array_combine($this->physical, ['3', '3', '2']);
				$this->api['attributi sociali'] = array_combine($this->social, ['2', '2', '2']);
			break;
		}
	}
}