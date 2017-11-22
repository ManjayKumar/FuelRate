$(document).ready(function(){
    var ht = $(window).height();
    var wd = $(window).width();
    $(".acco-head").click(function(){
        $(this).next().slideToggle();
    });
    $(".acco-heading").click(function(){
        $(this).next().slideToggle();
    })
    $('.special.cards .image').dimmer({on: 'hover'});
    $('.menu .item').tab();
    $('.ui.dropdown').dropdown();
    $('.tabular.menu .item').tab();
    $('.secondary.menu .item').tab();
    $('.button')
        .popup({
            inline: true,
            hoverable: true,
            position : 'bottom left'
        })
    ;
    $('.icon')
        .popup({
            inline: true,
            hoverable: true,
            position : 'bottom left'
        });
    $('.icon_question')
        .popup({
            inline: true,
            hoverable: true,
            position : 'top right'
        })
    ;
    $('.label')
        .popup({
            inline: true,
            hoverable: true,
            position : 'bottom left'
        })
    ;
    $('.item')
        .popup({
            inline: true,
            hoverable: true,
            position : 'bottom left'
        });
    $('.ui.accordion').accordion();
    $('.ui.rating').rating();
    $('.ui.checkbox').checkbox();
    $('.ui.radio.checkbox').checkbox();
    $('.menu .item').tab();
    $("body").addClass("custom-body");
    $(".main-wrap").css("min-height", ht-340);
    $('.icon').popup({inline: true });
    var ht = $(window).height();
    $(".middle-section, .middle-section .ls-side").css("min-height", ht-190);
    $(".ls-theme-set").css("min-height", $(".middle-section").height()-80);
    $(".middle-section-second, .middle-section-second .ls-side").css("min-height", ht-140);
    $(".rs-dsh-board").css("height", $(".ls-dsh-board").height());
    $(".login-screen").css("min-height", ht-80);

    $(".remove_attr_read").click(function(event){
        var site_template_th = $(this).closest(".site-template-th");
        $(site_template_th).find(".inline_edit_in").removeAttr('readonly');
        $(site_template_th).find(".inline_edit_in").focus();
        $(site_template_th).find(".col_div").css("border-top-color", "#0d2235");
    });
    $(".move_attr_read").click(function(){
        var site_template_th = $(this).closest(".site-template-th");
        $(site_template_th).find(".inline_edit_in").attr("readonly","");
        $(site_template_th).find(".col_div").css("border-top-color", "#ccc");
    });
    $(".question_div").click(function(){
        if(!($(this).next().is(":visible"))) {
            $(".answer_div").slideUp();
            $(this).next(".answer_div").slideDown();
        }else{
            $(this).next(".answer_div").slideUp();
        }
    });

    $(".dropdown-sb-link a").click(function(){
        $(this).next().slideToggle();
    });
//    checklist slider
    $('.sidebar_options, .course_sidebar_options, .global_sidebar_options').click(function(e){
        e.preventDefault();
        $('#sidebar_options').sidebar({
          onVisible: function(){
            $('.ui.menu.fixed').css('z-index', 0);
          },
          onHide: function(){
            $('.ui.menu.fixed').css('z-index', 101);
          }
        }).sidebar('toggle');
    });
    $('.sidebar-cancel').click(function () {
        $('.sidebar').sidebar('hide');
    });

    if(wd < 991){
        $(".app-store-menu .ui.secondary.pointing.menu").removeClass("secondary menu");
        $(".app-store-menu .ui.pointing").addClass("mb-appstore-menu");
         $(".main-wrap").css("min-height", ht);
    }else{
        $(".app-store-menu .ui.pointing").removeClass("mb-appstore-menu")
        $(".app-store-menu .ui.pointing").addClass("secondary menu");
        var highestBox1 = 100;
        $('.side-column-height').each(function(){
            if($(this).height() > highestBox1) {
              highestBox1 = $(this).height(); 
            }
        });  
        $('.side-column-height').height(highestBox1); 
        $(".main-wrap").css("min-height", ht-340)
    }
    $(window).resize(function(){
        var wd= $(window).width();
         var ht = $(window).height();
        if(wd < 991){
            $(".app-store-menu .ui.secondary.pointing.menu").removeClass("secondary menu");
            $(".app-store-menu .ui.pointing").addClass("mb-appstore-menu");
            $(".main-wrap").css("min-height", ht);
        }else{
            $(".app-store-menu .ui.pointing").removeClass("mb-appstore-menu")
            $(".app-store-menu .ui.pointing").addClass("secondary menu");
            var highestBox1 = 100;
            $('.side-column-height').each(function(){
                if($(this).height() > highestBox1) {
                  highestBox1 = $(this).height(); 
                }
            });  
            $('.side-column-height').css("min-height", highestBox1); 
            $(".main-wrap").css("min-height", ht-340);
        }
    });

    $(".mb-m-clk").click(function(){
        $(".mb-left-side-menu").toggleClass("open");
        $(".overlay-right").toggleClass("overlay-right-show");
    });

    $(".app-store-menu-click").click(function(){
        $(".ui.pointing.mb-appstore-menu").toggleClass("open");
        $(".overlay-right-app").toggleClass("overlay-right-app-show");
    });

    $(".overlay-right").click(function(){
        $(".overlay-right").toggleClass("overlay-right-show");
        $(".mb-left-side-menu").toggleClass("open");

    });
    $(".overlay-right-app").click(function(){
        $(".overlay-right-app").toggleClass("overlay-right-app-show");
        $(".ui.pointing.mb-appstore-menu").toggleClass("open");
    });

    if($( "div" ).hasClass('middle-band-memberfactory')) {
        $('.memberfactory-menu').addClass('active memberfactory');
        $('.app-store').addClass('active');
    }
    else {
        $('.memberfactory-menu').removeClass('active memberfactory');
    }

    if($( "div" ).hasClass('middle-band-coachrack')) {
        $('.coachrack-menu').addClass('active coachrack');
        $('.app-store').addClass('active');
    }
    else {
        $('.coachrack-menu').removeClass('active coachrack');
    }

    if($( "div" ).hasClass('middle-band-rewardburst')) {
        $('.rewardburst-menu').addClass('active rewardburst');
        $('.app-store').addClass('active');
    }
    else {
        $('.rewardburst-menu').removeClass('active rewardburst');
    }
    if($( "div" ).hasClass('middle-band-classroom')) {
        $('.academy-tab').addClass('active');
    }else {
        $('.academy-tab').removeClass('active');
    }

    $("body").on('click', '.siteCreateAlertBox', function (e) {
        e.preventDefault();
        $('#siteCreateAlertBox').modal({
            closable: false,
        }).modal('show');
    });
});
function moveAll(from, to) {
    $('#'+from+' option').remove().appendTo('#'+to);
}

