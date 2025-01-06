<?php

class ResourceLoaderWikiMarkdownVisualEditorModule extends MediaWiki\ResourceLoader\FileModule {

	protected $targets = [ 'desktop', 'mobile' ];

	/**
	 * @param ResourceLoaderContext $context
	 * @return string JavaScript code
	 */
	public function getScript( MediaWiki\ResourceLoader\Context $context ) {
		$scripts = parent::getScript( $context );

		return $scripts;
	}

	/**
	 * @return bool
	 */
	public function enableModuleContentVersion() {
		return true;
	}

	/**
	 * @return bool
	 */
	public function supportsURLLoading() {
		return false;
	}
}
