<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class LiveController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.live');
    }
}
