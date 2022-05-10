@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'normal',
            'imgsrc' => 'img/imgtest.png',
            'imgalt' => 'Banner',
            'imgcenter' => 'center-y'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
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
            'imgalt' => 'Project image'
        ],
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'spoicy.ch',
            'description' => 'My hobby website, containing various programming projects.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy.png',
            'imgalt' => 'Project image'
        ],
        [
            'block' => 'blocks/portfoliocard',
            'name' => 'suprnova.dev',
            'description' => 'A complete remake of suprnova.dev, made to be responsive.',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/suprnova.png',
            'imgalt' => 'Project image'
        ]
    ]
])