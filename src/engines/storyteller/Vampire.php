<?php

namespace Farm\Engines\Storyteller;

use Farm\Engines\CreationEngine;

class Vampire extends CreationEngine
{

    protected $talents = ['atletica', 'autorità', 'bassifondi', 'consapevolezza', 'empatia', 'espressività', 
            'intimidire', 'rissa', 'sesto senso', 'sotterfugio'];

    protected $skills = ['affinità animale', 'armi da fuoco', 'armi da mischia', 'criminalità', 
            'espressione artistica', 'furtività', 'galateo', 'guidare', 'manualità', 'sopravvivenza'];

    protected $knowledges = ['accademica', 'finanza', 'informatica', 'investigare', 'legge', 
            'medicina', 'occulto', 'politica', 'scienze', 'tecnologia'];

	protected $physical = ['forza', 'destrezza', 'costituzione'];
	protected $social = ['carisma', 'persuasione', 'aspetto'];
	protected $mental = ['percezione', 'intelligenza', 'prontezza'];

	/**
	 * Undocumented function
	 *
	 * @param string $path
	 * @return void
	 */
	public function setClan(string $path)
	{
		$clans = $this->getDistances($path);
		asort($clans);
		$this->api['clan'] = array_keys(array_slice($clans, 0, 1))[0];
	}

	/**
	 * Undocumented function
	 *
	 * @param string $path
	 * @return void
	 */
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

	public function setSkills(string $path)
	{
		$skills = $this->getDistances($path);
        arsort($skills);
		$sks = array_keys(array_slice($skills, 0, 1))[0];

		shuffle($this->talents);
		shuffle($this->skills);
		shuffle($this->knowledges);

		switch($sks)
		{
			case 'PSM':
				$this->api['attitudini'] = array_combine($this->talents, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['abilità'] = array_combine($this->skills, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['conoscenze'] = array_combine($this->knowledges, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;

			case 'PMS':
				$this->api['attitudini'] = array_combine($this->talents, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['conoscenze'] = array_combine($this->knowledges, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['abilità'] = array_combine($this->skills, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;

			case 'SMP':
				$this->api['abilità'] = array_combine($this->skills, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['conoscenze'] = array_combine($this->knowledges, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['attitudini'] = array_combine($this->talents, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;

			case 'SPM':
				$this->api['abilità'] = array_combine($this->skills, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['attitudini'] = array_combine($this->talents, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['conoscenze'] = array_combine($this->knowledges, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;

			case 'MSP':
				$this->api['conoscenze'] = array_combine($this->knowledges, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['abilità'] = array_combine($this->skills, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['attitudini'] = array_combine($this->talents, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;

			case 'MPS':
				$this->api['conoscenze'] = array_combine($this->knowledges, ['3', '3', '2', '2', '2', '1', '0', '0', '0', '0']);
				$this->api['attitudini'] = array_combine($this->talents, ['3', '2', '2', '1', '1', '0', '0', '0', '0', '0']);
				$this->api['abilità'] = array_combine($this->skills, ['2', '2', '1', '0', '0', '0', '0', '0', '0', '0']);
			break;
		}
	}
}