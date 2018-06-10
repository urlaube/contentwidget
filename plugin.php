<?php

  /**
    This is the ContentWidget plugin.

    This file contains the ContentWidget plugin. It takes a configured content and provides it during an ON_WIDGETS call.

    @package urlaube\contentwidget
    @version 0.1a0
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

  if (!class_exists("ContentWidget")) {
    class ContentWidget extends Base implements Plugin {

      // HELPER FUNCTIONS

      protected static function configure() {
        Plugins::preset("contentwidget", null);
      }

      // RUNTIME FUNCTIONS

      public static function plugin() {
        return Plugins::get("contentwidget");
      }

    }

    // register plugin
    Plugins::register("ContentWidget", "plugin", ON_WIDGETS);
  }

