<?php
declare(strict_types=1);

namespace MykolaM\ControllerDemo\Controller\Demo;

use Magento\Framework\Controller\Result\Forward as ForwardResponse;

class Forward implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\App\RequestInterface $request
     */
    private $request;
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    private $forwardResponseFactory;

    /**
     * Controller constructor.
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardResponseFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\ForwardFactory $forwardResponseFactory
    ) {
        $this->request = $request;
        $this->forwardResponseFactory = $forwardResponseFactory;
    }

    /**
     * @return ForwardResponse
     */
    public function execute(): ForwardResponse
    {
        return $this->forwardResponseFactory->create()->setParams(
            [
                'name' => 'Mykola',
                'surname' => 'Myronenko',
                'url' => 'https://github.com/Mykola-Myronenko/dv-campus-2020-2021-magento'
            ]
        )
            ->forward('Data');
    }
}
