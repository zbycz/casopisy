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
     * `Route('data/thumbs/<id>-<page>[.<opts>].png', 'Files:preview');`
     *
     * @param int $id is cislo_id
     */
    public function actionPreview($id, $page, $opts = null) {
        $cislo = CisloModel::getById($id);
        $obsah = $cislo->getPage($page);
        $response = $obsah->getPreviewHttpResponse($opts);
        $this->sendResponse($response);
    }

}
