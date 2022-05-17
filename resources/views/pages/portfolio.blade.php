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
            'description' => 'A complete rework of Suprnova\'s linktree page.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/suprnova.png',
            'imgalt' => 'Project image',
            'link' => '/portfolio/suprnova-dev'
        ]
    ]
])