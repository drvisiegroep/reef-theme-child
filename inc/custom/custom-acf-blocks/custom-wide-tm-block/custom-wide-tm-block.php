<?php
$allowed_blocks = [ 'core/button',
    'core/buttons',
    'core/button',
    'core/group',
    'core/media-text',
    'core/heading',
    'core/paragraph',
    'core/list',
];

$template = [
    ['core/group', ['align' => 'full'],
        [
            ['core/media-text', ['verticalAlignment' => 'top'],
                [
                    ['core/heading', ['level' => '2', 'content' => 'Titel', ]],
                    ['core/paragraph', ['content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec risus massa. In hac habitasse platea dictumst. Vivamus ac mauris mi. Quisque dictum ligula accumsan lectus commodo consequat. Donec sit amet ullamcorper lectus. Integer et tellus imperdiet, faucibus turpis vel, rutrum ante. ', ]],
                    ['core/button', ['align' => 'right']]
                ]
            ]
        ]
    ]
];
    

echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" template="' . esc_attr( wp_json_encode( $template ) ) . '" />';



