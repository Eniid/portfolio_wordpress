<?php 
    wp_footer();
    ?>

<input class="chat_input" type="checkbox" id="checkbox_chat">
<img src="<?php bloginfo('template_url'); ?>/img/chat-buble.png" alt="" class="chat_pic">
<div class="form">
    <div class="form_title">Contact me<img src="<?php bloginfo('template_url'); ?>/img/close.svg" alt="" class="chat_close"></div>
    <?php echo do_shortcode( '[contact-form-7 id="48" title="Contact form 1"]' ); ?>

</div>

<script src="<?php bloginfo('template_url'); ?>/dist/app.js"></script>

</body>
</html>

