<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   chesstable
 * Version    1.0.0
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

namespace Schachbulle\ContaoFlickrBundle\ContentElements;

class Flickr extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_flickr';

	/**
	 * Generate the module
	 */
	protected function compile()
	{

		// Parameter zuweisen
		$csv = $this->chesstable_csv;
		$file = $this->chesstable_file;
			// Template ausgeben
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->class = "ce_chesstable";
			$this->Template->tabelle = $content;
			$this->Template->datum = $aktdatum;
			$this->Template->turnierende = $this->chesstable_ende;
			$this->Template->hinweis = $this->chesstable_note;

		return;

	}

}
?>