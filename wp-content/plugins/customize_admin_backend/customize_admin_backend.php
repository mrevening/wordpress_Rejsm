<?php
/*
Plugin Name: Cusomize_admin_backend
Description: Usuwa zbedne elementy menu
Author: Dominik Wieczorek
Version: 0.1
 */
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
};
function remove_user_profile_info()
{
    $fields_to_hide = array(
        'admin-color',
        'comment-shortcuts',
        'admin-bar-front',
        //'user-login',
        'role',
        'super-admin',
        'first-name',
        'last-name',
        'nickname',
        'display-name',
        //'email',
        'description',
        //'pass1',
        'pass2',
        'sessions',
        'capabilities',
        'rich-editing',
        'url',
        );
    foreach ($fields_to_hide as $field){
        echo '<style>tr.user-' . $field . '-wrap{ display: none; }</style>';
    }
    echo '<style>tr.user-profile-picture{ display: none; }</style>';
}
add_action( 'admin_head-user-edit.php', 'remove_user_profile_info' );
add_action( 'admin_head-profile.php',   'remove_user_profile_info' );
//add_action( 'show_user_profile', 'rejsm_user_wojewodztwo');
//add_action( 'edit_user_profile', 'rejsm_user_wojewodztwo');
//function rejsm_user_wojewodztwo() {
//
?>
<!--<h3>Dane demograficzne</h3>
<table class="form-table"
       <tr>
           <th><label for="wojewodztwo">Województwo</label></th>
           <td>
               <select name="wojewodztwo" id="wojewodztwo">
                    <option value=""></option>
                    <option value="dolnoslaskie">dolnośląskie</option>
                    <option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
                    <option value="lubelskie">lubelskie</option>
                    <option value="lubuskie">lubuskie</option>
                    <option value="lodzkie">łódzkie</option>
                    <option value="malopolskie">małopolskie</option>
                    <option value="mazowieckie">mazowieckie</option>
                    <option value="opolskie">opolskie</option>
                    <option value="podkarpackie">podkarpackie</option>
                    <option value="podlaskie">podlaskie</option>
                    <option value="pomorskie">pomorskie</option>
                    <option value="slaskie">śląskie</option>
                    <option value="swietokrzyskie">świętokrzyskie</option>
                    <option value="warminsko-mazurskie">warmińsko-mazurskie</option>
                    <option value="wielkopolskie">wielkopolskie</option>
                    <option value="zachodniopomorskie">zachodniopomorskie</option>
               </select>
               <br />
               <span class="description">Wybierz województwo</span>
           </td>
       </tr>
</table>-->
<?php
//}

add_action( 'show_user_profile', 'rejsm_select_wojewodztwo');
add_action( 'edit_user_profile', 'rejsm_select_wojewodztwo');
function rejsm_select_wojewodztwo($user){
    $options = array(   '0' => '',
                        'dolnoslaskie' => 'dolnośląskie',
                        'kujawsko-pomorskie' => 'kujawsko-pomorskie',
                        'lubelskie' => 'lubelskie',
                        'lubuskie' => 'lubuskie',
                        'lodzkie' => 'łódzkie',
                        'malopolskie' => 'małopolskie',
                        'mazowieckie' => 'mazowieckie',
                        'opolskie' => 'opolskie',
                        'podkarpackie' => 'podkarpackie',
                        'podlaskie' => 'podlaskie',
                        'pomorskie' => 'pomorskie',
                        'slaskie' => 'śląskie',
                        'swietokrzyskie' => 'świętokrzyskie',
                        'warminsko-mazurskie' => 'warmińsko-mazurskie',
                        'wielkopolskie' => 'wielkopolskie',
                        'zachodniopomorskie' => 'zachodniopomorskie'
                        );
    $current_wojewodztwo = get_user_meta ($user->ID, 'wojewodztwo', true);
    if (!$current_wojewodztwo ? $selected = '' : $selected = $current_wojewodztwo);
    ?>
    <h3>Dane demograficzne</h3>
    <table class="form-table"
        <tr>
        <th><label for="wojewodztwo">Województwo</label></th>
            <td>
                <?php
                $select = '<select name="wojewodztwo" id="wojewodztwo">';
                foreach ( $options as $key => $value )
                    $select .= '  <option value="' . $key . ( $key == $selected ? '" selected="selected">' : '">' ) . $value . '</option>';
                $select .= '</select>';
                echo $select;
                ?>
            </select>
            <br />
            <span class="description">Wybierz województwo</span>
            </td>
        </tr>
    </table>
<?php
}
add_action( 'personal_otions_update', 'rejsm_user_wojewodztwo_update');
add_action( 'edit_user_profile_update', 'rejsm_user_wojewodztwo_update');
function rejsm_user_wojewodztwo_update($user_id){
    if ( !current_user_can( 'edit_user', $user_id) )
        return false;
    $wojewodztwo = $_POST['wojewodztwo'];
    update_user_meta( $user_id, 'wojewodztwo', $wojewodztwo);
}
?>