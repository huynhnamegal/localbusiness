<?php namespace EgalHTN\LocalBusiness\Components;

use Cms\Classes\ComponentBase;
use EgalHTN\LocalBusiness\Models\Settings;

class LocalBusiness extends ComponentBase
{
    public $homepage;
    public $business_name;
    public $settings_model;

    public function componentDetails()
    {
        return [
            'name'        => 'LocalBusiness Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->settings_model = Settings::instance();
        $this->homepage = Settings::get('homepage');
        $this->business_name = Settings::get('business_name');
    }
}
