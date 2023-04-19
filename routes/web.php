<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('webpage', [
        'title' => 'Homepage',
        'template' => 'pages/home',
        'nav' => 'hHome'
    ]);
});

Route::get('/about/', function () {
    return view('webpage', [
        'title' => 'About me',
        'template' => 'pages/about',
        'nav' => 'hAbout'
    ]);
});

Route::get('/portfolio/', function () {
    return view('webpage', [
        'title' => 'Portfolio',
        'template' => 'pages/portfolio',
        'nav' => 'hPortfolio'
    ]);
});
/* TEMPORARY: Calls to database will be made here in final version */
Route::get('/portfolio/{name}', function($name) {
    switch ($name) {
        case 'spoicy':
            $title = 'spoicy.ch';
            break;
        case 'jfunke':
            $yaml = Yaml::parse(file_get_contents(asset('/yaml/project/jfunke.yaml')))['project'];
            $data = [
                'block' => 'blocks/portfoliofull',
                'name' => $yaml['name'],
                'description' => [],
                'gallery' => []
            ];
            $keys = ['description', 'gallery'];
            foreach ($keys as $key) {
                foreach ($yaml[$key] as $item) {
                    array_push($data[$key], $item);
                }
            }
            return view('webpage', [
                'title' => $yaml['name'],
                'template' => 'pages/project',
                'nav' => 'hPortfolio',
                'data' => ['name' => $name, 'yaml' => $data]
            ]);
            break;
        case 'suprnova-dev':
            $title = 'suprnova.dev';
            break;
        case 'moodle':
            $title = 'Moodle Plugins';
            break;
        default:
            $title = 'Not found';
    }
    return view('webpage', [
        'title' => $title,
        'template' => 'pages/project',
        'nav' => 'hPortfolio',
        'data' => ['name' => $name]
    ]);
});

Route::get('/contact/', function() {
    return view('webpage', [
        'title' => 'Contact',
        'template' => 'pages/contact',
        'nav' => 'hContact'
    ]);
});

Route::middleware(['throttle:email'])->group(function() {
    Route::post('/contact/submit', 'App\Http\Controllers\Contact@processContact');
});


Route::get('/resume/', function() {
    return view('webpage', [
        'title' => 'Resume',
        'template' => 'pages/resume',
        'nav' => 'hResume'
    ]);
});