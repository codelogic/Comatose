<?php

add_action('comatose_head', 'comatose_google_analytics');
add_action('comatose_stylesheets', 'comatose_get_stylesheets');

function comatose_google_analytics() {
  global $comatose_options;
  $comatose_google_analytics_id = $comatose_options['google_analytics_id'];
  $get_comatose_google_analytics_id = esc_attr($comatose_options['google_analytics_id']);
  if ($comatose_google_analytics_id !== '') {
    echo "\n\t<script>\n";
    echo "\t\tvar _gaq=[['_setAccount','$get_comatose_google_analytics_id'],['_trackPageview'],['_trackPageLoadTime']];\n";
    echo "\t\t(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];\n";
    echo "\t\tg.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';\n";
    echo "\t\ts.parentNode.insertBefore(g,s)}(document,'script'));\n";
    echo "\t</script>\n";
  }
}

function comatose_get_stylesheets() {
  $styles = '';
  
  if (class_exists('RGForms')) {
    $styles .= "\t<link rel=\"stylesheet\" href=\"" . plugins_url(). "/gravityforms/css/forms.css\">\n";
  }

  if (is_child_theme()) {
    $styles .= stylesheet_link_tag('/style.css', 1);
    $styles .= "\t<link rel=\"stylesheet\" href=\"" . get_stylesheet_uri(). "\">\n";
  } else {
    $styles .= stylesheet_link_tag('/style.css', 1);
  }

  echo $styles;
}

function stylesheet_link_tag($file, $tabs = 0, $newline = true) {
  $indent = str_repeat("\t", $tabs);
  return $indent . '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css' . $file . '">' . ($newline ? "\n" : "");
}

?>
