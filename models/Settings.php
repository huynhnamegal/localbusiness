<?php namespace EgalHTN\LocalBusiness\Models;

use Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'egalhtn_localbusiness_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attachMany = [
        'images' => \System\Models\File::class
    ];

    public $rules = [
        'business_name'     => 'required',
        'telephone'         => 'required',
        'streetAddress'     => 'required',
        'addressLocality'   => 'required',
        'addressRegion'     => 'required',
        'postalCode'        => 'required',
        'addressCountry'    => 'required'
    ];

    /**
     * @return array List of page from CMS
     */
    public function getHomepageOptions()
    {
        return \Cms\Classes\Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
}