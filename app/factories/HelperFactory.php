<?php

/**
 * Description of HelpersFactory
 *
 * @author Jiří Dorazil
 */
use Nette\Latte\Engine,
    Nette\Latte\Macros\MacroSet;        

class HelperFactory {

    public function templatePrepareFilters($template) {
        $latte = new Engine;
        $template->registerFilter($latte);
        $set = MacroSet::install($latte->compiler);
        //$set->addMacro('ilink', ImageHelpers::getMacroString('ilink'));
        //$set->addMacro('eimg', ImageHelpers::getMacroString('eimg'));


        $set->addMacro('replicator', '
            $args = array(%node.args);
            $containerReplicator = $args[0];
            $renderParams = array_slice($args, 1);
            echo $containerReplicator->render($renderParams);
        ');
        
        return $latte;
    }

    public function createFormErrorsMakro() {
        return

                '$tmpForm = isset($_form) ? $_form : $form;

            ?><ul class="error"><?php
            $allErrors = array();
            foreach ($tmpForm->getControls() as $tmpControl) {
                if ($tmpControl->getErrors()) {
                    foreach ($tmpControl->getErrors() as $error) {
                        $allErrors[] = $error;
                    }
                    echo "<li><span class=\"icon-info-sign\" title=\"" . htmlSpecialChars($template->translate($tmpControl->caption)) . "\"></span>" . implode(", ", $tmpControl->getErrors()) . "</li>";
                }
            }
            foreach ($tmpForm->getErrors() as $error) {
                if (!in_array($error, $allErrors)) {
                    echo "<li><span class=\"icon-info-sign\" title=\"\"></span>" . $error . "</li>";
                }
            }
            ?></ul><?php';
    }

}