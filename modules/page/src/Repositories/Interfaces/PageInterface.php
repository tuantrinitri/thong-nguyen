<?php

namespace Modules\Page\Repositories\Interfaces;

use Core\Supports\Repositories\Interfaces\BaseInterface;
use Modules\Page\Http\Requests\PageRequest;

interface PageInterface extends BaseInterface
{
    public function createPage(PageRequest $request);
    public function editPage(PageRequest $request, int $id);
    public function getListPageWhereNotInID(int $id);
    public function getDetailsPageBySlug(string $slug);
}
