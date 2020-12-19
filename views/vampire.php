<?php

$input = [  
            'background' => '4', 
            'training' => '2', 
            'master' => '1', 
            'purpose' => '4', 
            'flaw' => '4', 
            'hobby' => '4', 
            'accessory' => '3', 
            'quote' => '4' 
        ];

$chars = new Farm\Engines\Storyteller\Clan($input);
$array = new Farm\Engines\Storyteller\Attributes($input);
$chars->setClan('/opt/lampp/htdocs/Farm/src/engines/storyteller/clans.json');
$array->setAttributes('/opt/lampp/htdocs/Farm/src/engines/storyteller/attributes.json');
var_dump($chars->getApi());
var_dump($array->getApi());