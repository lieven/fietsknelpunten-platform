<?php

class ApiModule extends AbstractApiModule
{
	private static $parameters = array
	(
		'list' => array(),
		'tags' => array()
	);
	
	function __construct()
	{
		parent::__construct('api');
	}
	
	protected function getActionParameters($inAction)
	{
		if (isset(self::$parameters[$inAction]))
		{
			return self::$parameters[$inAction];
		}
		else
		{
			return NULL;
		}
	}
	
	protected function checkPermissions($inAction)
	{
		return true;
	}
	
	function listAction()
	{
		$list = array(
			'apples',
			'oranges'
		);
	
		$this->outputJson($list);
	}
	
	// temporary function until tags are available in database
	private function tags()
	{
		$groupID = 1;
		$tagID = 1;
		
		$group = function($name, $tagsArray) use(&$groupID)
		{
			return array
			(
				'id' => $groupID++,
				'name' => $name,
				'tags' => $tagsArray
			);
		};
		
		$tag = function($name, $info) use(&$tagID)
		{
			return array
			(
				'id' => $tagID++,
				'name' => $name,
				'info' => $info
			);
		};
		
		$results = array
		(
			$group('Staat van het wegdek', array(
				$tag('Put', 'Een put, ophoping, verzakking of scheur in het wegdek verhoogt het risico op vallen'),
				$tag('Afwatering', 'Bij regenweer is er een slechte afwatering met vorming van plassen op het fietspad'),
				$tag('Gevaarlijke rand', 'Overgangen met niveauverschil (bv. boordstenen) zijn te hoog'),
				$tag('Begroeiing', 'Bermbegroeiing woekert en versmalt het fietspad'),
				$tag('Glas', 'Er ligt glas op het fietspad met gevaar voor lekrijden'),
				$tag('Wegdek: andere', 'Te specifiëren in beschrijving')
			)),
			$group('Signalisatie', array( 
				$tag('Wegmarkeringen', 'Wegmarkeringen die het fietspad aanduiden ontbreken of zijn slecht zichtbaar'),
				$tag('Oversteekplaats', 'Wegmarkeringen die een fietsoversteekplaats aanduiden zijn slecht zichtbaar'),
				$tag('Verkeersborden', 'Verkeersborden die het fietspad aanduiden ontbreken of zijn in slechte staat'),
				$tag('Verkeerslicht', 'Een verkeerslicht is defect of niet correct afgesteld'),
				$tag('Onduidelijk', 'De gebruikte signalisatie is niet reglementair of de voorrangssituatie is onduidelijk'),
				$tag('Signalisatie: andere')
			)),
		);
		
		return $results;
	}
	
	
	function tagsAction()
	{
		$results = $this->tags();
		$this->outputJson($results);
	}
}