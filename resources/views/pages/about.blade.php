@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'normal',
            'imgsrc' => 'https://spoicy.ch/upload/jfu/about-banner.jpg',
            'imgalt' => 'Banner'
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
                'I\'m 22 years old, non-binary and I\'ve always had an interest in computers. Ever since I got my first computer at 5 years old, it always boggled my mind how everything functioned. The browser I used to surf the net, the Flash games on Kongregate that I played day in and day out, the programs that magically did whatever I needed them to do. I always wanted to make games and programs of my own from the very start. Now that I\'m an adult and with multiple years of coding under my belt, I can confidently say I\'ve done my younger self proud.',
                'I\'m currently enrolled at Lucerne University of Applied Sciences and Arts for a Bachelor\'s in Computer Science, majoring in Software Engineering & DevOps.'
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
                        'I love creating projects in languages that I\'m most familiar with, such as spoicy.ch and the very website you\'re currently reading this on, but there\'s always something fun and exciting about learning new technologies and languages, or even just other parts of the languages you\'ve never looked in depth at before. I always strive to make interesting products for myself and others, while simultaneously enlarging my resume with old and new technologies.'
                    ],
                    'imgsrc' => 'https://spoicy.ch/upload/jfu/about-coding.jpg',
                    'imgalt' => 'Image'
                ],
                [
                    'type' => 'img',
                    'textdir' => 'left',
                    'subheading' => 'Travelling',
                    'text' => [
                        'I love to travel around and explore places that I\'ve never been to before. Whenever I get a chance to, I pick a new place and spend my afternoon taking in the surroundings.',
                        'While I\'m out exploring, I like to have my phone open and play Pokémon GO. It provides the perfect incentive to explore every last inch of a place, while simultaneously being rewarded for staying in shape.'
                    ],
                    'imgsrc' => 'https://spoicy.ch/upload/jfu/about-travel.jpg',
                    'imgalt' => 'Image'
                ],
                [
                    'type' => 'img',
                    'textdir' => 'right',
                    'subheading' => 'Speedrunning',
                    'text' => [
                        'The goal of speedrunning is to complete a video game or an objective inside of a video game as quickly as possible. I\'ve been an active speedrunner for close to 10 years now, and the community surrounding it is what truly makes it something special.',
                        'Platforming games are my bread and butter and are the majority of my speedruns. Outside of that, I\'m also an active moderator and community member in multiple speedrunning communities, most notably <a href="https://www.speedrun.com/refunct" target="_blank">Refunct</a>, a short 3D platformer, and <a href="https://www.speedrun.com/powerwash_simulator" target="_blank">PowerWash Simulator</a>. ' .
                            'I was interviewed for an article about speedwashing, <a href="https://www.eurogamer.net/powerwash-simulators-speedrunning-scene-puts-both-time-and-water-under-extreme-pressure" target="_blank">which you can read about here</a>.'
                    ],
                    'imgsrc' => 'https://spoicy.ch/upload/jfu/about-speedrunning2.jpg',
                    'imgalt' => 'Snapshot of a PowerWash Simulator Career run'
                ]
            ]
        ]
    ]
])