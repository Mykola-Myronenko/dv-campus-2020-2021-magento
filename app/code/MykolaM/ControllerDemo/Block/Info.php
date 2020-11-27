<?php
declare(strict_types=1);

namespace MykolaM\ControllerDemo\Block;

class Info extends \Magento\Framework\View\Element\Template
{
    public function getName()
    {
        return $this->getRequest()->getParam('name');
    }

    public function getSurname()
    {
        return $this->getRequest()->getParam('surname');
    }

    public function getRepo()
    {
        return $this->getRequest()->getParam('url');
    }
}
