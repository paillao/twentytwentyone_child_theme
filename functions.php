<?php
/**
 * Enqueue scripts and styles.
 */
function twentytwentyone_child_scripts()
{
  $parenthandle = "parent-style"; // This is 'twentytwentyone-style' for the Twenty Twenty One theme.
  $theme = wp_get_theme();
  wp_enqueue_style(
    $parenthandle,
    get_template_directory_uri() . "/style.css",
    [], // if the parent theme code has a dependency, copy it to here
    $theme->parent()->get("Version")
  );
  wp_enqueue_style(
    "twentytwentyone_child-style",
    get_stylesheet_directory_uri() . "/prod/scripts.css",
    [$parenthandle],
    $theme->get("Version") // this only works if you have Version in the style header
  );

  wp_style_add_data("twentytwentyone_child-style", "rtl", "replace");
  // GSAP te da 10 Plugins gratis
  wp_enqueue_script(
    "gsap",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "Flip",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Flip.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "ScrollTrigger",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "Observer",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Observer.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "ScrollToPlugin",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "Draggable",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Draggable.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "EaselPlugin",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/EaselPlugin.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "MotionPathPlugin",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/MotionPathPlugin.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "PixiPlugin",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/PixiPlugin.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "TextPlugin",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "EasePack",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/EasePack.min.js",
    [],
    "1.0.0",
    true
  );

  wp_enqueue_script(
    "script",
    get_stylesheet_directory_uri() . "/prod/scripts.js",
    [],
    "1.0.0",
    true
  );

  if (is_singular() && comments_open() && get_option("thread_comments")) {
    wp_enqueue_script("comment-reply");
  }
}
add_action("wp_enqueue_scripts", "twentytwentyone_child_scripts");
