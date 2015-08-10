// JavaScript Document
jQuery(document).ready(function($) {
  $(".results").fadeIn(3000);
  //Responsive slider for home page
  $('.slider-product-banner').bxSlider({
	  pager: false,
	  mode: 'vertical',
	  slideMargin: 5,
	  slideWidth: 658,
	}
  );
  //Infinite scroller for home page
  $('.slider-download-links').bxSlider({
	  pager: false,
	  slideWidth: 219,
	  minSlides: 2,
	  maxSlides: 3,
	  moveSlides: 1,
	  slideMargin: 15
  });
  $('#leverstyles').bxSlider({
	  minSlides: 1,
	  maxSlides: 1,
	  pager: false,
	  mode: 'vertical',
	  slideWidth: 210,
	  slideMargin: 10
  });
  //Superfish Menu
  $('ul.sf-menu').superfish();
  //Keeps all boxed divs same height
  boxes = $('.repinfo, .replist, .boxes');
  maxHeight = Math.max.apply(
	Math, boxes.map(function() {
	return $(this).height();
  }).get());
  boxes.height(maxHeight);
  //Sidebar Accordion Menu	
  $('#accordion > ul > li:has(ul), #templates > ul > li:has(ul), #spec-sheets > ul > li:has(ul)').addClass("has-sub");
  $('#accordion > ul > li > a, #templates > ul > li > a, #spec-sheets > ul > li > a').click(function() {
	  var checkElement = $(this).next();		
	  $('#accordion li, #templates li, #spec-sheets li').removeClass('active');
	  $(this).closest('li').toggleClass('active');
	  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		  $(this).closest('li').removeClass('active');
		  checkElement.slideUp('normal');
	  }		
	  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		  $('#accordion ul ul:visible, #templates ul ul:visible, #spec-sheets ul ul:visible').slideUp('normal');
		  checkElement.slideDown('normal');
	  }		
	  if (checkElement.is('ul')) {
			  return false;
		  } else {
			  return true;	
	  }		
  });
  $('#closers').change(function() {
	  $('div.results').hide();
	  $('#results' + $(this).val()).fadeIn(3000);
	  $('#results' + $(this).val()).show();
  }).change(); // Invoke it now
  $('#closers option[value=""]').attr('selected', true);
  // Sort option by text not id
  //$('#locks option').sort(function(a, b){return ($(a).text()) > ($(b).text());}).appendTo('#locks');
  $('#exitdevices').change(function() {
	  $('div.results').hide();
	  $('#results' + $(this).val()).fadeIn(3000);
	  $('#results' + $(this).val()).show();
  }).change(); // Invoke it now
  //Sort option by text not id
  //$('#exitdevices option').sort(function(a, b){return ($(a).text()) > ($(b).text());}).appendTo('#exit-devices');
  $('#exitdevices option[value=""]').attr('selected', true);
  //This will select any a element which has a href property ending with .pdf, and add a target="_blank" attribute to it.
  //As of jQuery 1.6, the .prop() method provides a way to explicitly retrieve property values, while .attr() retrieves attributes.
  $('a[href$=".pdf"]').each(function() {
	  $(this).attr('target', '_blank');
  });
  $('a.protected').removeAttr('href');
  //$('#boxes').first().addClass('alpha');
  $('#accordion li').children('a').wrapInner('<span />');
  //$('li.has-sub').prev('a').append('<span/>');
  
  $(".nav-button").click(function () {
	  $(".nav-button,.primary-nav").toggleClass("open");
  });    
  $('#Tab').easyResponsiveTabs();
  //fancybox
  $("a.fancybox").fancybox({
	  'hideOnContentClick': true
  });
  //Converting image map to dropdown select menu on mobil devices
  $('<select />').appendTo('#mobile_Rep_Map');
  // Create default option
  $('<option />', {
	  'selected': 'selected',
	  'value'   : '',
	  'text'    : 'Choose Your Territory....'
  }).appendTo("#mobile_Rep_Map select");  
  $('map[id="rep_Map"] area').each(function() {
	  var el = $(this);
	  $("<option />", {
	  "value"   : el.attr("href"),
	  "text"    : el.attr("title")
	  }).appendTo("#mobile_Rep_Map select");
  });
  //Sometimes when Creating image maps you have areas with the same url and title.
  //This will insure that there will be no duplication of those.
  var duplicates = {};
  $("#mobile_Rep_Map select > option").each(function () {
	  if(duplicates[this.text]) {
		  $(this).remove();
	  } else {
		  duplicates[this.text] = this.value;
	  }
  });		
  //make responsive dropdown menu actually work           
  $("#mobile_Rep_Map select").change(function() {
	  window.location = $(this).find("option:selected").val();
  });
});//jQuery
