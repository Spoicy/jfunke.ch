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
                        'The very same website that you\'re viewing this entry from. I made this website completely from scratch using the Laravel framework using modern practices. Every developer needs their own webpage, and my goal was to go above and beyond as a technical showcase.',
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
                        'The projects here are mainly PHP, with a few JavaScript ones sprinkled throughout. You can read my blog below, where I document my various projects and the successes/struggles that come with coding them.'
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
                        ],
                        [
                            'link' => 'https://spoicy.ch/blog',
                            'linkname' => 'Blog'
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
                        'A website for the GitHub user Suprnova. It displays all of the projects he\'s worked on over the years in order of importance.'
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
                        'The former state of the website was not too far off the planned final product, however there were some key things that needed to be improved upon.',
                        'The website was not at all responsive on mobile or any other non-desktop resolution. Text went over the image, the image stretched along with the height and width. Some of the other things, like the special animations, were poorly implemented. Suprnova also requested a new grid layout for the projects.'
                    ],
                    'finish' => [
                        'The final product is a website similar to the previous iteration, but built almost completely from scratch in order to improve the site as much as possible. The new project grid layout was made as per specifications by the client, where every tile is sorted by importance by size. The final site is also completely responsive on every consumer device available.'
                    ],
                    'links' => [
                        [
                            'link' => 'https://suprnova.dev/',
                            'linkname' => 'suprnova.dev'
                        ],
                        [
                            'link' => 'https://github.com/Suprnova',
                            'linkname' => 'Suprnova\'s GitHub'
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
