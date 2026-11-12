<?php
function get_photographicproject_by_id( int $id ): array {
    return [
        'title'   => get_the_title( $id ),
        'image'   => carbon_get_post_meta( $id, 'image' ),
        'text'    => carbon_get_post_meta( $id, 'text' ),
        'gallery' => carbon_get_post_meta( $id, 'gallery' )
    ];
}
?>