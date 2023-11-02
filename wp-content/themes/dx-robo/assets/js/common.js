!(function ($) {
    "use strict";

    let vh = window.innerHeight * 0.01;
    let vw = window.innerWidth * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    document.documentElement.style.setProperty('--vw', `${vw}px`);

    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $('#header').outerHeight() - 1;

    $(document).on('click', '.nav-menu a, .mobile-nav-menu a, .scrollto, .p-service-index a, .link, #toc_container a', function (e) {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#header') {
                    scrollto = 0;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1000);

                if ($(this).parents('.nav-menu, .mobile-nav-menu').length) {
                    $('.nav-menu .active, .mobile-nav-menu .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle').toggleClass('toggle-active');
                    $('.mobile-nav-overly').fadeOut();
                }

                return false;
            }
        }
    });

    // Mobile Navigation
    $('body #mobile-nav').prepend('<button type="button" class="mobile-nav-toggle"><span class="toggle-icon"><span></span><span></span><span></span></span></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function (e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle').toggleClass('toggle-active');
        $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav-menu .drop-down > a', function (e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
    });

    $(document).click(function (e) {
        var container = $("#mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('.mobile-nav-toggle').toggleClass('toggle-active');
                $('.mobile-nav-overly').fadeOut();
            }
        }
    });

    // modal

    var $modal = $(".modal");

    $(document).on('click', '[data-toggle="modal"]', function (e) {
        var target = $(this).attr("href") ? $(this).attr("href") : $(this).attr("data-target");
        if (target.length !== 0 && $(document).has(target).length !== 0) {
            e.preventDefault();
            var $selecedModal = $(target);
            $('body').toggleClass('modal-open');
            $selecedModal.show();
            setTimeout(function () {
                $selecedModal.toggleClass('show');
            }, 100);
            return false;
        }
    });

    $(document).click(function (e) {
        var container = $(".modal .modal-content");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('modal-open')) {
                $('body').removeClass('modal-open');
                $modal.removeClass('show');
                setTimeout(function () {
                    $modal.hide();
                }, 300);
            }
        }
    });

    $(document).on('click', '.modal .close, [data-dismiss="modal"]', function (e) {
        $('body').removeClass('modal-open');
        $modal.removeClass('show');
        setTimeout(function () {
            $modal.hide();
        }, 300);
    });

        /**
     * Region-listオープナー/クローザー
     */
    if ($('#archive-blog').length) {
        /**
         * 初期化
         */
        function RegionInitialize() {
            const $region_list = $('.region-list');
            const $province_list = $region_list.find('.province-list');
            const $cloneRegion = $region_list.clone();

            $cloneRegion.css({ position: 'absolute', left: 0, top: 0, width: $region_list.css('width'), opacity: 0 });
            $('.region-selection').append($cloneRegion);
            $cloneRegion.find('.province-list').each(function (index, element) {
                const $answer = $(element);
                $answer.css({ height: 'auto' });
                $province_list.eq(index).data('height', $answer.height() + 'px');
            });
            $cloneRegion.remove();
        }
        RegionInitialize();
        $(window).on('resize', RegionInitialize);
        /**
         * FAQオープナー/クローザー本体
         */
        function regionToggle(event) {
            event.stopPropagation();
            const $this = $(this).parent().parent();
            if ($this.hasClass('opened')) {
                $this.removeClass('opened');
                $this.find('.province-list').css('height', '0px');
            } else {
                $this.addClass('opened');
                $this.find('.province-list').css('height', $this.find('.province-list').data('height'));
            }
        }
        $('.region img').on('click', regionToggle);
        $('.region label').on('click', regionToggle);

        $('.region input[type=checkbox]').on('click', function() {
            console.log("checkbox");
            if($(this).is(':checked')) {
                $(this).parent().parent().find('input[type=checkbox]').prop('checked', true);
            } else {
                $(this).parent().parent().find('input[type=checkbox]').prop('checked', false);
            }
        })

        //when loading, 北海道・東北 process
        var subCheckbox_Wrapper = $('.hokkaido-tohku .province-list');
        var region_Wrapper = $('.hokkaido-tohku');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 関東 process
        var subCheckbox_Wrapper = $('.kanto .province-list');
        var region_Wrapper = $('.kanto');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 中部 process
        var subCheckbox_Wrapper = $('.chubu .province-list');
        var region_Wrapper = $('.chubu');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 近畿 process
        var subCheckbox_Wrapper = $('.kinki .province-list');
        var region_Wrapper = $('.kinki');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 中国 process
        var subCheckbox_Wrapper = $('.chuugoku .province-list');
        var region_Wrapper = $('.chuugoku');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 四国 process
        var subCheckbox_Wrapper = $('.shikoku .province-list');
        var region_Wrapper = $('.shikoku');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        //when loading, 九州・沖縄 process
        var subCheckbox_Wrapper = $('.kyushu-okinawa .province-list');
        var region_Wrapper = $('.kyushu-okinawa');
        var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
        var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
        if(checkedCount == 0 ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else if ( checkedCount == allCheckboxCount ) {
            region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
            region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
        } else {
            if( !region_Wrapper.hasClass("somechecked") ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
            }
        }

        $('.province-list input[type=checkbox]').on('click', function() {
            var subCheckbox_Wrapper = $(this).parent().parent().parent();
            var region_Wrapper = subCheckbox_Wrapper.parent();
            var checkedCount = subCheckbox_Wrapper.find('input[type="checkbox"]:checked').length;
            var allCheckboxCount = subCheckbox_Wrapper.find('input[type="checkbox"]').length;
            if(checkedCount == 0 ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('checked', false);
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
            } else if ( checkedCount == allCheckboxCount ) {
                region_Wrapper.find('.region input[type=checkbox]').prop('checked', true);
                region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', false);
            } else {
                if( !region_Wrapper.hasClass("somechecked") ) {
                    region_Wrapper.find('.region input[type=checkbox]').prop('indeterminate', true);
                }
            }
        })
    }

})(jQuery);