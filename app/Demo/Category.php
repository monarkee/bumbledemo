<?php namespace Demo;

use Monarkee\Bumble\Models\BumbleModel;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\DateTimeField;
use Monarkee\Bumble\Fields\BooleanField;
use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fieldset\Fieldset;

class Category extends BumbleModel
{
        public $timestamps = false;
        public $showInTopNav = true;

        public $rules = [
            'title' => 'required',
        ];

        public function setFields()
        {
            return new Fieldset([
                new TextField('title'),
                new SlugField('slug', [
                    'set_from' => 'title'
                ]),
            ]);
        }
}