<?php

namespace Modules\Page\Repositories\Eloquents;

use Core\Supports\Repositories\Eloquents\BaseRepository;
use Modules\Page\Models\PageTranslation;
use Modules\Page\Repositories\Interfaces\PageTranslationInterface;

class PageTranslationRepository extends BaseRepository implements PageTranslationInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return PageTranslation::class;
    }
}
