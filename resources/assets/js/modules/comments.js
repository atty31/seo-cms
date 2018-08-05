var postSettings,
post = {

    settings: {
        parent: $("#post-app"),
        modal: $('#post-app').find('#image-modal')
    },

    init: function () {
        postSettings = this.settings;
        post.bindActions();
    },

    bindActions: function () {
        postSettings.parent.on('click', function (event) {
            if (event.type === "click") {
                if (event.target.id === 'set-featured-image') {
                    post.getImages();
                    return false;
                }
            }
        });
    },

    showModalImage: function () {
        console.log(postSettings);
        postSettings.modal.modal("show");
    },

    getImages() {
        $.ajax({
            type: "GET",
            url: '/admin/comments/showimages',
            success: function (data) {
                post.renderImages(data);
                post.showModalImage();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    },

    renderImages(data) {
        var modalBody = postSettings.modal.find('.modal-body');
        modalBody.html(data);
    }
};

(function() {
    post.init();
})();