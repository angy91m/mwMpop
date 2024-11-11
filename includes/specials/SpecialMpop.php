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

		# Do stuff
		# ...
		$wikitext = '';
		switch ($par) {
			case 'PermessiInsufficienti':
				$out->setPageTitle('Permessi insufficienti');
				$pageName = $request->getText( 'page_name' );
				$wikitext = 'Non hai i permessi per modificare la pagina' .($pageName? " [[$pageName]]" : '' );
				break;
		}
		$out->addWikiTextAsInterface( $wikitext );
	}
}