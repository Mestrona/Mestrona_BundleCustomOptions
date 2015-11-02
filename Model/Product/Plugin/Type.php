<?php
namespace Mestrona\BundleCustomOptions\Model\Product\Plugin;

class Type
{
    /**
     * Do not remove custom options for bundles with dynamic pricing (we make a backup)
     *
     * @see \Magento\Bundle\Model\Product\Type::beforeSave
     *
     * @return null
     */
    public function aroundBeforeSave(
        \Magento\Bundle\Model\Product\Type $subject,
        \Closure $proceed,
        \Magento\Catalog\Model\Product $product
    ) {
        $backup = $product->getProductOptions();
        $proceed($product);
        $product->setProductOptions($backup);
    }
}
