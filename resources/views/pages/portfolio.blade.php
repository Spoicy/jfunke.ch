@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'normal',
            'imgsrc' => 'img/imgtest.png',
            'imgalt' => 'Banner',
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'gap' => 'compact',
    'blocks' => [
        [
            'block' => 'blocks/heading',
            'textdir' => 'left',
            'heading' => 'Portfolio',
            'text' => [
                ''
            ]
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'override' => ['lg' => 3, 'md' => 2, 'xs' => 1],
    'blocks' => [
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'jfunke.ch',
            'description' => 'The very website you\'re currently on, made entirely with Laravel.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/jfunke.png',
            'imgalt' => 'Project image',
            'link' => '/portfolio/jfunke'
        ],
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'spoicy.ch',
            'description' => 'My hobby website, containing various programming projects.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy.png',
            'imgalt' => 'Project image',
            'link' => '/portfolio/spoicy'
        ],
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'suprnova.dev',
            'description' => 'A complete rework of Suprnova\'s website.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/suprnova.png',
            'imgalt' => 'Project image',
            'link' => '/portfolio/suprnova-dev'
        ],
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'Moodle Plugins',
            'description' => 'Various Moodle Plugins, developed for Kantonsschule Frauenfeld.',
            'imgsrc' => '/img/imgtest.png',
            'imgalt' => 'Project image',
            'link' => '/portfolio/moodle'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/text',
            'text' => [
                'If you\'re interested in working with me to create your next big website, please get in contact with me via the <a href="/contact" target="_blank">Contact</a> page. Whether that be complete overhauls or just a fresh coat of paint, I\'ll be glad to assist you on whatever needs to get done.',
                'If you are looking for my programming side, feel free to visit my <a href="https://github.com/Spoicy" target="_blank">GitHub profile</a>. It contains most of my ongoing and finished projects, as well as all my contributions to other repositories.'
            ]
        ]
    ]
])