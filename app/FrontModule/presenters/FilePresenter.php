<?php

namespace FrontModule;

use Nette;
use Casopisy\CisloModel;

/** Login presenter
 */
class FilePresenter extends Nette\Application\UI\Presenter {

    /** Handle thumbnail resizing and caching
     *
     * for better performance use special route like:
     * `Route('data/thumbs/<id>-<page>-<hash>[.<opts>].png', 'Files:preview');`
     *
     * @param int $id is cislo_id
     */
    public function actionPreview($id, $page, $hash, $opts = null) {
        $cislo = CisloModel::getById($id);
        $obsah = $cislo->getPage($page);

		if ($hash != $obsah->getFilesSecretHash($page, $opts)) {
			throw new \Nette\Application\BadRequestException('Špatný bezpečnostní hash');
		}

        $response = $obsah->getPreviewHttpResponse($opts);
        $this->sendResponse($response);
    }

}
