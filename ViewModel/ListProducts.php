<?php

namespace JS\ListGallery\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ListProducts implements ArgumentInterface
{
    /**
     *
     * @var \JS\ListGallery\Block\Product\GalleryRenderer
     */
    protected $_galleryRenderer;

    /**
     *
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Data\Helper\PostHelper $postDataHelper
     * @param \Magento\Catalog\Model\Layer\Resolver $layerResolver
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     * @param \Magento\Framework\Url\Helper\Data $urlHelper
     * @param \JS\ListGallery\Block\Product\GalleryRenderer $galleryRenderer
     * @param array $data
     */
    public function __construct(
        \JS\ListGallery\Block\Product\GalleryRenderer $galleryRenderer
    ) {
        $this->_galleryRenderer = $galleryRenderer;
    }

    /**
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return type
     */
    public function renderGalleryImageHtml(
        \Magento\Catalog\Model\Product $product
    ) {
        return $this->_galleryRenderer->getGalleryImagesHtml($product);
    }
}
