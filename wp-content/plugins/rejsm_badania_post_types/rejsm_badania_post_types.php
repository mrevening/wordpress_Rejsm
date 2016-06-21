<?php
/*
Plugin Name: Badania_Post_Type
Description: Tworzy nowy typ danych - badania
Author: Dominik Wieczorek
Version: 0.1
 */

add_action( 'init', 'rejsm_badania_register_post_types');
function rejsm_badania_register_post_types(){
    $badania_args = array(
        'public' => true,
        'query_var' => 'badanie_post_type',
        'menu_position' => 3,
        //'taxonomies' => '',
        //'register_meta_box_cb' => 'rejsm_meta_badania',
        'menu_icon' => 'dashicons-edit',
        'rewrite' => array(
            'slug' => 'badanie',
            'with_front' => true,
        ),
        'supports' => array(
            ''
        ),
        'labels' => array(
            'name' => 'Badania',
            'singular name' => 'Badanie',
            'add_new' => 'Dodaj nowe badanie',
            'add_new_item' => 'Dodaj nowe badanie',
            'edit_item' => 'Edytuj badanie',
            'new_item' => 'Nowe badanie',
            'view_item' => 'Wyświetl badanie',
            'search_item' => 'Szukaj w badaniach',
            'now_found' => 'Nie znaleziono badania',
            'not_found_in_trash' => 'Nie znaleziono badania w koszu'
       ),
    );
    register_post_type( 'badanie_post_type', $badania_args);
}
add_action( 'add_meta_boxes', 'rejsm_badania_metabox_create' );
function rejsm_badania_metabox_create() {
    add_meta_box(
        'rejsm_meta_badania', //$id
        'Własne pole użytkownika', //$title
        'rejsm_metabox_function', //$callback
        'badanie_post_type', //$page
        'normal', //$context
        'high' );
}
function rejsm_metabox_function( $post ){
    $rejsm_metabox_name = get_post_meta( $post->ID, '_rejsm_metabox_name', true);
    $rejsm_metabox_costume = get_post_meta( $post->ID, '_rejsm_metabox_costume', true);
    echo 'Proszę wypełnić poniższe pola';
?>

<p>Imię: <input type="text" name="rejsm_metabox_name" value="<?php echo esc_attr( $rejsm_metabox_name ); ?>" /></p>
<p>Kostium:
<select name="boj_mbe_costume">
    <option value="vampire" <?php selected( $rejsm_metabox_costume, 'vampire' ); ?>>
        Wampir
    </option>
    <option value="vampire" <?php selected( $rejsm_metabox_costume, 'zombie' ); ?>>
        Zombie
    </option>
    <option value="vampire" <?php selected( $rejsm_metabox_costume, 'smurf' ); ?>>
        Smerf
    </option>
</select>    
    </p>
<?php 
    }
?>

<?php
add_action( 'save_post', 'rejsm_metabox_save_meta');
function rejsm_metabox_save_meta( $post_id ){
    if ( isset( $_POST['rejsm_metabox_name'] ) ) {
        update_post_meta( $post_id, '_rejsm_metabox_name', strip_tags( $_POST['rejsm_metabox_name'] ) );
        update_post_meta( $post_id, '_boj_mbe_costume', strip_tags( $_POST['boj_mbe_costume'] ) );
    }
}
?>