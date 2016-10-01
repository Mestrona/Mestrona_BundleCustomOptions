<?php

namespace Mestrona\BundleCustomOptions\Plugin\Ui\DataProvider\Product\Form\Modifier;

class BundleCustomOptionsPlugin
{
    public function aroundModifyCustomOptionsButton(\Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundleCustomOptions $subject,
                                                    \Closure $procede, array $meta, $group, $container, $button)
    {
        // do nothing
        return $meta;
    }


    /**
     * Adjust warning message
     *
     * @see \Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundleCustomOptions::getErrorMessage
     * @param \Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundleCustomOptions $subject
     * @param $result
     */
    public function afterGetErrorMessage(\Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundleCustomOptions $subject, $result)
    {
        $result['arguments']['data']['config']['content'] =
            __('We normally can\'t save custom-defined options for bundles with dynamic pricing. Thanks to the module Mestrona_BundleCustomOptions you can. But this is meant for options without special pricing attached. If you attach custom prices to the options, this is on your own risk. Please test well.');
        return $result;
    }

}