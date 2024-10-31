<?php
   /*
   Plugin Name: OptKit (v3.0)
   Plugin URI: http://OptKit.com
   Description: The Conversion Rate Optimization Kit - Convert More Website Traffic
   Version: 3.0
   Author: Jordan Coeyman
   Author URI: http://facebook.com/coeyman
   License: GPL2
   */

// Call optkit_website_id_menu function to load plugin menu in dashboard
add_action( 'admin_menu', 'optkit_website_id_menu' );

// Create WordPress admin menu
if( !function_exists("optkit_website_id_menu") )
{
function optkit_website_id_menu(){

  $page_title = 'OptKit (v3.0) Website Settings';
  $menu_title = 'OptKit (v3.0) Settings';
  $capability = 'manage_options';
  $menu_slug  = 'extra-post-info';
  $function   = 'optkit_website_id_page';
  $icon_url   = 'dashicons-media-code';
  $position   = 4;

  add_menu_page( $page_title,
                 $menu_title,
                 $capability,
                 $menu_slug,
                 $function,
                 $icon_url,
                 $position );

  // Call update_optkit_website_id function to update database
  add_action( 'admin_init', 'update_optkit_website_id' );

}
}

// Create function to register plugin settings in the database
if( !function_exists("update_optkit_website_id") )
{
function update_optkit_website_id() {
  register_setting( 'extra-post-info-settings', 'optkit_website_id' );
}
}

