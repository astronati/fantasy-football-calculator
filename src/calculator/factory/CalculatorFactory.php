<?php

use \FFC\CalculatorFactoryInterface as CalculatorFactoryInterface;
use \FFC\Calculator as Calculator;
use \FFC\FormationFactory as FormationFactory;
use \FFC\QuotationFactory as QuotationFactory;
use \FFC\ConversionTable as ConversionTable;
use \FFC\ReportCard as ReportCard;

/**
 * @author Andrea Stronati <astronati@vendini.com>
 * @license MIT http://opensource.org/licenses/MIT
 * @copyright 2016 Andrea Stronati
 * @version 0.2.1
 */

namespace FFC {

  /**
   * Defines a QuotationFactory
   * It implements the Factory pattern.
   */
  class CalculatorFactory implements CalculatorFactoryInterface {
  
    /**
     * @inheritDoc
     */
    public static function create(array $quotations, $options = array()) {
      return new Calculator(
        $quotations,
        $options,
        new FormationFactory(),
        new QuotationFactory(),
        ConversionTable::getInstance(),
        ReportCard::getInstance()
      );
    }
  }
  
}