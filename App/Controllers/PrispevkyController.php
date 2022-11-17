<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Prispevok;

class PrispevkyController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        switch ($action){
            case "delete":
            case "store":
            case "create":
            case "edit":
                return $this->app->getAuth()->isLogged();
        }
        return true;
    }

    public function index(): Response
    {
        $prispevky = Prispevok::getAll();
        return $this->html($prispevky);
    }

    public function delete() {

        $id = $this->request()->getValue('id');
        $postToDelete = Prispevok::getOne($id);
        if ($postToDelete) {
            $postToDelete->delete();
        }
        return $this->redirect("?c=prispevky");
    }

    public function store() {
        $id = $this->request()->getValue('id');
        $post = ( $id ? Prispevok::getOne($id) : new Prispevok());
        $post->setText($this->request()->getValue('text'));
        $post->save();
        return $this->redirect("?c=prispevky");
    }

    public function create() {
        return $this->html(new Prispevok(), viewName: 'create.form');

    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $postToEdit = Prispevok::getOne($id);
        return $this->html($postToEdit, viewName: 'create.form');

    }
}