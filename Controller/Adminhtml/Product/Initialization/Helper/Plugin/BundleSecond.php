<?php
namespace Mestrona\BundleCustomOptions\Controller\Adminhtml\Product\Initialization\Helper\Plugin;

class BundleSecond
{

    /**
     * Do not remove custom options for bundles with dynamic pricing (restore backup)
     *
     * To be called after
     *   @see \Magento\Bundle\Controller\Adminhtml\Product\Initialization\Helper\Plugin\Bundle::afterInitialize
     *
     * @param \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper $subject
     * @param \Closure $product
     *
     * @return \Magento\Catalog\Model\Product
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function afterInitialize(
        \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper $subject,
        \Magento\Catalog\Model\Product $product
    ) {
        $product->setProductOptions($product->getProductOptionsBackup());

        return $product;
    }
}
