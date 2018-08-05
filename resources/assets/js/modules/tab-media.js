/**
 * Created by calin on 6/11/2017.
 */
var tabMediaSettings,
    tabMedia= {

        settings: {
            parent: $(".tab-media"),
            modal: $('.tab-media').find('#image-modal'),
        },
        init: function () {
            tabMediaSettings = this.settings;
            tabMedia.bindActions();
        },
        
        bindActions: function () {
            tabMediaSettings.parent.on('click', function (event) {
                if (event.type === "click") {
                    if (event.target.id === 'set-featured-image') {
                        tabMedia.getImages();
                        return false;
                    }
                }
            });

        },

        showModalImage: function () {
            tabMediaSettings.modal.modal("show");
        },

        getImages() {
            $.ajax({
                type: "GET",
                url: '/admin/image/imageslist',
                success: function (data) {
                    tabMedia.renderImages(data);
                    tabMedia.showModalImage();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        },

        renderImages(data) {
            var modalBody = tabMediaSettings.modal.find('.modal-body');
            modalBody.html(data);
        }
        
    };

(function() {
    tabMedia.init();
})();
