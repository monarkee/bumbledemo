<?php namespace Demo;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Monarkee\Bumble\Models\BumbleModel;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\DateTimeField;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fieldset\Fieldset;

class Post extends BumbleModel
{
        use SoftDeletingTrait;

        public $showInTopNav = true;

        public $description = 'Pages for the different sections of the website';

        public $rules = [
            'title' => 'required',
            'content' => 'required',
            'active' =>  'required',
        ];

        public function setFields()
        {
            return new Fieldset([
                'content' => [
                    new TextField('title'),
                    new SlugField('slug', [
                        'set_from' => 'title',
                    ]),
                    new TextareaField('excerpt', [
                        'show_in_listing' => false,
                        'widget' => 'WYSIWYGField'
                    ]),
                    new TextareaField('content', [
                        'widget' => 'WYSIWYGField'
                    ]),
                ],
                'meta' => [
                    new BooleanField('active'),
                    new TextField('sort'),
                    new DateTimeField('published_at', [
                        'show_in_listing' => false,
                    ]),
                    new DateTimeField('created_at', [
                        'show_in_listing' => false,
                    ]),
                    new DateTimeField('updated_at', [
                        'show_in_listing' => false,
                    ]),
                ],
            ]);
        }
}