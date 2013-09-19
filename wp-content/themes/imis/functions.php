<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php et('Your comment is awaiting moderation.'); ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}

if(!function_exists('get_post_top_ancestor_id')){
/**
 * Gets the id of the topmost ancestor of the current page. Returns the current
 * page's id if there is no parent.
 * 
 * @uses object $post
 * @return int 
 */
function get_post_top_ancestor_id(){
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}}

function wordpress_breadcrumbs($minLevel = 1) {
  $delimiter = '<span class="del"> &gt; </span>';
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';
  if (!is_home() && !is_front_page() || is_paged()) {
    global $post;
    if (count($post->ancestors) > $minLevel) {
      echo '<div id="crumbs">';
      if (is_page() && !$post->post_parent) {
        echo $currentBefore;
        the_title();
        echo $currentAfter;
      } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
          echo $crumb . ' ' . $delimiter . ' ';
        echo $currentBefore;
        the_title();
        echo $currentAfter;
      }
      echo '</div>';
    }
  }
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => t( 'Glavni menu'),
    )
  );
}
add_action( 'init', 'register_my_menus' );


function getLang(){
  $lang = 'sl';
  if (isset($_COOKIE['pll_language'])) $lang = $_COOKIE['pll_language'];
  
  $actual_link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  preg_match("~/en/~", $actual_link, $matches);
  
  $lang = substr(get_bloginfo( 'language' ), 0, 2);
  return $lang;
}

function home_url_custom(){
  if (getLang() == 'sl') return home_url();
  else return home_url()."/".getLang();
}

/*
 * custom translate function bound
 */
function t($value, $lang = ''){
  
  if (($lang == '') && !isset($_COOKIE['pll_language'])) return $value;
  if ($lang == '') $lang = getLang();//$_COOKIE['pll_language'];
  
  $filename = get_template_directory()."/language/".$lang.".php";

  if (!file_exists($filename)) return $value;
  
  $importedLang = include $filename;
  if (isset($importedLang[$value])) return $importedLang[$value];
  else{
    $filenameAuto = get_template_directory()."/language/".$lang."-auto".".php";
    $importedLangAuto = array();
    if (file_exists($filename)) $importedLangAuto = include $filenameAuto;
    
    $importedLangAuto[$value] = '';
    
    $importedLangAutoString = "<?php\n\nreturn array(\n";
    foreach ($importedLangAuto as $key => $val){
      $importedLangAutoString .= '  "'.$key.'" => "'.$val.'",'."\n";
    }
    $importedLangAutoString .= ");\n";
    
    file_put_contents($filenameAuto, $importedLangAutoString);
  }
  return $value;
}


function et($value, $lang = ''){
  echo t($value);
}

/**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since 	1.0
 */
function soi_login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url();
} // end soi_login_redirect
add_filter( 'login_redirect', 'soi_login_redirect', 10, 3 );


// custom css for login screen
function my_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );