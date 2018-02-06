function positionNav() {
  jQuery("body").hasClass("toolbar-drawer") && (toolbarHeight = jQuery("#toolbar").outerHeight(), jQuery("#moving-nav").css("top", toolbarHeight), jQuery("body").css("padding-top", toolbarHeight)), pageNavPos = jQuery("#main .product-menu").offset(), stickyCreated === !1 && makeStickyNav(), 767 > winWidth ? jQuery(".header").css("margin-bottom", jQuery("#block-menu_block-1").outerHeight()) : jQuery(".header").css("margin-bottom", 0), jQuery(".featured-flag").css("top", jQuery("#main .product-menu").outerHeight())
}

function createMobileNav() {
  767 > winWidth && (mobileNavCreated ? (jQuery("#mobile-nav").css("right", -winWidth).css("width", winWidth - 20), jQuery("#mobile-nav").removeClass("open"), jQuery(".mobile-overflow").height(winHeight - jQuery("#mobile-nav .touch-nav").height())) : (jQuery("#block-menu_block-1").prepend('<div class="touch-nav"><div class="touch-btn"></div></div>'), jQuery("body").prepend('<div id="mobile-nav"><div class="touch-nav"><div class="touch-btn"></div></div><div class="mobile-overflow"></div></div>'), jQuery("#mobile-nav").css("right", -winWidth).css("width", winWidth - 20), jQuery(".mobile-overflow").height(winHeight - jQuery("#mobile-nav .touch-nav").height()), jQuery("#main").hasClass("sub-cat-page") || (jQuery("#main .product-menu .product-logo, #main .product-menu .block-title").clone().appendTo("#mobile-nav .mobile-overflow").attr("id", "mobile-product-logo"), jQuery("#main .product-menu .menu").clone().appendTo("#mobile-nav .mobile-overflow").attr("id", "mobile-sub-navigation")), jQuery("#block-menu_block-1 .menu").clone().appendTo("#mobile-nav .mobile-overflow").attr("id", "mobile-main-navigation"), jQuery("#block-menu_block-5 .menu").clone().appendTo("#mobile-nav .mobile-overflow").attr("id", "mobile-secondary-navigation"), jQuery("#mobile-main-navigation li.has-children a").each(function(a, b) {
    var c = jQuery(b),
      d = c.parent(),
      e = c.attr("data-product-group-class");
    jQuery(".header .view-display-id-products ." + e + " .mobile-tab").clone().appendTo(d)
  }).click(function(a) {
    a.preventDefault()
  }), jQuery("#mobile-main-navigation li:not(.has-children").each(function(a, b) {
    var c = jQuery(b);
    c.append('<div class="mobile-tab"></div>');
    var d = jQuery(".mobile-tab", b);
    jQuery("a", b).clone().appendTo(d)
  }), mobileNavCreated = !0, jQuery(".touch-nav").click(function() {
    jQuery("#mobile-nav").hasClass("open") ? (jQuery("#mobile-nav").transition({
      right: -winWidth
    }), jQuery("#mobile-nav").removeClass("open")) : (jQuery("#mobile-nav").transition({
      right: 0
    }), jQuery("#mobile-nav").addClass("open"))
  }))), jQuery("#mobile-nav").addClass("ready")
}

function makeStickyNav() {
  winWidth > 767 && jQuery("#main .product-menu").sticky({
    topSpacing: 0
  }), jQuery("#main .mic-links-mobile").sticky({
    topSpacing: 28
  }), jQuery("body").append(jQuery("#scroll-to-top-frag").html()), stickyCreated = !0
}

function itemSpanHeight() {
  var a = 0,
    b = 0;
  jQuery(".product-video").each(function(b, c) {
    b > 2 && (jQuery(c).height(a), a = 0), a < jQuery(".product-item-container", c).outerHeight() && (a = jQuery(".product-item-container", c).outerHeight())
  }), jQuery(".product-image").each(function(a, c) {
    a > 2 && (jQuery(c).height(b), b = 0), b < jQuery(".product-item-container", c).outerHeight() && (b = jQuery(".product-item-container", c).outerHeight())
  })
}

