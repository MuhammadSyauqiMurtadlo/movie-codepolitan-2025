<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class Card extends Component
{
    public $index;
    public $title;
    public $releaseDate;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($index, $title, $releaseDate, $image)
    {
        $this->index = $index;
        $this->title = $title;
        $this->releaseDate = $releaseDate;
        $this->image = $image;

        if ($this->isValid()) {
            $this->title = Str::upper($title);
            $this->releaseDate = Carbon::parse($releaseDate)->format('Y-m-d');
        }
    }

    public function isValid(): bool
    {
        return $this->title && $this->releaseDate && $this->image;
    }

    public function getImage(): string
    {
        // Assuming the image is stored in the public/images directory
        return 'https://via.placeholder.com/150?text=' . urlencode($this->image);
    }

    public function isReleaseDate(): bool
    {
        // Format the release date to a more readable format
        return Carbon::parse($this->releaseDate)->format('F j, Y');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (!$this->isValid()) {
            return 'Invalid movie data';
        }
        return view('components.movie.card');
    }
}
