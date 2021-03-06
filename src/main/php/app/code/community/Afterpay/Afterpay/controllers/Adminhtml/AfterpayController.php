<?php

class Afterpay_Afterpay_Adminhtml_AfterpayController extends Mage_Adminhtml_Controller_Action
{
    public function updateAction()
    {
        $model = new Afterpay_Afterpay_Model_Observer();

        try {
            $model->updateOrderLimits();
            $this->_getSession()->addSuccess(Mage::helper('afterpay')->__('Successfully updated limits'));
        } catch (Exception $e) {
            $this->_getSession()->addError($e->getMessage());
        }

        $this->_redirectReferer();
    }
}