<?php
/* 
 * Mooz Template | By zJerino
 * NamelessMC v2 pre9
*/

class Mooz_Template extends TemplateBase {
    private $_language, $_user, $_pages, $_template, $_cache, $_smarty;

    public function __construct($cache, $smarty, $language, $user, $pages){
        $Mooz_General = $GLOBALS['Mooz_General'];
        $template = array(
            'name' => 'Mooz',
            'version' => '2.0.0-pre1',
            'nl_version' => NAMELESS_VERSION,
            'author' => '<a href="https://discord.gg/dxSwRVM6n9" class="badge badge-warning" target="_blank">zJesush</a>',
            'path' => (defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Mooz/',
            'assets' => (defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Mooz/core/assets/',
        );
        $NamelessMC['core']['assets'] =  (defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/';
        parent::__construct($template['name'], $template['version'], $template['nl_version'], $template['author']);

        $this->addCSSFiles(array(
            //Soon
        ));
        
        $this->addJSFiles(array(
            // Soon
        ));

        $this->_settings = ROOT_PATH . '/custom/templates/Mooz/core/panel/index.php';
        
        $smarty->assign(array(
            'TEMPLATE' => $template,
        ));
        
        $JSVars = '';
        $i = 0;
        foreach ($JSVariables as $var => $value) {
            $JSVars .= ($i == 0 ? 'var ' : ', ') . $var . ' = "' . $value . '"';
            $i++;
        }
        $this->addJSScript($JSVars);
    }

    public function getSettings(){
        return $this->_settings;
    }

    public function onPageLoad() {}
}
$template = new Mooz_Template($cache, $smarty, $language, $user, $pages);
