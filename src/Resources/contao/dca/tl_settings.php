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
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{flickr_legend:hide},flickr_blindfelder,flickr_nationfelder,flickr_platzfelder,flickr_vereinfelder,flickr_namenfelder,flickr_punktefelder,flickr_wertungfelder,flickr_ratingfelder,flickr_ergebnisfelder,flickr_farbfelder,flickr_steuerfelder';

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_blindfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_blindfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_nationfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_nationfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_platzfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_platzfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_vereinfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_vereinfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_namenfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_namenfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_punktefelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_punktefelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_wertungfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_wertungfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_ratingfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_ratingfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_ergebnisfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_ergebnisfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_farbfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_farbfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['flickr_steuerfelder'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['flickr_steuerfelder'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50')
);

?>