function moveSelected(from, to) {
    $('#'+from+' option:selected').remove().appendTo('#'+to);
}
function selectAll1() {
    $(".add_courses_list option").attr("selected","selected");
}
    
function setResponseMessage(data, formObject) {
    if( 'undefined' != typeof(data.message) ){
        var buttonClass = $(formObject).find('button');
        if(data.result == "success") {
            buttonClass.removeClass('loading');
            $('.button').removeClass('loading');
            // commented on 11th May. Check to see if is it really needed.
            //$('#' + $(formObject).attr('data-remove-div')).empty();
            $("#successMessageText").text(data.message);
            $('#newSuccessMessage').fadeIn('slow');
            setTimeout(function () {
                $('#newSuccessMessage').fadeOut('fast');
            }, 2000);

            if( data.divNotEmpty && data.modalId) {
                $("#" + data.modalId ).css('display','none');
                var title = $('#dotfo_core_taxonomy_title').val();
                // edit html
                if(data.mode == 'edit') {
                    $('#store_individual_data_'+data.taxonomy_id).html('<input id="dotfog_core_product_taxonomy_'+data.taxonomy_id+'" name="dotfog_core_product[taxonomy][]" value="'+data.taxonomy_id+'" type="checkbox"><label for="dotfog_core_product_taxonomy_'+data.taxonomy_id+'">'+title+'</label></div>');
                }
                else {
                    $('#table_all_store_data').append('<tr id="row_id_'+data.taxonomy_id+'"><td width="70%"><div class="ui toggle checkbox pull-left" id="store_individual_data_'+data.taxonomy_id+'"> <input id="dotfog_core_product_taxonomy_'+data.taxonomy_id+'" name="dotfog_core_product[taxonomy][]" value="'+data.taxonomy_id+'" type="checkbox"> <label for="dotfog_core_product_taxonomy_'+data.taxonomy_id+'">'+title+'</label></div></td><td class="right aligned options" width="30%"> <a class="ui button grey inverted tiny icon add-store-taxonomy" data-route="/app/reward/add/store/'+data.tenant_id+'/'+data.taxonomy_id+'"> <i class="edit icon"></i> </a><div class="ui popup inverted top center transition hidden" style="bottom: 218.75px; left: 395.217px; top: auto; right: auto;"><div class="content">Delete</div></div> <a class="ui button grey inverted tiny icon delete_record" data-id="'+data.taxonomy_id+'" data-route="/app/reward/delete/store/'+data.tenant_id+'/'+data.taxonomy_id+'"> <i class="trash icon"></i> </a><div class="ui popup inverted top center transition hidden"><div class="content">Delete</div></div> </td></tr>');
                }

                if($('#table_all_store_data > tbody > tr').length == 1) {
                    $('#span_label_select_store').show();
                    $('#span_label_no_store_found').hide();
                }

                $('.inner_loader_div').hide();
                $("#add_edit_store").empty();
            }

            //check to close modal
            if( data.closeModal ) {
                if( data.modalId != '' ) {
                    $("#" + data.modalId ).css('display','none');
                    $("#" + data.modalId ).empty();
                }
            }

            if( formObject.reloadPage == true || $(formObject).attr('data-type') != 'menu' || $(formObject).attr('data-type') == undefined) {
                if(data.redirect_url) {
                    if(data.type == "addLesson") {
                        $('#successMessage').show();
                        window.location.replace(Routing.generate(data.redirect_url, {
                            tenant_id: data.tenant_id,
                            id: data.id,
                            taxonomy_id: data.taxonomy_id,
                            content_id: data.content_id
                        }, true));
                    }else{
                        window.location.replace(data.redirect_url);
                    }
                } else if(typeof data.page_reload === 'undefined') {
                    setTimeout(function () {
                        location.reload();
                    }, 1000); 
                }  
            }else if(data.reloadPage == false && data.divId != "" ){
                $('#'+data.divId).html(data.responseData);
            }
        } else {
            buttonClass.removeClass('loading');
            $("#errorMessageText").text(data.message);
            $('#newErrorMessage').fadeIn('slow');
            setTimeout(function () {
                $('#newErrorMessage').fadeOut('fast');
            }, 4000); 
            $("#saveImportCsvButton").removeAttr("disabled");
        }
      }
}

$(".quick-search-click").click(function(){
    $(".quick-search").toggleClass("open");
    $(".quick-search-overlay").toggleClass("quick-search-overlay-show");
    $(".quick-search").removeClass("close");
    $(".quick-search-overlay").removeClass("quick-search-overlay-hide");
})
$(".quick-search-overlay").click(function(){
    $(".quick-search-overlay").toggleClass("quick-search-overlay-show");
    $(".quick-search").toggleClass("open");
    $(".quick-search").removeClass("close");
    $(".quick-search-overlay").removeClass("quick-search-overlay-hide");
})

if($('.search-button').length != 0) {
   $('.quick-search-click').show();
} else {
   $('.quick-search-click').hide();
}

$(".category-click").click(function(){
    $(".mb-fix-category").toggleClass("open");
    $(".overlay-category").toggleClass("overlay-category-show");
});
$(".overlay-category").click(function(){
    $(".overlay-category").toggleClass("overlay-category-show");
    $(".mb-fix-category").toggleClass("open");
});
