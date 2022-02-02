<?php 

class pixerex_Modules{

    static function module_url(){
        return plugin_dir_url( __FILE__ );
    }

    public function run(){
        // die('foo');
        include 'custom-css/init.php';
    }

    public static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {

            // Fire the class instance
            self::$instance = new self();
            self::$instance;
        }

        return self::$instance;
    }
    
}

pixerex_Modules::instance()->run();