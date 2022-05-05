@include('components/section', [
    'type' => 'full-width',
    'blocks' => [
        [
            'block' => 'blocks/banner',
            'type' => 'normal',
            'imgsrc' => 'img/imgtest.png',
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
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla sit amet pellentesque sollicitudin. Pellentesque fermentum, turpis eu consectetur euismod, odio lacus cursus velit, ut finibus sapien nisl non augue. Nunc nisl massa, sollicitudin id nisi finibus, lacinia elementum leo. Cras efficitur tristique velit, at gravida nisi molestie eu. Pellentesque sit amet purus ut lacus lacinia ornare. Nullam non magna ligula. Sed nisi est, molestie ac convallis in, aliquam et urna. Pellentesque luctus massa a pulvinar porta. Proin eu felis massa. Nunc porttitor blandit velit quis cursus. Suspendisse potenti.'
        ]
    ]
])
@include('compontents/section', [
    'type' => 'normal',
    'blocks' [
        [
            'block' => 'blocks/subheading',
            'subheadings' => [
                [
                    'subheading' => 'Lorem ipsum',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla sit amet pellentesque sollicitudin.'
                ],
                [
                    'subheading' => 'Lorem ipsum',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla sit amet pellentesque sollicitudin.'
                ],
                [
                    'subheading' => 'Lorem ipsum',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla sit amet pellentesque sollicitudin.'
                ]
            ]
        ]
    ]
])