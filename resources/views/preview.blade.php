<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.svg">
</head>
<body>
    <div class="site-container preview-container">
        @include('components/section', [
            'type' => 'normal',
            'blocks' => [
                [
                    'block' => 'blocks/card',
                    'title' => 'Card title',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
                    'class' => 'card-accent'
                ],
                [
                    'block' => 'blocks/card',
                    'title' => 'Card title',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
                    'class' => 'card-light'
                ],
                [
                    'block' => 'blocks/card',
                    'title' => 'Card title',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum volutpat posuere. Maecenas malesuada semper leo. Donec tincidunt venenatis lectus.',
                    'class' => 'card-neutral'
                ]
            ]
        ])
    </div>
</body>
</html>