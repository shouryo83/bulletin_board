<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CommentCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     
    public $comment;
    
    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-card');
    }
}
