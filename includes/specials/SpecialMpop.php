<?php

class SpecialMpop extends \SpecialPage {
	public function __construct() {
		parent::__construct( 'Mpop' );
	}

	public function execute( $par ) {
		$request = $this->getRequest();
		$out = $this->getOutput();
		$this->setHeaders();

		# Get request data from, e.g.
		// $param = $request->getText( 'param' );

		# Do stuff
		# ...
		$wikitext = '';
		switch ($par) {
			case 'PermessiInsufficienti':
				$out->setPageTitle('Permessi insufficienti');
				$wikitext = 'Non hai i permessi per modificare questa pagina';
				break;
		}
		$out->addWikiTextAsInterface( $wikitext );
	}
}