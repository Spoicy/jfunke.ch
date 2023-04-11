@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'home',
            'imgsrc' => '/img/banner.png',
            'imgalt' => 'Banner',
            'heading' => 'Hi there!',
            'subtext' => 'I\'m Jae, a 22-year-old web developer that specializes in PHP and backend development.',
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
            'text' => 'I have multiple years in PHP frameworks and backend development, as well as an interest in becoming experienced in Frontend.',
            'class' => 'card-light'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-graduation-cap',
            'text' => 'I love learning new skills and tricks! I\'m always open to adding new web technologies and coding languages to my repertoire.',
            'class' => 'card-accent'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-clipboard-check',
            'text' => 'I\'m a dependable, hardworking, and passionate developer that can adapt to any stack or technology that is required.',
            'class' => 'card-light'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/offset',
            'heading' => 'About me',
            'text' => 'Learn even more about what I do and who I am here.',
            'offset' => 'left',
            'imgpath' => 'https://spoicy.ch/upload/jfu/about-banner-small.jpg',
            'button' => 'More about Jae',
            'link' => '/about'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/offset',
            'heading' => 'Projects',
            'text' => 'I\'ve worked on various projects and designs from frontend to backend, utilizing newly learned languages and technologies that I\'ve picked up over the past few years.',
            'offset' => 'right',
            'imgpath' => 'https://spoicy.ch/upload/jfu/portfolio-banner-small.jpg',
            'button' => 'View portfolio',
            'link' => '/portfolio'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/offset',
            'heading' => 'Resume',
            'text' => 'I\'ve picked up various technologies and languages over the years that I\'ve been in education and employment, as well as in my own free time.',
            'offset' => 'left',
            'imgpath' => 'https://spoicy.ch/upload/jfu/resume-banner-small.jpg',
            'button' => 'View resume',
            'link' => '/resume'
        ]
    ]
])