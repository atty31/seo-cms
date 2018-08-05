/**
 * Created by calin on 6/8/2017.
 */
var imagesUploadSettings,
    imagesUpload = {

        settings: {
            parent: $("#images-upload"),
            inputFile: $("#image-file"),
            fileList: $("#images-upload").find(".file-list")
        },

        init: function () {
            imagesUploadSettings = this.settings;
            imagesUpload.bindActions();
        },

        bindActions: function () {
            imagesUploadSettings.parent.on('click', function (event) {
                if (event.type === "click") {
                    if (event.target.id === 'image-file') {
                        console.log(event.target);
                    }
                }
            });

            imagesUploadSettings.inputFile.change(function () {
                imagesUpload.renderFiles(this);
            });
        },

        renderFiles: function (input) {
            var list = imagesUploadSettings.fileList,
                files = input.files;

            list.html('');

            if (input.files.length) {

                for (var i = 0, f; f = files[i]; i++) {

                    // Only process image files.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    // Closure to capture the file information.
                    reader.onload = (function(theFile) {
                        return function(e) {
                            // Render thumbnail.
                            var li = document.createElement('li');
                            li.classList.add('item');
                            li.innerHTML = [
                                '<div class="product-img"><img width="150" height="auto" class="thumb" src="',
                                e.target.result,
                                '" title="',
                                escape(theFile.name),
                                '"/>',
                                "</div>",
                                '<div class="product-info">',
                                '<span class="product-description">',
                                theFile.name + '</br>',
                                (theFile.size/1048576).toFixed(2) + ' MB' + '</br>',
                                '</span>',
                                '</div>'
                            ].join('');
                            list.append(li);
                        };
                    })(f);

                    // Read in the image file as a data URL.
                    reader.readAsDataURL(f);
                }
            }
        }

    };

(function() {
    imagesUpload.init();
})();
