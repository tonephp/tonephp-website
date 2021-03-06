<?php

namespace app\controllers;

use core\base\View;

class DocsController extends AppController {
    
    public function indexAction() {

       View::setMeta(
           __('docs_page_title') . " | TonePHP Framework"
       );

       $alias = $this->route['alias'] ?? 'get-started';

       $docContent = View::loadView("pages/Docs/pages/{$alias}");

       $this->set(compact('docContent'));
    }
}