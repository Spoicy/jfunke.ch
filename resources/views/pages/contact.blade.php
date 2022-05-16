@include('components/section', [
    'type' => 'normal',
    'gap' => 'compact',
    'first' => 'first',
    'blocks' => [
        [
            'block' => 'blocks/heading',
            'heading' => 'Contact',
            'text' => [
                'Have an inquiry about my works or what I do, or simply would like to get in contact with me? Simply use the contact form down below and I\'ll do my very best to get back to you in a timely manner.'
            ]
        ]
    ]
])

@include('components/section', [
    'type' => 'normal',
    'blocks' => [
        [
            'block' => 'blocks/contactform'
        ]
    ]
])