function intrinsicImgHeight() {
  jQuery(".intrinsic-container").each(function(a, b) {
    var c = jQuery(b).height();
    jQuery("img", b).height(c)
  })
}

function centerFullbleedText() {
  jQuery(".fullbleed").each(function(a, b) {
    var c = jQuery(b).height(),
      d = jQuery(".feature-copy", b).height();
    if (d > c) jQuery(b).height(d + 40), jQuery(".feature-copy", b).css("padding-top", 20);
    else {
      var e = c / 2,
        f = d / 2;
      jQuery(".feature-copy", b).css("padding-top", e), jQuery(".feature-copy", b).css("margin-top", -f)
    }
  })
}

function rowEqualizrReset(a) {
  jQuery("[class*=span]", a).height("auto")
}

function rowEqualizr() {
  jQuery(".js-row-eq").each(function(a, b) {
    rowEqualizrReset(b);
    var c = 0;
    jQuery("[class*=span]", b).each(function(a, b) {
      var d = jQuery(b).height();
      d > c && (c = d)
    }), jQuery("[class*=span]", b).height(c)
  })
}
jQuery().ready(function() {
  ! function(a) {
    if (jQuery(".language-switcher-locale-url").length && (a(".language-switcher-locale-url .language-link").live("click", function() {
        var b = a(this).attr("data-lang");
        a.cookie("ZOOM_LANG", b, {
          expires: 365,
          path: "/"
        })
      }), "/" === window.location.pathname)) {
      var b = a("html").attr("lang") || "en",
        c = a.cookie("ZOOM_LANG");
      c && c != b && (window.location = "/" + c)
    }
  }(jQuery)
});
var winWidth = jQuery(window).width(),
  winHeight = jQuery(window).height(),
  mobileNavCreated = !1,
  stickyCreated = !1,
  toolbarHeight = 0,
  pageNavPos;
