<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Videoprojekt')
    ->where('post_type', '=', 'videoproject')
    ->add_fields([
        Field::make('image' ,'image' , 'Bild')->set_required()->set_help_text('Preview Bild einfügen'),
        Field::make('rich_text', 'text', 'text')->set_required(),
        Field::make( 'media_gallery', 'gallery', __( 'Media Gallery' ) )->set_type( array( 'image' ) ),

        // Felder hier einfügen
    ]);
    
