<?php
/**
 * Configuration for Alfresco-Laravel connection
 */

return [
    //URL of alfresco
    'url' => env('ALFRESCO_URL', 'https://alfresco.sonergia.fr/'),
    //cmis or rest
    'api' => env('ALFRESCO_API', 'rest'),
    //alfresco api version
    'api_version' => env('ALFRESCO_API_VERSION', '1.1'),
    //Repository where the files will we uploaded
    'repository_id' => env('ALFRESCO_REPOSITORY_ID', '-default-'),
    //Folder where the files will we uploaded, must already exist in the site
    //'base_id' => env('ALFRESCO_BASE_ID',null),
    //Folder where the files will we uploaded, must already exist in the site
    'base_path' => env('ALFRESCO_BASE_PATH', '/sites'),
    //Username to acces alfresco
    'user' => env('ALFRESCO_USER', 'admin'),
    //Password to access alfresco
    'pass' => env('ALFRESCO_PASSWORD', 'admin'),
    //rename or overwrite
    'repeated_policy' => env('ALFRESCO_REPEATED_POLICY', 'rename'),
    //rename or overwrite
    'debug' => env('ALFRESCO_DEBUG', false),
    'explorer' => env('ALFRESCO_EXPLORER', false),
];

