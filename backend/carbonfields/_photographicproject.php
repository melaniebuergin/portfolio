<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make('post_meta', 'Fotografisches Projekt')
    ->where('post_type', '=', 'photographicproject')
    ->add_fields([
        Field::make('image' ,'image' , 'Bild')->set_required()->set_help_text('Preview Bild einfügen'),
        Field::make( 'date', 'production_date', 'Production Date' ),
        Field::make( 'textarea', 'lead_text', 'Lead Text' ),
        Field::make('rich_text', 'text', 'Text')->set_required(),
        Field::make('media_gallery', 'gallery', 'Media Gallery')->set_type(array('image')),
    ]);