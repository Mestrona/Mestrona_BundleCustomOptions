<?php
namespace Mestrona\BundleCustomOptions\Controller\Adminhtml\Product\Initialization\Helper\Plugin;

class BundleFirst
{
    /**
     * Do not remove custom options for bundles with dynamic pricing (we make a backup)
     *
     * To be called before
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
        $product->setProductOptionsBackup($product->getProductOptions());

        return $product;
    }
}
