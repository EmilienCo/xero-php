<?php

namespace XeroPHP\Models\PayrollUS\Employee;

use XeroPHP\Remote;


class BankAccount extends Remote\Object {

    /**
     * The name of bank account holder exactly how the bank has it.
     *
     * @property string AccountHolderName
     */

    /**
     * The text that will appear on your employee’s bank statement when they receive payment
     *
     * @property string StatementText
     */

    /**
     * See Account Types
     *
     * @property string AccountType
     */

    /**
     * Bank routing number is the nine digit number used to identify a financial institution
     *
     * @property string RoutingNumber
     */

    /**
     * The account number for the bank account
     *
     * @property string AccountNumber
     */

    /**
     * Fixed amounts (for example, if an employee wants to have $100 of their salary transferred to one
     * account, and the remaining amount to another)
     *
     * @property float Amount
     */

    /**
     * Set it to true if this bank account should be the Remainder bank account
     *
     * @property string Remainder
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'BankAccount';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Hintable type
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'AccountHolderName' => array (false, null),
            'StatementText' => array (false, null),
            'AccountType' => array (false, null),
            'RoutingNumber' => array (false, null),
            'AccountNumber' => array (false, null),
            'Amount' => array (false, null),
            'Remainder' => array (false, null)
        );
    }


    /**
     * @return string
     */
    public function getAccountHolderName(){
        return $this->_data['AccountHolderName'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setAccountHolderName($value){
        $this->_data['AccountHolderName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementText(){
        return $this->_data['StatementText'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setStatementText($value){
        $this->_data['StatementText'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType(){
        return $this->_data['AccountType'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setAccountType($value){
        $this->_data['AccountType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber(){
        return $this->_data['RoutingNumber'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setRoutingNumber($value){
        $this->_data['RoutingNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber(){
        return $this->_data['AccountNumber'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setAccountNumber($value){
        $this->_data['AccountNumber'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(){
        return $this->_data['Amount'];
    }

    /**
     * @param float $value
     * @return BankAccount
     */
    public function setAmount($value){
        $this->_data['Amount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemainder(){
        return $this->_data['Remainder'];
    }

    /**
     * @param string $value
     * @return BankAccount
     */
    public function setRemainder($value){
        $this->_data['Remainder'] = $value;
        return $this;
    }


}