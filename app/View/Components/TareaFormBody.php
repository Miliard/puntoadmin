<?php

namespace App\View\Components;

use App\Models\Tarea;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\Tarea $tarea
     */
    public function __construct( $tarea = null)
    {
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params =
        [
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS,

        ];

        return view('components.tarea-form-body', $params);
    }
}
