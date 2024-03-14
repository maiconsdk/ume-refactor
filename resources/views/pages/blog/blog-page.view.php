<?php get_header([['type' => 'style', 'link' => DIST__DIR . '/css/views/pages/blog/blog.css']]); ?>
<h2>Hello World Blog</h2>

    <?php button('Botão gerado pelo PHP', null, [
            [
                'name' => 'type',
                'value' => 'button'
            ],
        ], 'button'
    ); ?>

    <?php button('Botão com link gerado pelo PHP', 'borded', [
            [
                'name' => 'href',
                'value' => 'https://google.com'
            ],
            [
                'name' => 'onclick',
                'value' => "alert('Clicou')"
            ]
        ]
    ); ?>
<?php get_footer(); ?>