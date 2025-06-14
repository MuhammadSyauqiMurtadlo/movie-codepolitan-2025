<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $this->title = Str::upper($title);
        $this->release_date = Carbon::parse($release_date)->format('Y-m-d');
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie.card');
    }
}
