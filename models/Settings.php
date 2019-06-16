<?php namespace Frater260\SimpleBlog\Models;

use Model;

class Settings extends Model
{
	public $implement = ['System.Behaviors.SettingsModel'];
	public $settingsCode = 'frater260_simpleblog_settings';
	public $settingsFields = 'fields.yaml';
}
?>
