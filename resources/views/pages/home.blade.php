@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'imgsrc' => 'img/banner.png',
            'imgalt' => 'Banner',
            'heading' => 'Hi there!',
            'subtext' => 'I\'m Jae, a 21-year-old web developer that specializes in PHP and Backend Development.',
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
            'class' => 'card-light'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-graduation-cap',
            'text' => 'I love learning new skills and tricks! I\'m always open to adding new web technologies and coding languages to my repertoire. The more, the merrier!',
            'class' => 'card-accent'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'fa-solid fa-clipboard-check',
            'text' => 'I\'m a dependable, hardworking developer that can adapt to any stack that is required. A part of the fun in programming is working with various technologies!',
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
            'text' => 'Learn even more about what I do and who I am in my About section.',
            'offset' => 'left',
            'imgpath' => 'img/imgtest.png',
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
            'text' => 'I\'ve worked on various projects and designs from Frontend to Backend, utilizing newly learned languages and technologies that I\'ve picked up over the past few years.',
            'offset' => 'right',
            'imgpath' => 'img/imgtest.png',
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
            'text' => 'I\'ve picked up various technologies and languages over the years that I\'ve been in education, employment as well as in my own free time.',
            'offset' => 'left',
            'imgpath' => 'img/imgtest.png',
            'button' => 'View Resume',
            'link' => '/resume'
        ]
    ]
])