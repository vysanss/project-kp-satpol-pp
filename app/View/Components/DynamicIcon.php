<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class DynamicIcon extends Component
{
    public $name;
    public $class;

    public function __construct($name, $class = '')
    {
        $this->name = $name;
        $this->class = $class;
    }

    public function render()
    {
        $svgPath = resource_path("svg/icons/{$this->name}.svg");
        if (File::exists($svgPath)) {
            $svg = File::get($svgPath);
            // Tambahkan class ke tag <svg>
            $svg = preg_replace('/<svg([^>]*)class="([^"]*)"/', '<svg$1class="$2 ' . $this->class . '"', $svg, 1);
            if (!preg_match('/class="/', $svg)) {
                $svg = preg_replace('/<svg([^>]*)>/', '<svg$1 class="' . $this->class . '">', $svg, 1);
            }
            return function () use ($svg) {
                return $svg;
            };
        }
        // fallback: show nothing
        return function () {
            return '';
        };
    }
}
