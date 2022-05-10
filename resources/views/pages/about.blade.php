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
            'heading' => 'About me',
            'text' => [
                'I\'m 21 years old, non-binary and I\'ve always had an interest in computers. Ever since I got my first computer at 5 years old, it always boggled my mind how everything functioned. The browser I used to surf the net, the Flash games on Kongregate that I played day in and day out, the programs that magically did whatever I needed them to do. I always wanted to make games and programs of my own from the very start. Now that I\'m an adult and with multiple years of coding under my belt, I can confidently say I\'ve done my younger self proud.',
                'Of course, my hobbies extend past just programming, and all of which you can read about in the following paragraphs:'
            ]
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/subheading',
            'subheadings' => [
                [
                    'type' => 'img',
                    'textdir' => 'right',
                    'subheading' => 'Coding',
                    'text' => [
                        'I code frequently in my free time to work on projects that either further my knowledge in new technologies that I\'m interested in, or projects that assist me in visualizing or executing various parts of my own hobbies.',
                        'I love creating projects in languages that I\'m most familiar with, such as my PHP/Backend haven that is spoicy.ch and the very website you\'re currently reading these paragraphs on, but there\'s always something fun and exciting about learning new technologies or languages, or even just other parts of the languages you\'ve never looked in depth at before. I always strive to make interesting products for myself and others, while simultaneously enlarging my Resume with old and new technologies.'
                    ],
                    'imgsrc' => 'img/imgtest.png',
                    'imgalt' => 'Image'
                ],
                [
                    'type' => 'img',
                    'textdir' => 'left',
                    'subheading' => 'Fitness',
                    'text' => [
                        'I think staying in shape is one of the most important things in life, and I love taking in my surroundings and visiting new places.',
                        'I always have Pokémon GO open while I\'m walking around, as it gives me incentive to go on long walks and jogs to reach as many locations as possible. Part of my 2022 Resolution is to go on walks more consistently, and Pokémon GO absolutely rewards consistent play. I absolutely recommend it to anybody wanting to stay in shape, as it has an awesome community and is a ton of fun with little effort.'
                    ],
                    'imgsrc' => 'img/imgtest.png',
                    'imgalt' => 'Image'
                ],
                [
                    'type' => 'img',
                    'textdir' => 'right',
                    'subheading' => 'Speedrunning',
                    'text' => [
                        'For the uninitiated, speedrunning is when you aim to complete a video game or an objective inside of a video game as quickly as possible. I\'ve been speedrunning video games for close to 10 years now, and the community is what keeps bringing me back for more.',
                        'Platforming games are my bread and butter, and are the majority of my speedruns. Outside of that, I\'m also an active moderator and community member in multiple speedrunning communities, most notably <a href="https://www.speedrun.com/refunct" target="_blank">Refunct</a>, a short 3d platformer.'
                    ],
                    'imgsrc' => 'img/imgtest.png',
                    'imgalt' => 'Image'
                ]
            ]
        ]
    ]
])