<?php
declare(strict_types=1);

namespace MykolaM\ControllerDemo\Controller\Demo;

use Magento\Framework\View\Result\Page as DataResponse;

class Data implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory $dataResponseFactory
     */
    private $dataResponseFactory;

    /**
     * Controller constructor.
     * @param \Magento\Framework\View\Result\PageFactory $dataResponseFactory
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $dataResponseFactory)
    {
        $this->dataResponseFactory = $dataResponseFactory;
    }

    /**
     * Page file name: mykolam_controller_demo_demo_data.xml
     * @return DataResponse
     */
    public function execute(): DataResponse
    {
        return $this->dataResponseFactory->create();
    }
}
