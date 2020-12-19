<?php

namespace Farm\Engines\Storyteller;

use Farm\Engines\CreationEngine;

class Clan extends CreationEngine
{

    /**protected $talents = ['atletica', 'autorità', 'bassifondi', 'consapevolezza', 'empatia', 'espressività', 
            'intimidire', 'rissa', 'sesto senso', 'sotterfugio'];

    protected $skills = ['affinità animale', 'armi da fuoco', 'armi da mischia', 'criminalità', 
            'espressione artistica', 'furtività', 'galateo', 'guidare', 'manualità', 'sopravvivenza'];

    protected $knowledges = ['accademica', 'finanza', 'informatica', 'investigare', 'legge', 
            'medicina', 'occulto', 'politica', 'scienze', 'tecnologia'];*/

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
}