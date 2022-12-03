<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use KgBot\LaravelLocalization\Facades\ExportLocalizations as ExportLocalization;

class SinglePageController extends Controller
{
    public const AVAILABLE_LOCALE = ['ua', 'en'];
    public const INVALID_LOCALE_CODE = 400;

    /**
     * @param string $locale
     * @return Factory|View|Application
     */
    public function index(string $locale): Factory|View|Application
    {
        if (!in_array($locale, self::AVAILABLE_LOCALE)) {
            abort(self::INVALID_LOCALE_CODE);
        }

        App::setLocale($locale);

        return view('mainApp');
    }
}
