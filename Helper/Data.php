<?php

namespace JS\ListGallery\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * Maximum Number of product images to show on list page
     */
    const GALLERY_IMAGE_LIMIT = 3;
    
    /**
     * List Gallery Enable path
     */
    const XML_PATH_LIST_GALLERY_ENABLED = 'list_gallery/general/enable';
    
    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig(self::XML_PATH_LIST_GALLERY_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
