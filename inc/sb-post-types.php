/*
*   Saltbox Custom Post Types
*/

<?php

    function sb_register_post_types() {
        register_post_type('show', array(
            'public' => true,
            'menu-postition' => 5,
            'menu-icon' => 'dashicons-tickets-alt'
        ));
    }
    
    // sb_register_post_types();

?>