<?php
$photographicproject = get_photographicproject_by_id( get_the_ID() );
?>

<main data-page="photographicproject">

    <h1><?= esc_html( $photographicproject['title'] ); ?></h1>

    <?php if ( ! empty( $photographicproject['production_date'] ) ) : ?>
        <p class="production-date">
            <?= esc_html( $photographicproject['production_date'] ); ?>
        </p>
    <?php endif; ?>

    <?php if ( ! empty( $photographicproject['lead_text'] ) ) : ?>
        <div class="lead-text">
            <?= esc_html( $photographicproject['lead_text'] ); ?>
        </div>
    <?php endif; ?>

    <!-- Beschreibung -->
    <div class="text">
        <?= wpautop( esc_html( $photographicproject['text'] ) ); ?>
    </div>

    <?php if ( ! empty( $photographicproject['image'] ) ) : ?>
        <?php
        $image_id = $photographicproject['image'];
        $image_url = wp_get_attachment_image_url( $image_id, 'large' );
        $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        ?>
        <img src="<?= esc_url( $image_url ); ?>" alt="<?= esc_attr( $image_alt ); ?>">
    <?php endif; ?>

    

    <!-- Media Gallery -->
    <?php if ( ! empty( $photographicproject['gallery'] ) ) : ?>
        <div class="gallery">
            <?php foreach ( $photographicproject['gallery'] as $image ) : ?>
                <div class="gallery-item">
                    <img src="<?= esc_url( wp_get_attachment_image_url( $image, 'large' ) ); ?>" alt="<?= esc_attr( get_post_meta( $image, '_wp_attachment_image_alt', true ) ); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</main>