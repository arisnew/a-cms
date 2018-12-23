//loading...
function loading(div_container, is_show ){
    $("#"+div_container).css({
        'display':'none',
        'float':'right',
        'margin-right':'20px',
        'z-index':'5'
    });
    if(is_show == true)
    $("#"+div_container).html('<img src="'+base_url+'asset/img/icons/loading1.gif" />').fadeIn();
    if(is_show == false)
    $("#"+div_container).html('<img src="'+base_url+'asset/img/icons/loading1.gif" />').fadeOut();
}


function blockPage(message) {
    $.blockUI({
        message: '<h4><img src="'+base_url+'asset/img/icons/ajax-loader.gif" /><i class="icon-info-sign"></i> ' + message + '</h4>',
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        }
    });
}

function loadContent(dURL, callback){
    blockPage('Mohon tunggu...');
    setTimeout(function(){
        $.ajax({
            url: dURL,
            data: 0,
            dataType: "html",
            type: "POST",
            cache: false,
            success: function(html){
                $.unblockUI();
                if(html != ''){
                    $("#dinamic-content").html(html);
                    //callback
                    if (typeof callback == 'function') {
                        callback();
                    }
                } else {
                    $(location).attr('href', base_url);
                }
            },
            error: function () {
                $.unblockUI();
                alert('Data yang di minta tidak valid!');
            }
        });
    },100);
}

function setActiveTab(tab, callback){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    /*$('.nav-tabs a[href="#' + tab + '"]').on('shown.bs.tab', function () {
        alert('ddd');
        
    });*/
    if (typeof callback == 'function') {
        callback();
    }
}