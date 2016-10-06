/**
 * ------------------------------------------------------------------------
 * JA Medicare Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

(function ($) {

	$(document).ready(function ($) {
 
		//Check div message show
		if ($("#system-message").children().length) {
			$("#system-message-container").show();
			$("#system-message a.close").click(function () {
				setTimeout(function () {
					if (!$("#system-message").children().length) $("#system-message-container").hide();
				}, 100);
			});
		} else {
			$("#system-message-container").hide();
		}

	});
})(jQuery);


// TAB
// -----------------
(function($){
  $(document).ready(function(){
    if($('.nav.nav-tabs').length > 0 && !$('.nav.nav-tabs').hasClass('nav-stacked')){
      $('.nav.nav-tabs a').click(function (e) {
                      e.preventDefault();
                      $(this).tab('show');
                  })
     }
  });
})(jQuery);

