<?php get_header([['type' => 'style', 'link' => DIST__DIR . '/css/views/pages/home/home.css']]); ?>
    <h1>Hello World Home</h1>

    <button class="c-button">Componente de botão utilizado na home</button>

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