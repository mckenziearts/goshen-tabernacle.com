<?php

namespace Modules\Core\Http\Controllers\CPanel;

use Hexadog\ThemesManager\Facades\ThemesManager;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        ThemesManager::set('goshen/admin');

        view()->share('currentUser', Auth::user());
    }
}
