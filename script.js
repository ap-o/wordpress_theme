console.log("Hello from script");

/*jQuery(document).ready(function(){
  

	jQuery(".comment").addClass("atanu");

}); */

(function($) {
	$(document).ready(function() {
		
		
		$(".comment li").css("list-style-type", "none");

		$(".comment-metadata").css("font-style", "italic");

		//$(".comment-metadata a").contents().unwrap();

		$(".reply a").addClass("btn btn-info");

		$(" .comment-content").addClass("alert alert-secondary");

		$("#respond").css({

			"border": "1px solid",
  			"border-radius": "8px",
  			"padding" : "20px",
  			"margin-top" : "20px"
		});

		//$("#commentform p").contents().unwrap();
		$('#commentform .comment-form-comment').wrapAll('<div class="form-group"></div>');

		$("#commentform .comment-form-comment textarea ").addClass("form-control");

		$("#commentform .form-submit input ").addClass("btn btn-secondary");

		$(".comment-author .fn a").contents().unwrap();

		$(".comment-metadata time").unwrap();


		$(".comment li").prepend("<hr>");

		$(".widget-item ul").css("list-style-type", "none");

		$(".menu-footer-menu-links-container ul").css("list-style-type", "none");
		
		$(".wp-block-archives-list ").css("padding-left", "20px");
		$(".wp-block-categories-list").css("padding-left", "20px");

		//$("").append("<div></div>");
		//$('<div>hello</div>').appendTo('.fotorama .responsive-image-silder');
		
		/*$(".jumbotron").css({ height: $(window).height() + "px" });

		$(window).on("resize", function() {
		  $(".jumbotron").css({ height: $(window).height() + "px" });
		});*/

	})
})(jQuery);

( function ( $ ) {
	/**
	 * Clock Class.
	 */
	class Clock {
		/**
		 * Constructor
		 */
		constructor() {
			this.initializeClock();
		}

		/**
		 * initializeClock
		 */
		initializeClock() {
			setInterval( () => this.time(), 1000 );
		}

		/**
		 * Numpad
		 *
		 * @param {String} str String
		 *
		 * @return {string} String
		 */
		numPad( str ) {
			const cStr = str.toString();
			if ( 2 > cStr.length ) {
				str = 0 + cStr;
			}
			return str;
		}

		/**
		 * Time
		 */
		time() {
			const currDate = new Date();
			const currSec = currDate.getSeconds();
			const currMin = currDate.getMinutes();
			const curr24Hr = currDate.getHours();
			const ampm = 12 <= curr24Hr ? 'pm' : 'am';
			let currHr = curr24Hr % 12;
			currHr = currHr ? currHr : 12;

			const stringTime =
				currHr +
				':' +
				this.numPad( currMin ) +
				':' +
				this.numPad( currSec );
			const timeEmojiEl = $( '#time-emoji' );

			if ( 5 <= curr24Hr && 18 >= curr24Hr ) {
				timeEmojiEl.text( '🌞' );
			} else {
				timeEmojiEl.text( '🌜' );
			}

			$( '#time' ).text( stringTime );
			$( '#ampm' ).text( ampm );
		}
	}

	new Clock();
} )( jQuery );