<?php namespace EgalHTN\LocalBusiness;

use Backend;
use System\Classes\PluginBase;

/**
 * LocalBusiness Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'LocalBusiness',
            'description' => 'LocalBusiness schema for structured data',
            'author'      => 'EgalHTN',
            'icon'        => 'icon-building'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'EgalHTN\LocalBusiness\Components\LocalBusiness' => 'localbusiness',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'egalhtn.localbusiness.access_settings' => [
                'tab' => 'LocalBusiness',
                'label' => 'Access Settings'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label'       => 'LocalBusiness',
                'description' => 'Setting LocalBusiness schema for website',
                'category'    => 'Structured Data',
                'icon'        => 'icon-building',
                'class'       => 'EgalHTN\LocalBusiness\Models\Settings',
                'order'       => 500,
                'keywords'    => 'localbusiness settings',
                'permissions' => ['egalhtn.localbusiness.access_settings']
            ]
        ];
    }
}
