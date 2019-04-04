<?php

namespace JS\ListGallery\Block\Product;

use Magento\Catalog\Model\Product as Product;

class GalleryRenderer extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'JS_ListGallery::listgallery.phtml';

    public function getGalleryImagesHtml(
        Product $product
    ) {
        if (!count($product->getMediaGalleryImages())) {
            return '';
        }
        $this->setGalleryImages($product->getMediaGalleryImages());
        $this->setProduct($product);
        return $this->toHtml();
    }
}
