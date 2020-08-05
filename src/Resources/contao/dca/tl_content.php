<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'flickr_lightbox';
$GLOBALS['TL_DCA']['tl_content']['palettes']['flickr'] = '{type_legend},type,headline;{flickr_legend_csv},flickr_csv;{flickr_legend_aufab},flickr_aufsteiger,flickr_absteiger,flickr_markieren;{flickr_legend_lightbox},flickr_lightbox;{flickr_legend_optionen},flickr_namendrehen,flickr_flaggen,flickr_date,flickr_ende,flickr_note;{protected_legend:hide},protected;{expert_legend:hide},guest,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['flickr_lightbox'] = 'flickr_linktext,flickr_hinweis';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_csv'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_csv'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array
	(
		'allowHtml'           => true,
		'class'               => 'monospace',
		'rows'                => 30,
		'rte'                 => 'ace',
		'helpwizard'          => true
	),
	'explanation'             => 'flickr_csv',
	'sql'                     => "mediumtext NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_file'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_file'],
	'inputType'               => 'fileTree',
	'eval'                    => array
	(
		'files'               => true,
		'filesOnly'           => true,
		'fieldType'           =>'radio',
		'extensions'          => 'csv,txt',
		'maxlength'           => 255,
		'helpwizard'          => true
	),
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_aufsteiger'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_aufsteiger'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'long',
		'maxlength'           => 255,
		'helpwizard'          => true,
	),
	'explanation'             => 'flickr_aufsteiger',
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_absteiger'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_absteiger'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'long',
		'maxlength'           => 255,
		'helpwizard'          => true,
	),
	'explanation'             => 'flickr_absteiger',
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_markieren'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_markieren'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'long',
		'maxlength'           =>255,
		'helpwizard'          => true,
	),
	'explanation'             => 'flickr_markieren',
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_namendrehen'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_namendrehen'],
	'inputType'               => 'checkbox',
	'eval'                    => array
	(
		'tl_class'            => 'w50',
		'isBoolean'           => true,
		'helpwizard'          => true,
	),
	'explanation'             => 'Hilfetext',
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_flaggen'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_flaggen'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_date'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_date'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_ende'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_ende'],
	'inputType'               => 'text',
	'exclude'                 => false,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 8,
	'filter'                  => true,
	'eval'                    => array
	(
		'rgxp'                => 'date',
		'datepicker'          => true,
		'tl_class'            => 'w50 wizard',
		'doNotCopy'           => true
	),
	'sql'                     => "varchar(11) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_note'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_note'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'w50 long',
		'maxlength'           => 255,
	),
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_lightbox'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_lightbox'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr','isBoolean' => true,'submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_hinweis'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_hinweis'],
	'eval'                    => array('tl_class'=>'long clr'),
	'input_field_callback'    => array('tl_flickr', 'jshinweis'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flickr_linktext'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flickr_linktext'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=> 'w50 clr', 'maxlength'=>32),
	'sql'                     => "varchar(32) NOT NULL default ''",
);

class tl_flickr extends Backend
{

	public function jshinweis(DataContainer $dc)
	{
		return '<div class="tl_message clr">
			<p class="tl_info">'.sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'j_colorbox').'</p>
			</div>';
	}
}

?>
