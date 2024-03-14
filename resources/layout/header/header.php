<?php function get_header(array|null $scripts = null) { ?>
    <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Umentor Refactor</title>

            <?php if($scripts != null): ?>
                
                <?php foreach($scripts as $script): ?>
                    <?php if($script['type'] === 'style'): ?>
                        <link rel="stylesheet" href="<?php echo $script['link']; ?>">
                    <?php endif; ?>
                <?php endforeach; ?>

            <?php endif; ?>
        </head>
        <body>
            <div class="l-header">Aqui é o Header</div>
<?php } ?>