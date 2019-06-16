<?php namespace Frater260\Simpleblog\Components;

use Cms\Classes\ComponentBase;
use Lang;
use Frater260\SimpleBlog\Models\BlogEntry;
use Frater260\SimpleBlog\Models\Settings;

class Post extends ComponentBase
{
	public $blogentry;

	public function componentDetails()
	{
		return [
			'name'        => 'Post Component',
			'description' => 'Displays single post'
		];
	}

	public function defineProperties()
	{
		return [
			'withCategory' => [
				'title' => Lang::get('frater260.simpleblog::lang.settings.withCategory'),
				'description' => Lang::get('frater260.simpleblog::lang.settings.withCategoryDescription'),
				'default' => Settings::get('with_category'),
				'type' => 'checkbox'
			],
			'withAuthor' => [
				'title' => Lang::get('frater260.simpleblog::lang.settings.withAuthor'),
				'description' => Lang::get('frater260.simpleblog::lang.settings.withAuthorDescription'),
				'default' => Settings::get('with_author'),
				'type' => 'checkbox',
			],
			'urlParameter' => [
				'title' => Lang::get('frater260.simpleblog::lang.settings.postUrlParameter'),
				'description' => Lang::get('frater260.simpleblog::lang.settings.postUrlParameterDescription'),
				'deafult' => Settings::get('url_parameter'),
			]
		];
	}

	public function onRender() {
		$post = BlogEntry::where('id', '=', $this->param($this->property('urlParameter')))->first();
		$this->blogentry = [
			'id' => $post->id,
			'title' => $post->title,
			'category' => $post->category->name,
			'created_at' => $post->created_at,
			'author' => Settings::get('author'),
			'summary' => $post->summary,
			'text' => $post->text,
		];
		return $this->renderPartial('@post.htm', ['blogentry' => $this->blogentry]);
	}
}
