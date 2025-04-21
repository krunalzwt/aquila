<?php 
/**
 * Trait Singleton
 * This trait implements the Singleton design pattern.
 * It ensures that a class has only one instance and provides a global point of access to it.
 * 
 * @package AQUILA
 */

namespace AQUILA_THEME\Inc\Traits;

trait Singleton {
    public function __construct(){

    }

    public function __clone(){

    }

    final public static function  get_instance(){
        static $instance = [];
        $called_class = get_called_class();

        if( ! isset( $instance[ $called_class ] ) ){
            $instance[ $called_class ] = new $called_class();

            do_action( sprintf( 'AQUILA_theme_singleton_init_%s', $called_class ) );
        }
        return $instance[ $called_class ];
    }
}



?>