<?php

/**
 * @defgroup plugins_generic_jsonKeywords
 */
 
/**
 * @file plugins/generic/jsonKeywords/index.php
 *
 * Copyright (c) 2016 Antti-Jussi Nygård
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_jsonKeywords
 * @brief Wrapper for jsonKeywords plugin.
 *
 */


require_once('jsonKeywordsPlugin.inc.php');

return new jsonKeywordsPlugin();

?>
