<?php

namespace Sonergia\AlfrescoLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Alfresco
 * @package Sonergia\AlfrescoLaravel\Facades
 */
class Alfresco extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'alfresco';
    }
}
