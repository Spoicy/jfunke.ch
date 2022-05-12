{{-- TEMPORARY: Finalized project page will call from database or json for project, this is just to have a functional layout for now --}}
{{-- TODO: Load page with data from database or json --}}
@switch($data['name'])
    @case('jfunke')
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/portfoliofull',
                    'name' => 'jfunke.ch',
                    'description' => [
                        'The very same website that you\'re viewing this entry from. I made this website completely from scratch using the Laravel Framework using modern practices. Every developer needs their own webpage, and the goal was to go above and beyond as a technical showcase.',
                        'Each page template is made up of multiple, smaller templates which consist of blocks and components. This way, a backend can be easily made to edit layouts, where only data needs to be passed through in order to display the entire layout. A completely overkill solution for such a basic website, but if there\'s any website I\'m going to overengineer, it\'s my own.'
                    ],
                    'gallery' => [
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/jfunke.png',
                            'imgalt' => 'Screenshot of homepage'
                        ]
                    ],
                ]
            ]
        ])
        @break
    @case('spoicy')
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/portfoliofull',
                    'name' => 'spoicy.ch',
                    'description' => [
                        'This website is my own mini-project haven, where I build ideas I have for programming with a very minimalistic layout. It\'s all about coding here, stunning design is not a priority for any of these mini-projects.',
                        'The projects here are mainly PHP, with a few JavaScript ones sprinkled throughout. Read my blog from this domain, where I document my various projects and the struggles/successes that come with coding them.'
                    ],
                    'gallery' => [
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy.png',
                            'imgalt' => 'Social Media page of spoicy.ch'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy-blog.png',
                            'imgalt' => 'Blog page of spoicy.ch'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy-jsf.png',
                            'imgalt' => 'JavaScript Framework page of spoicy.ch'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/spoicy-vanilla-mobile.png',
                            'imgalt' => 'Mobile view of Vanilla JS page of spoicy.ch'
                        ]
                    ],
                    'links' => [
                        [
                            'link' => 'https://spoicy.ch/',
                            'linkname' => 'spoicy.ch'
                        ]
                    ]
                ]
            ]
        ])
        @break
    @case('suprnova-dev')
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/portfoliofull',
                    'name' => 'suprnova.dev',
                    'description' => [
                        'A linktree page for the GitHub user Suprnova. It displays all of the projects he\'s worked on over the years in order of importance.'
                    ],
                    'gallery' => [
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/suprnova.png',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/suprnova-mobile.png',
                            'imgalt' => 'Image'
                        ]
                    ],
                    'initial' => [
                        'The initial state of the linktree is not too far off the planned final product, however there are some key things that need to be improved upon.',
                        'The website is not at all responsive on mobile or any other non-desktop resolution. Text goes over the image, the image stretches along with the height/width, and some other things, like the special animations, are poorly implemented. Suprnova also requested a new grid layout for the projects.'
                    ],
                    'finish' => [
                        'The final product is a website similar to the previous iteration, but built almost completely from scratch in order to improve the site as much as possible. The new project grid layout was made as per specifications by the client, where every tile is sorted by importance by size. The final site is also completely responsive on every consumer device available.'
                    ],
                    'links' => [
                        [
                            'link' => 'https://suprnova.dev/',
                            'linkname' => 'suprnova.dev'
                        ]
                    ],
                ]
            ]
        ])
        @break
    @default
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/heading',
                    'heading' => 'Project not found',
                    'text' => ['No project was found at this URL.'],
                    'textdir' => 'left'
                ]
            ]
        ])
@endswitch