// Create WordPress plugin page
if( !function_exists("optkit_website_id_page") )
{
function optkit_website_id_page(){
?>
<style>
  .optkit_bg{
    padding: 20px;
    width: 100%;
  }
</style>
<div class="optkit_bg">
  <h1><a href="//go.optkit.com">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       width="231px" height="77.5px" viewBox="0 0 231 77.5" enable-background="new 0 0 231 77.5" xml:space="preserve">
    <g>
      <path fill="#231F20" d="M94.413,25.117c0.642,0,1.25,0.127,1.825,0.381c0.575,0.254,1.069,0.588,1.484,1.002
        c0.415,0.415,0.749,0.91,1.003,1.484c0.254,0.576,0.381,1.184,0.381,1.825v18.694c0,0.642-0.127,1.25-0.381,1.825
        c-0.254,0.575-0.588,1.077-1.003,1.504c-0.415,0.429-0.909,0.763-1.484,1.003c-0.575,0.241-1.183,0.361-1.825,0.361H80.212
        c-0.642,0-1.25-0.12-1.826-0.361c-0.575-0.24-1.077-0.574-1.504-1.003c-0.428-0.427-0.762-0.929-1.003-1.504
        s-0.361-1.184-0.361-1.825V29.811c0-0.642,0.121-1.25,0.361-1.825c0.241-0.575,0.575-1.069,1.003-1.484
        c0.427-0.414,0.929-0.748,1.504-1.002c0.575-0.254,1.184-0.381,1.826-0.381H94.413z M92.006,31.937h-9.427v14.442h9.427V31.937z"/>
      <path fill="#231F20" d="M121.663,25.117c0.642,0,1.25,0.127,1.825,0.381c0.575,0.254,1.069,0.588,1.484,1.002
        c0.415,0.415,0.749,0.91,1.003,1.484c0.254,0.576,0.381,1.184,0.381,1.825v10.631c0,0.642-0.127,1.251-0.381,1.825
        c-0.254,0.575-0.588,1.07-1.003,1.484c-0.415,0.415-0.909,0.749-1.484,1.003c-0.575,0.255-1.183,0.381-1.825,0.381h-8.946
        c-0.214,0-0.395,0.067-0.542,0.201c-0.147,0.134-0.221,0.308-0.221,0.521v6.579c0,0.508-0.254,0.762-0.762,0.762h-5.536
        c-0.509,0-0.762-0.254-0.762-0.762V25.879c0-0.508,0.253-0.762,0.762-0.762H121.663z M119.537,38.596v-7.101h-7.823v7.101H119.537z
        "/>
      <path fill="#231F20" d="M152.038,31.175c0,0.214-0.074,0.395-0.221,0.542c-0.147,0.147-0.328,0.221-0.542,0.221h-5.696
        c-0.214,0-0.395,0.067-0.542,0.201c-0.147,0.134-0.221,0.308-0.221,0.521v19.777c0,0.214-0.067,0.395-0.201,0.541
        c-0.134,0.147-0.308,0.221-0.521,0.221h-5.576c-0.214,0-0.395-0.073-0.542-0.221c-0.147-0.146-0.221-0.327-0.221-0.541V32.659
        c0-0.214-0.067-0.388-0.2-0.521c-0.134-0.134-0.308-0.201-0.521-0.201h-5.697c-0.214,0-0.395-0.073-0.542-0.221
        c-0.147-0.146-0.221-0.327-0.221-0.542v-5.295c0-0.508,0.254-0.762,0.762-0.762h5.697h1.484h5.576h1.484h5.696
        c0.214,0,0.395,0.074,0.542,0.221c0.147,0.147,0.221,0.328,0.221,0.542V31.175z"/>
      <path fill="#231F20" d="M173.087,36.951c-0.081,0.081-0.095,0.174-0.041,0.281l9.388,15.325c0.106,0.188,0.12,0.341,0.04,0.461
        s-0.228,0.181-0.441,0.181h-6.659c-0.215,0-0.428-0.061-0.642-0.181c-0.215-0.12-0.375-0.273-0.481-0.461l-6.058-10.952
        c-0.08-0.133-0.147-0.146-0.2-0.04l-3.33,3.65c-0.134,0.135-0.247,0.328-0.341,0.582c-0.094,0.255-0.141,0.488-0.141,0.702v5.938
        c0,0.508-0.254,0.762-0.762,0.762h-5.536c-0.509,0-0.763-0.254-0.763-0.762V25.879c0-0.508,0.254-0.762,0.763-0.762h5.536
        c0.508,0,0.762,0.254,0.762,0.762v11.915l10.35-12.115c0.134-0.16,0.321-0.294,0.562-0.401c0.241-0.107,0.468-0.161,0.683-0.161
        h6.659c0.214,0,0.341,0.054,0.381,0.161s-0.007,0.241-0.141,0.401L173.087,36.951z"/>
      <path fill="#231F20" d="M194.957,52.437c0,0.508-0.254,0.762-0.762,0.762h-5.536c-0.509,0-0.763-0.254-0.763-0.762V25.879
        c0-0.508,0.254-0.762,0.763-0.762h5.536c0.508,0,0.762,0.254,0.762,0.762V52.437z"/>
      <path fill="#231F20" d="M221.421,31.175c0,0.214-0.074,0.395-0.221,0.542c-0.147,0.147-0.327,0.221-0.541,0.221h-5.696
        c-0.215,0-0.396,0.067-0.542,0.201c-0.147,0.134-0.221,0.308-0.221,0.521v19.777c0,0.214-0.067,0.395-0.2,0.541
        c-0.135,0.147-0.309,0.221-0.521,0.221h-5.576c-0.215,0-0.396-0.073-0.542-0.221c-0.147-0.146-0.221-0.327-0.221-0.541V32.659
        c0-0.214-0.066-0.388-0.2-0.521c-0.135-0.134-0.308-0.201-0.521-0.201h-5.696c-0.215,0-0.396-0.073-0.542-0.221
        c-0.147-0.146-0.221-0.327-0.221-0.542v-5.295c0-0.508,0.254-0.762,0.763-0.762h5.696h1.484h5.576h1.484h5.696
        c0.214,0,0.394,0.074,0.541,0.221c0.146,0.147,0.221,0.328,0.221,0.542V31.175z"/>
    </g>
    <path fill="#28A8E0" d="M37.369,71.176L10.167,55.465V24.049l27.203-15.71l27.21,15.71v31.416L37.369,71.176z M16.785,51.643
      l20.584,11.89l20.594-11.89V27.872L37.369,15.979l-20.584,11.89V51.643z"/>
    <polygon fill="#28A8E0" points="33.794,53.632 28.843,50.772 40.967,25.483 45.897,28.329 "/>
    <g>
      <path fill="#28A8E0" d="M28.55,39.355c0,2.545-2.065,4.608-4.606,4.608c-2.546,0-4.604-2.062-4.604-4.608
        c0-2.54,2.059-4.603,4.604-4.603C26.484,34.752,28.55,36.815,28.55,39.355"/>
      <path fill="#28A8E0" d="M55.403,39.355c0,2.545-2.065,4.608-4.605,4.608c-2.542,0-4.607-2.062-4.607-4.608
        c0-2.54,2.065-4.603,4.607-4.603C53.337,34.752,55.403,36.815,55.403,39.355"/>
    </g>
    </svg>

  </a></h1>
</div>
  <form method="post" action="options.php">
    <?php settings_fields( 'extra-post-info-settings' ); ?>
    <?php do_settings_sections( 'extra-post-info-settings' ); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">Your website ID:</th>
      <td><input type="text" name="optkit_website_id" value="<?php echo get_option('optkit_website_id'); ?>"/></td>
      </tr>
    </table>
  <?php submit_button(); ?>
  </form>
<?php
}
}
if( !function_exists("optkit_data_in_header") )
{
  function optkit_data_in_header() {
    $extra_info = get_option('optkit_website_id');
    $code= "<script src=\"https://go.optkit.com/widget/load.js\" id=\"OptKit\" init=\"".$extra_info."\" async=\"async\" onerror=\"console.log('OptKit Blocked')\"></script>";    
    echo $code;
  }

add_action('wp_head','optkit_data_in_header');
}
