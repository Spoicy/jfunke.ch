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
            'type' => 'text',
            'heading' => 'Card title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
            'class' => 'card-accent'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'icon',
            'heading' => 'chart-simple',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
            'class' => 'card-light'
        ],
        [
            'block' => 'blocks/card',
            'type' => 'text',
            'heading' => 'Card title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
            'class' => 'card-neutral'
        ]
    ]
])
@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/text',
            'heading' => 'Text title',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
            'textdir' => 'left'
        ]
    ]
])