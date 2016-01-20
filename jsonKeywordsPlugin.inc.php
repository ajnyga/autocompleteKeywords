<?php

/**
 * @file jsonKeywordsPlugin.inc.php
 *
 * Copyright (c) 2016 Antti-Jussi Nygård
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class jsonKeywordsPlugin
 * @ingroup plugins_generic_jsonKeywords
 * @brief jsonKeywords plugin class
 *
 *
 */



import('classes.plugins.GenericPlugin');

class jsonKeywordsPlugin extends GenericPlugin {

   function getName() {
        return 'jsonKeywordsPlugin';
    }

    function getDisplayName() {
        return "jsonKeywords (YSO/Finto)";
    }

    function getDescription() {
        return "Activates autocomplete function in keyword metadata fields. Hard coded to use the Finnish Finto API.";
    }
	
    function register($category, $path) {
        if (parent::register($category, $path)) {
            $this->addLocaleData();
              if ($this->getEnabled()) {
				  
                HookRegistry::register('TemplateManager::display',array(&$this, 'callback'));
            
			}
            return true;
        }
        return false;
    }
	
	function callback($hookName, $args) {

        $templateMgr =& $args[0];
		$op = Request::getRequestedOp();
        $currentJournal = $templateMgr->get_template_vars('currentJournal');

        if (!empty($currentJournal) AND (($op == 'viewMetadata') OR ($op == 'submit'))) {
			
			$additionalHeadData = $templateMgr->get_template_vars('additionalHeadData');
            $additionalHeadData .= $templateMgr->fetch('../plugins/generic/jsonKeywords/jsonKeywordsHeader.tpl');
            $templateMgr->assign('additionalHeadData', $additionalHeadData);
			
        }
        return false;
    }
   
}
?>