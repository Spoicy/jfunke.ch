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
    $yaml = Yaml::parse(file_get_contents(asset("/yaml/project/$name.yaml")))['project'];
    if (!$yaml) {
        return view('webpage', [
            'title' => 'Not found',
            'template' => 'pages/project',
            'nav' => 'hPortfolio',
            'data' => ['yaml' => [
                'block' => 'blocks/heading',
                'heading' => 'Project not found',
                'text' => ['No project was found at this URL.'],
                'textdir' => 'left'
            ]]
        ]);
    }
    $data = [
        'block' => 'blocks/portfoliofull',
        'name' => $yaml['name'],
    ];
    $keys = ['description', 'gallery', 'links', 'initial', 'finish'];
    foreach ($keys as $key) {
        if (!isset($yaml[$key])) {
            continue;
        }
        $data[$key] = [];
        foreach ($yaml[$key] as $item) {
            array_push($data[$key], $item);
        }
    }
    return view('webpage', [
        'title' => $yaml['name'],
        'template' => 'pages/project',
        'nav' => 'hPortfolio',
        'data' => ['yaml' => $data]
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