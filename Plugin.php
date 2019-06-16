<?php namespace Frater260\SimpleBlog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'\Frater260\Simpleblog\Components\Post' => 'post',
			'\Frater260\Simpleblog\Components\PostList' => 'postList',
		];
    }

    public function registerSettings()
    {
		return [
			'settings' => [
				'label' => 'frater260.simpleblog::lang.labels.settings.name',
				'description' => 'frater260.simpleblog::lang.labels.settings.description',
				'category' => 'Simple Blog',
				'icon' => 'icon-edit',
				'class' => '\Frater260\SimpleBlog\Models\Settings',
				'order' => 500,
				'keywords' => 'post author',
			]
		];
    }
}
