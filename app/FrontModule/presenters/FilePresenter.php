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

		// špatný hash - může být starý nebo si někdo hrál s URL
		if ($hash != $obsah->getFilesSecretHash($page, $opts)) {
			$this->context->httpResponse->setCode(404);
			$filename = $this->context->parameters['staticDir'] . '/images/chyba404.png';
			$this->sendResponse(new \Casopisy\ImageResponse(file_get_contents($filename)));
		}

        $response = $obsah->getPreviewHttpResponse($opts);
        $this->sendResponse($response);
    }

}
