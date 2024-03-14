<?php 
    /**
     * Componente de botão
     *
     * @param string $title
     * @param string|null|null $style
     * @param array|null|null $attributes
     * @param string $tag
     * @return void
     */
    function button(string $title, string|null $style = null, array|null $attributes = null, string $tag = 'a'): void { ?>
    <?php
        $buttonAttributes = '';

        if($attributes != null) {
            foreach($attributes as $attribute) {
                $buttonAttributes .= " " . $attribute['name'] . '="' . $attribute['value'] . '"';
            }
        }
    ?>
    <?php
        /**
         * Processamento e geração do botão
         */
    ?>
    <?php if($tag === 'a'): ?>
        <a <?php if($buttonAttributes): echo $buttonAttributes; endif; ?> class="c-button<?php if($style): echo " c-button--{$style}"; endif; ?>"><?php echo $title; ?></a>
    <?php endif; ?>

    <?php if($tag === 'button'): ?>
        <button <?php if($buttonAttributes): echo $buttonAttributes; endif; ?> class="c-button<?php if($style): echo " c-button--{$style}"; endif; ?>"><?php echo $title; ?></button>
    <?php endif; ?>
<?php } ?>