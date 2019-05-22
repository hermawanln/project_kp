$(document).ready(function () {

  'use strict'

  var Nexus = {

    initialized: false,

    initialize: function(){
      if (this.initialized) return;

      this.initialized = true;
      this.build();
    },

    // Building all site functionality
    build: function(){
      this.preloader();
      this.showTeamInfo();
      this.mainNavActions();
      this.sortingPanel();
      this.lightGallery();
      this.formsAjax();
      this.dateTimePicker();
      this.fixedMainHeader();
      this.owlConfig();
      this.onScrollActions();
      this.customSelect();
    },

    // Main page preloader
    preloader: function(){

      $('body').imagesLoaded( function() {
        var $loaderWrapper = $('#loader-wrapper'),
        $spinner = $loaderWrapper.find('#loader');
        $spinner.fadeOut();
        $loaderWrapper.delay(500).fadeOut('slow');
        window.scrollTo( 0, 0 );
      });
    },

    // "Infnite" scroll with lazy items loading
    lazyInfiniteScroll: function(){

      if (! document.querySelector('.js-lazy-loading')) return;

      var lazyLoader = $('.js-lazy-loader'),
          lazyLoadingContainer = $('.js-lazy-loading');

      lazyLoader.fadeIn();

      // Uncomment this AJAX call ...
      /*
      $.ajax({
        url: 'get-post.php',
        dataType: 'html',
        success: function(html) {
          $('.js-lazy-loading').append(html);
          $('.js-lazy-loader').hide();
        }
      });
      */

      // ... and delete this ...
      setTimeout(function(){
        lazyLoadingContainer.append(testPost());
        lazyLoader.fadeOut();
      }, 5000);


      function testPost(){
        return lazyLoadingContainer.children().clone();
      }
      // ... demo.
    },

    // Team info in Index - Team secrtion
    showTeamInfo: function(){
      var activeTeamMember;
      $('.js-team-info-from').on('click', function(event) {

        if (!activeTeamMember){
          activeTeamMember = $('.card__item--active');
        }

        activeTeamMember.removeClass('card__item--active');
        $(event.target).addClass('card__item--active');
        activeTeamMember = $(event.target);

        var currentInfo = activeTeamMember.children('.js-info').clone();
        $('.js-team-info-where').html(currentInfo);
        currentInfo.fadeIn();

      });
    },

    // Main nav menu actions
    mainNavActions: function(){

      var mobileMenuBtn = $(".js-mobile-menu-btn");

      function toggleMenu(button){
        button.find('.icon-bar').toggleClass("icon-bar--is-toggled");
      }

      mobileMenuBtn.on('click', function (event) {
        toggleMenu($(event.currentTarget));
      });
    },

    // Sotring items - for example - Gallery page
    sortingPanel: function(){
      if (document.querySelector('.js-sorting-panel')){
        var sortingPanel = $('.js-sorting-panel');
        var prevActiveBtn = $('.js-sorting-panel .sorting-panel--active');
        sortItems(sortingPanel, prevActiveBtn);
      }

      if (document.querySelector('.js-sorting-panel-gallery')){
        var sortingPanelGallery = $('.js-sorting-panel-gallery');
        var prevActiveBtnGallery = $('.js-sorting-panel-gallery .sorting-panel--active');
        sortItems(sortingPanelGallery, prevActiveBtnGallery);
      }

      function sortItems(sortingPanel, prevActiveBtn){
        sortingPanel.on('click', '[data-sorting-btn]', function(e){
          e.preventDefault();

          if (prevActiveBtn) prevActiveBtn.removeClass('sorting-panel--active');

          var targetBtn = $(e.target);
          targetBtn.addClass('sorting-panel--active');
          prevActiveBtn = targetBtn;

          var targetTag = targetBtn.data('sorting-btn');
          var sortingItems = sortingPanel.find('.js-sorting-panel-items').children();

          if (targetTag === 'all') {
              sortingItems.fadeIn({duration: 500});
          } else {
              sortingItems.hide();
          }

          for (var i = 0; i < sortingItems.length; i++){
            var item = $(sortingItems[i]);
            if (item.data('sorting-target') === targetTag) {
                item.fadeIn({duration: 500});
            }
          }


        });
      }
    },

    // lightGallery plugin initialization
    lightGallery: function(){
      if (document.getElementById('lightgallery')) {
         $("#lightgallery").lightGallery();
      }
    },

    // Ajax forms actions
    formsAjax: function(){

      // Search
      $('#search-form').on('submit', function () {
          var request = $('input[name="username"]').val();
          var formData = {
              request: request
          };
          $.ajax({
            type: "POST",
            url: '/search.php',
            data: formData,
            success: function() {
              //$('#form-submit-errors').text("Success!");
            },
            error: function() {
              //$('#form-submit-errors').text("Something went wrong...");
            }
          });
          return false;
      });

      // Contacts
      $('#contacts-form').on('submit', function () {
          var clientName = $('input[name="client-name"]').val(),
              clientPhone = $('input[name="client-phone"]').val(),
              clientDate = $('input[name="client-date"]').val(),
              clientTime = $('input[name="client-time"]').val(),
              clientVehicle = $('select[name="client-vehicle"]').val(),
              clientProblem = $('select[name="client-problem"]').val(),
              clientMessage = $('textarea[name="client-message"]').val();

          var formData = {
              clientName: clientName,
              clientPhone: clientPhone,
              clientDate: clientDate,
              clientTime: clientTime,
              clientProblem: clientProblem,
              clientVehicle: clientVehicle,
              clientMessage: clientMessage
          };
          $.ajax({
            type: "POST",
            url: '#0',
            data: formData,
            success: function() {
              //$('#form-submit-errors').text("Success!");
            },
            error: function() {
              //$('#form-submit-errors').text("Something went wrong...");
            }
          });
          return false;
      });
    },

    // Initializstion of 2 plugins - datepicker and timepicker
    dateTimePicker: function(){
      $('#contacts-form-date').datepicker({ dateFormat: 'dd-mm-yy' });
      $('#contacts-form-time').timepicker({
        'scrollDefault': 'now',
        'timeFormat': 'H:i',
        'minTime': '7:00am',
        'maxTime': '10:00pm'
      });
    },

    // Calculates fixed main header position on scroll
    fixedMainHeader: function() {

      // Hide top row of header on scroll down and show while on top
      var topHeader =  $('.js-fixed-header-top');
      var bottomHeader = $('.js-fixed-header-bottom');
      var bodyClass = $('.js-fixed-header');
      var topHeaderHeight = topHeader.outerHeight();
      var bottomHeaderHeight = bottomHeader.outerHeight();

      if(topHeader.is(':hidden')){
        topHeaderHeight = 0;
      }

      if (window.pageYOffset > topHeaderHeight){
        bottomHeader.addClass('main-header__bottom-row--is-fixed');
        bodyClass.css({
          marginTop: bottomHeaderHeight
        });
      } else{
        bottomHeader.removeClass('main-header__bottom-row--is-fixed');
        bodyClass.css({
          marginTop: 0
        });
      }
    },

    // Calculates fixed aside menu position on scroll
    fixedAsideMenu: function(initialArgs, scrollTop){

      initialArgs['asideFixedOffsetTop'] = initialArgs.bottomHeader.outerHeight(),
      initialArgs['asideFixedOffsetBottom'] = initialArgs.mainFooter.outerHeight(),
      initialArgs['footerOffset'] = initialArgs.mainFooter.offset().top,
      initialArgs['docHeight'] = $(document).height(),
      initialArgs['winHeight'] = $(window).height();

      var aside = initialArgs.asideMenu;
      var asideWidth = aside.outerWidth();
      var marginAfterHeader = 30;
      var marginBeforeFooter = 60;
      // Distance from top of WINDOW to bottom of ASIDE
      var asideBottomOffset = 520;

      if (window.pageYOffset >= initialArgs.asideOffsetTop - initialArgs.asideFixedOffsetTop - marginAfterHeader){

        aside.addClass('sorting-panel--is-fixed');
        aside.css({
          'width': asideWidth,
          'top': initialArgs.asideFixedOffsetTop + marginAfterHeader,
          'bottom': 'auto'
        });

        var bottomOffset = ((initialArgs.winHeight - asideBottomOffset) + (window.pageYOffset + asideBottomOffset) - (initialArgs.docHeight - initialArgs.asideFixedOffsetBottom - marginBeforeFooter));
        if (window.pageYOffset + asideBottomOffset >= initialArgs.footerOffset - marginBeforeFooter ){
          aside.css({
            'width': asideWidth,
            'top': 'auto',
            'bottom': bottomOffset
          });
        }

      } else{
        aside.removeClass('sorting-panel--is-fixed');
        aside.css({
          'width': 'auto'
        });
      }
    },

    // Replacement for 'scroll' event with Request Animation Frame
    onScrollActions: function() {

      // Vars for every function, that uses this scroll event
      // Main menu
      var topHeader =  $('.js-fixed-header-top');
      var bottomHeader = $('.js-fixed-header-bottom');
      var mainFooter = $('.js-main-footer');

      var asideMenu = $('.js-aside-menu');
      var asidePresent = false;

      // Aside
      if ( asideMenu.length > 0 ){
        asidePresent = true;

        var initialArgs = {
          mainFooter: mainFooter,
          bottomHeader: bottomHeader,
          asideOffsetTop: asideMenu.offset().top,
          asideMenu: asideMenu
        }
      }

      // Common
      var $this = this;

      // Main action on scroll 'event'
      var scroll = function (docHeight, winHeight) {

        // Main header
        $this.fixedMainHeader();

        // Aside menu
        if (asidePresent){
          $this.fixedAsideMenu(initialArgs, lastScrollTop);
        }

        // Infinite scroll
        if (docHeight - winHeight == lastScrollTop){
          $this.lazyInfiniteScroll();
        }
      };

      var raf = window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame;
      var $window = $(window);
      var $document = $(document);
      var lastScrollTop = $window.scrollTop();

      if (raf) {
        loop();
      }

      function loop() {
        var scrollTop = $window.scrollTop();
        var docHeight = $document.height();
        var winHeight =  $window.height();

        if (lastScrollTop === scrollTop) {
          raf(loop);
          return;
        } else {
          lastScrollTop = scrollTop;

          // fire scroll function if scrolls vertically
          scroll(docHeight, winHeight);
          raf(loop);
        }
      }
    },

    // Config for OwlSlider plugin
    owlConfig: function(){

      $(".carousel-index-gallery").owlCarousel({
        items:7,
        loop:true,
        center:true,
        margin:0,
        URLhashListener:true,
        autoplayHoverPause:true,
        nav:false,
        dots:false,
        startPosition: 'URLHash',
        autoplayTimeout: 10000,
        responsive:{
         0:{
           items:2,
           nav:false
         },
         768:{
           items:4,
           nav:false
         },
         1170:{
           items:7,
           nav:false
         }
       }
      });

      $("#carousel-index-hero").owlCarousel({
          margin:0,
          loop:true,
          autoWidth:false,
          items:1,
          dots: false,
          nav: true,
          autoplay: true,
          smartSpeed: 550,
          autoplayTimeout: 10000
      });

      $("#carousel-index-team").owlCarousel({
          margin:30,
          loop:false,
          autoWidth:false,
          nav: true,
          dots: false,
          autoplay: false,
          responsive:{
           0:{
             items:1
           },
           768:{
             items:2
           },
           1170:{
             items:3
           }
         }
      });

      $("#carousel-index-testimonials").owlCarousel({
          margin:25,
          loop:true,
          autoWidth:false,
          nav: true,
          dots: false,
          autoplayTimeout: 10000,
          autoplay: true,
          responsive:{
           0:{
             items:1
           },
           768:{
            items:2
          }
         }
      });
    },

    customSelect: function(){
      $('.selectpicker').selectpicker({
        style: 'custom-select',
        size: 4
      });
    }

  };

  // Initialization of all functions on page load
  Nexus.initialize();

});
