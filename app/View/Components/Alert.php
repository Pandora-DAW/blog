<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        switch ($type) {
            case 'success':
                $this->class = 'Success!';
                break;
            case 'error':
                $this->class = 'Error!';
                break;
            case 'warning':
                $this->class = 'Warning!';
                break;
            default:
                $this->class = 'Info:';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
