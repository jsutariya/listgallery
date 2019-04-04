define([
    'jquery',
    'uiComponent'
], function ($, Component) {
    'use strict';

    $.widget('mage.listGallery', {
        updateImage: function (item, event) {
            var element = event.target;
            var mainImageSrc = $(element).data('main_image_src');
            var productImageContainer = $(element).closest('.product-item-info').find('.product-image-photo');
            if(productImageContainer[0] !== undefined){
                $(productImageContainer[0]).attr('src', mainImageSrc);
            } else {
                var productImageContainer = $(element).closest('.product-item-info').find('.photo img');
                if(productImageContainer[0] !== undefined){
                    $(productImageContainer[0]).attr('src', mainImageSrc);
                }
            }
        }
    });

    return $.mage.listGallery;
});