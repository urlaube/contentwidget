<?php

  /**
    This is the ContentWidget plugin.

    This file contains the ContentWidget plugin. It takes a configured content
    and provides it during an ON_WIDGETS call.

    @package urlaube\contentwidget
    @version 0.1a2
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

  class ContentWidget extends BaseSingleton implements Plugin {

    // HELPER FUNCTIONS

    protected static function configure() {
      Plugins::preset(static::class, null);
    }

    // RUNTIME FUNCTIONS

    public static function plugin() {
      return preparecontent(value(Plugins::class, static::class), null, [CONTENT, TITLE]);
    }

  }

  // register plugin
  Plugins::register(ContentWidget::class, "plugin", ON_WIDGETS);
