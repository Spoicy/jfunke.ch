@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'normal',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/resume-banner.jpg',
            'imgalt' => 'Banner'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/heading',
            'heading' => 'Resume',
            'text' => [
                'On this page, you\'ll see the various languages, frameworks, tools, and technologies that I have experience with. The ones I am most experienced with have their own detailed section. A copy of my resume can be found right below, and a complete list of everything I know can be found near the bottom of the page.'
            ],
            'files' => [
                [
                    'name' => 'Resume',
                    'type' => 'pdf',
                    'path' => 'https://spoicy.ch/upload/jfu/resume-english.pdf'
                ]
            ]
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'gap' => 'compact',
    'blocks' => [
        [
            'block' => 'blocks/subheading',
            'subheadings' => [
                [
                    'type' => 'img',
                    'textdir' => 'right',
                    'subheading' => 'PHP',
                    'text' => [
                        'PHP has been my bread and butter ever since I first started learning it in school back in 2017. It\'s my go-to language for whenever I want to get something done quickly, as it feels just like home and allows me to work at peak performance.',
                        'Many of my projects, including this very website, are built with PHP. My work experience gave me the opportunity to really delve deep into it, as well as how to work as efficiently as possible, using all of its quirks to my advantage. If you need a PHP specialist, I\'m sure that I won\'t disappoint.'
                    ],
                    'imgsrc' => 'https://spoicy.ch/upload/jfu/php.jpg',
                    'imgalt' => 'Image',
                    'imgcredit' => '<a href="https://www.php.net/download-logos.php">"PHP logo"</a> by Colin Viebrock is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>'
                ],
                [
                    'type' => 'img',
                    'textdir' => 'left',
                    'subheading' => 'Frontend',
                    'text' => [
                        'Building unique and modern-looking websites using the basics has always been something that I\'ve enjoyed when doing webdev. Whether it\'s HTML, CSS, or JS, finding elegant solutions to make things look professional is one of the key factors necessary to be an experienced web developer.',
                        'In terms of frontend libraries and frameworks, I am currently in the process of learning Vue.js, as many of the open source projects I\'m interested in use it. In the future, I hope to also add React to my arsenal of technologies as well.'
                    ],
                    'imgsrc' => 'https://spoicy.ch/upload/jfu/frontend.jpg',
                    'imgalt' => 'Image'
                ],
                [
                    'type' => 'text',
                    'textdir' => 'left',
                    'subheading' => 'Complete list',
                    'text' => [
                        'Here is a complete list of everything I know. The list is sorted by how experienced I am with the specified technology.'
                    ]
                ]
            ]
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/card',
            'type' => 'list',
            'heading' => 'Languages',
            'list' => [
                'PHP',
                'HTML/CSS/SCSS',
                'SQL',
                'JavaScript',
                'C#',
                'Java',
                'Bash/Shell',
                'Python',
                'Golang'
            ],
            'class' => 'card-light'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'list',
            'heading' => 'Frameworks/CMS',
            'list' => [
                'Laravel',
                'CC-Framework (defunct)',
                'Wordpress',
                'Bootstrap',
                'Vue',
                'Drupal',
                'ASP.NET',
                'Symfony'
            ],
            'class' => 'card-accent'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'list',
            'heading' => 'Technologies/Tools',
            'list' => [
                'Visual Studio Code',
                'DBeaver',
                'Plesk',
                'Jira',
                'Trello',
                'REST'
            ],
            'class' => 'card-light'
        ]
    ]
])