<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str; 

class Article extends Component
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = Str::limit($description, 30);
    }

    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}