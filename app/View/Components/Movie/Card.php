<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Card extends Component
{
    public $index;
    public $title;
    public $release_date;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($index, $title, $release_date, $image)
    {
        $this->index = $index;
        $this->title = $title;
        $this->release_date = $release_date;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->title = Str::upper($this->title);
        return view('components.movie.card');
    }
}
