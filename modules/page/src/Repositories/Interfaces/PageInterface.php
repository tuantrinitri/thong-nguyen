<?php

namespace Modules\Page\Repositories\Interfaces;

use Core\Supports\Repositories\Interfaces\BaseInterface;

interface PageInterface extends BaseInterface
{
    public function createPage($request);
    public function updatePage($request);
    public function getListPageWhereNotInID($id);
}
