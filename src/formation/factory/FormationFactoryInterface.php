<?php


/**
 * @author Andrea Stronati <astronati@vendini.com>
 * @license MIT http://opensource.org/licenses/MIT
 * @copyright 2016 Andrea Stronati
 * @version 0.2.1
 */

namespace FFC {

    /**
     * Defines the interface of the Formation Factory
     */
    interface FormationFactoryInterface {

        /**
         * Returns a new instance of the Formation class
         *
         * @param array $container
         * @return Formation
         */
        public function create($container = array());
    }
}