jQuery().ready(function() {
    ! function(a) {
      function b(b) {
        a(".view-display-id-subcategory_names .view-grouping-content").hide(), a(".view-display-id-products .product-category-items").hide(), a(".view-display-id-subcategory_names " + b).show(), a(b + " .product-category-items:first-child").show(), a(".flyout-tab").removeClass("open"), a(b + " .flyout-tab:first-child").addClass("open"), c = a(".view-display-id-subcategory_names").height() + a(".view-display-id-products").height()
      }
      a("#toolbar").append(a("#edit-nav")), positionNav(), a("body.page-where-to-buy .id-strong-zoom-h6-strong-handy-recorder").removeClass("active-trail");
      var c = 0,
        d = !1;
      a(".header .menu-block-1 .menu li.has-children a").click(function(e) {
        if (e.preventDefault(), !d) {
          var f = a(this),
            g = "." + f.attr("data-product-group-class");
          f.hasClass("open") ? (c = 0, d = !0, a(".flyout-container").animate({
            height: c
          }, 500, function() {
            a(".menu-block-1 .menu li a").removeClass("open"), d = !1
          })) : a(".menu-block-1 .menu li a").hasClass("open") ? (a(".menu-block-1 .menu li a").removeClass("open"), f.addClass("open"), d = !0, a(".region-flyout").animate({
            opacity: 0
          }, 200, function() {
            b(g), a(".flyout-container").animate({
              height: c
            }, 400, function() {
              a(".region-flyout").animate({
                opacity: 1
              }, 200, function() {
                d = !1
              })
            })
          })) : (a(".menu-block-1 .menu li a").removeClass("open"), f.addClass("open"), b(g), d = !0, a(".flyout-container").animate({
            height: c
          }, 400, function() {
            d = !1
          })), positionNav()
        }
      }), a(".flyout-tab").click(function() {
        if (!d) {
          var b = a(this).attr("id");
          a(".flyout-tab").removeClass("open"), a(this).addClass("open"), a(this).hasClass("in-page") || (d = !0, a(".view-display-id-products .view-grouping-content").animate({
            opacity: 0
          }, 200, function() {
            a(".view-display-id-products .product-category-items").hide(), a(".view-display-id-products ." + b).show(), c = a(".view-display-id-subcategory_names").height() + a(".view-display-id-products").height(), a(".flyout-container").animate({
              height: c
            }, 200, function() {
              a(".view-display-id-products  .view-grouping-content").animate({
                opacity: 1
              }, 200, function() {
                d = !1
              })
            })
          }))
        }
      })
    }(jQuery)
  }), jQuery(window).load(function() {
    ! function(a) {
      positionNav(), createMobileNav(), a(".scroll-button").click(function(b) {
        b.preventDefault(), a("html,body").animate({
          scrollTop: 0
        }, 1e3, "swing")
      }), a(window).scroll(function() {
        a(window).scrollTop() > 400 ? a(".scroll-button").css("right", "16px") : a(".scroll-button").css("right", "-" + (a(window).width() + 100) + "px")
      })
    }(jQuery)
  }), jQuery().ready(function() {
    ! function(a) {
      a(".discontinued").hide(), a(".discontinued-button").click(function(b) {
        b.preventDefault();
        var c = a(this);
        c.parent(".view-grouping-content").children(".row-fluid.discontinued").slideToggle("slow", function() {
          a(".show-msg", c).toggleClass("hide"), a(".hide-msg", c).toggleClass("hide")
        })
      })
    }(jQuery)
  }), jQuery().ready(function() {
    ! function(a) {
      a(".media-youtube-video").fitVids(), a("#downloads a").attr("target", "_blank"), a("#av .product-image a").attr("target", "_blank")
    }(jQuery)
  }), jQuery(window).load(function() {
    ! function() {
      itemSpanHeight(), intrinsicImgHeight(), centerFullbleedText()
    }(jQuery)
  }), jQuery(window).load(function() {
    resizeWindow = function() {
      var a = window.outerWidth;
      a >= 768 ? rowEqualizr() : rowEqualizrReset()
    }, jQuery(window).resize(resizeWindow), resizeWindow()
  }), jQuery().ready(function() {
    ! function(a) {
      var b = a("#cse-search-form"),
        c = a("#block-locale-language div.block-inner"),
        d = a(".menu-name-menu-secondary-navigation li.search a");
      d.replaceWith(c.length ? '<div class="language-switcher">' + c.html() + "</div>" + b.html() : b.html()), b.remove(), c.remove(), a(".language-switcher .block-title").on("click", function() {
        a(".language-switcher-locale-url").toggle()
      })
    }(jQuery)
  }),
  function(a, b) {
    var c = function(a, b, c) {
      var d;
      return function() {
        function e() {
          c || a.apply(f, g), d = null
        }
        var f = this,
          g = arguments;
        d ? clearTimeout(d) : c && a.apply(f, g), d = setTimeout(e, b || 100)
      }
    };
    jQuery.fn[b] = function(a) {
      return a ? this.bind("resize", c(a)) : this.trigger(b)
    }
  }(jQuery, "smartresize"), jQuery().ready(function() {
    ! function(a) {
      a(".fancyvideo").fancybox({
        helpers: {
          media: !0
        },
        width: 800,
        height: 450,
        aspectRatio: !0,
        scrolling: "no",
        openEffect: "elastic",
        closeEffect: "none"
      })
    }(jQuery)
  }), window.onresize = function() {
    winWidth = jQuery(window).width(), winHeight = jQuery(window).height(), positionNav(), createMobileNav(), itemSpanHeight(), intrinsicImgHeight(), centerFullbleedText()
  };
