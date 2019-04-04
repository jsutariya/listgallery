<?php

namespace JS\ListGallery\Plugin\Catalog\Block\Product;

class ListProduct
{
    /**
     *
     * @param \Magento\Catalog\Block\Product\ListProduct $subject
     * @param type $result
     * @return Magento\Eav\Model\Entity\Collection\AbstractCollection
     */
    public function afterGetLoadedProductCollection(
        \Magento\Catalog\Block\Product\ListProduct $subject,
        $result
    ) {
        if (count($result)) {
            $result->addMediaGalleryData();
        }
        return  $result;
    }
}
