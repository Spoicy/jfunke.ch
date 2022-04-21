@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'imgsrc' => 'img/banner.png',
            'imgalt' => 'Banner',
            'heading' => 'Hi there!',
            'subtext' => 'I\'m a 21-year-old web developer that specializes in PHP and Backend Development.',
            'textdir' => 'left'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-code',
            'text' => 'I\'m an experienced web developer in PHP Frameworks and Backend Development, with an interest in becoming experienced in Frontend. As long as I\'m writing code, I\'ll be worth your time.',
            'class' => 'card-accent'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-graduation-cap',
            'text' => 'I love learning new skills and tricks! I\'m always open to adding new web technologies and coding languages to my repertoire. The more, the merrier!',
            'class' => 'card-light'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-clipboard-check',
            'text' => 'I\'m a dependable, hardworking developer that can adapt to any stack that is required. A part of the fun in programming is working with various technologies!',
            'class' => 'card-neutral'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/offset',
            'heading' => 'Projects',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
            'offset' => 'left',
            'button' => 'View portfolio',
            'link' => '/portfolio'
        ]
    ]
])