{{-- TEMPORARY: Finalized project page will call from database or json for project, this is just to have a functional layout for now --}}
{{-- TODO: Load page with data from database or json --}}
@php
    use Symfony\Component\Yaml\Yaml;
@endphp

@switch($data['name'])
    @case('jfunke')
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [ $data['yaml'] ]
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
    @case('moodle')
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/portfoliofull',
                    'name' => 'Moodle Plugins',
                    'description' => [
                        'Various Moodle Plugins developed for Kantonsschule Frauenfeld\'s infrastructure. These plugins aim to digitalize various processes of its infrastructure to decrease the amount of manual labor necessary to execute them. They integrate with the existing Moodle platform to reduce the learning curve for students and teachers in order for it to be used.',
                        'FitCheck is a plugin for standardized P.E. testing which aims to reduce the amount of manual labor needed for grading. It achieves this by allowing students to upload their results to the plugin, which then can be graded automatically and graphed to visualize a student/class\'s progress. It also provides many management features for classes and tests, to give full control to the designated teachers.',
                        'SA-Tool is a plugin for semester projects (Semesterarbeit) for the school\'s computer science department. It achieves its goal of drastically reducing the manual labor needed by centralizing the entire process on Moodle. The previously pen + paper and on-site process can then instead move much more swiftly through each step, improving efficiency.'
                    ],
                    'gallery' => [
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/fitcheck-home.jpg',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/fitcheck-graph.jpg',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/fitcheck-totalgraph.jpg',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/fitcheck-upload.jpg',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/satool-teacherhome.jpg',
                            'imgalt' => 'Image'
                        ],
                        [
                            'imgsrc' => 'https://spoicy.ch/upload/jfu/satool-projdef.jpg',
                            'imgalt' => 'Image'
                        ],
                    ],
                    'links' => [
                        [
                            'link' => 'https://github.com/Spoicy/fitcheck',
                            'linkname' => 'FitCheck'
                        ],
                        [
                            'link' => 'https://github.com/Spoicy/satool',
                            'linkname' => 'SA-Tool'
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
