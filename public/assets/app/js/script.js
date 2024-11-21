
$(function(){ 'use strict';

  // Topnav 
  let topnav = $('.topnav');
  let topnavToggle = topnav.find('.sidenav-toggle');
  
  let sidenav = $('.sidenav');
  let sidenavToggle = sidenav.find('.sidenav-toggle')
  if(topnavToggle.length){
    topnavToggle.click(function(){
      sidenav.addClass('active');
      topnavToggle.find('.hamburger').addClass('active');
      sidenavToggle.find('.hamburger').addClass('active'); 
    })

    sidenavToggle.click(function(){
      if(sidenav.hasClass('active')){
        sidenav.removeClass('active');
        topnavToggle.find('.hamburger').removeClass('active');
        sidenavToggle.find('.hamburger').removeClass('active'); 
      }
    })
  }


  // Swiper 01
  var swiper01 = $('.swiper-01');
  if(swiper01.length){
    swiper01.each(function(){
      var self = $(this);
      new Swiper(self.find('.swiper-container'), {
          slidesPerView: 5,
          spaceBetween: 20,
          navigation: {
              prevEl: self.find('.arrow.arrow-prev'),
              nextEl: self.find('.arrow.arrow-next'),
          },
          observer: true,
          observeParents: true,
          loop: true,
          speed: 1200,
          breakpoints: {
              992: { slidesPerView: 4 },
              768: { slidesPerView: 3 },
              576: { slidesPerView: 2 },
              0: { slidesPerView: 1 },
          },
      });
    });
  }

  // Tab Container
  var tabContainers = $('.tab-container');
  if(tabContainers.length){
    tabContainers.each(function(){
      var self = $(this),
        tabs = self.find('.tabs .tab'),
        tabContents = self.find('.tab-contents .tab-content');
          tabs.click(function(e){
              var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                  oldTargets = tabContents.filter('.active');
              if($(this).hasClass('active')) e.preventDefault();
              if(target.length && !$(this).hasClass('active')){
                  e.preventDefault();
                  tabs.removeClass('active');
                  $(this).addClass('active');

                  tabContents.removeClass('fade-in');
                  oldTargets.addClass('fade-out');
                  target.addClass('fade-in');
                  setTimeout(function(){
                      tabContents.removeClass('fade-in fade-out active');
                      target.addClass('active');
                  }, 600);
                  AOS.refresh();
              }
          });
      });
    }
});