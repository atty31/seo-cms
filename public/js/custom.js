$( document ).ready(function() {
    $('.btnNext').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function(){
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });
    // Sort table rows
    $(".up,.down").click(function(){
        var row = $(this).parents("tr:first");
        if ($(this).is(".up")) {
            row.insertBefore(row.prev());
        } else {
            row.insertAfter(row.next());
        }
        var i = 1;
        $("tr.item").each(function(){
            $(this).find(".sort").find(".page-position").val(i);
            i++;
        });
    });
    //Load CKEDITOR
    var ckeditorIds = ['short_description', 'description', 'category_content', 'subcategory_content', 'block_content'];
    for (var i = 0; i < ckeditorIds.length; i++) {
        //check if id exists
        if($("#" + ckeditorIds[i]).length != 0) {
            CKEDITOR.replace(ckeditorIds[i], {
                customConfig: 'config.js',
                toolbar: 'simple'
            });
        }
    }
    //Load DataTable
    var dataTables = ['category_list', 'subcategory_list', 'pages_list', 'static_pages_list', 'category_pages_list'];
    for (var i = 0; i < dataTables.length; i++) {
        //check if id exists
        if($("#" + dataTables[i]).length != 0) {
            $('#' + dataTables[i]).DataTable();
        }
    }
    //Select2
    var dropDowns = ['type', 'status', 'is_static', 'category_id', 'is_active', 'subcategory_id', 'page_cols',
        'google_ads_active', 'facebook_ads_active', 'google_analytics', 'enable_comments', 'footer_type'];
    for (var i = 0; i < dropDowns.length; i++) {
        //check if id exists
        if($("#" + dropDowns[i]).length != 0) {
            $('#' + dropDowns[i]).select2({ width: '200px' });
        }
    }
    //iCheck -checkbox
    var checkboxes = ['enableFooter', 'enableBottomFooter', 'enableAfterFooter', 'enableBurgerMenu', 'enableLeftMenu'];
    for (var i = 0; i < checkboxes.length; i++) {
        //check if id exists
        if($("#" + checkboxes[i]).length != 0) {
            $('#' + checkboxes[i]).iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-red',
                increaseArea: '20%', // optional
            });
        }
    }
});

function deleteFolder(el){
    var title = $(el).attr('title'),
        body = $(el).attr('body');
    showModal(title, body);
    return false;
}

function showModal(title, body){
    var modal = $('#main-modal');
    modal.find('.modal-title').text(title);
    modal.find('.modal-body').text(body);
    modal.modal('show');
}