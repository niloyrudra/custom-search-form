window.addEventListener( 'DOMContentLoaded', function() {
	

	//  global varials
	const sliderView = document.querySelector( '.swiper-wrapper' ),
		  sliderViewSlides = document.querySelector( '.swiper-wrapper' ).children,
		  arrowLeft = document.querySelector( '.arrow-left' ),
		  arrowRight = document.querySelector( '.arrow-right' ),
		  sliderLength = sliderViewSlides.length;

		  document.querySelector( '.search-container .swiper-wrapper' ).children[0].classList.add('is-active');

	//  sliding function
	const sliderMe = ( sliderViewItems, isActiveItem ) => {

		// Update the classes
		isActiveItem.classList.remove( 'is-active' );
		sliderViewItems.classList.add( 'is-active' );

		// CSS transform the active slide position
		sliderView.setAttribute( 'style', 'transform:translateX(-' + sliderViewItems.offsetLeft + 'px)' );

	}

	//  before sliding function
	const beforeSliding = (i) => {

		if( arrowLeft.classList.contains('display-none') ) {
			arrowLeft.classList.remove('display-none');
		}
		if( arrowRight.classList.contains('display-none') ) {
			arrowRight.classList.remove('display-none');
		}

		let isActiveItem = document.querySelector( '.swiper-wrapper li.is-active' ),
			currentItem = Array.from( sliderViewSlides ).indexOf( isActiveItem ) + i,
			nextItem = currentItem + i,
			sliderViewItems = document.querySelector( '.swiper-wrapper' ).children[nextItem];

			// If nextItem is bigger than the # of the slides
			if( nextItem > sliderLength ) {
				sliderViewItems = document.querySelector( '.swiper-wrapper' ).children[0];
			}

			if( nextItem >= sliderLength - 2 || nextItem >= sliderLength - 1 || nextItem >= sliderLength ) {
				console.log('...last...')
				arrowRight.classList.add('display-none');
			}
		
			// if nectItem is 0
			if( nextItem == 0 ) {
				sliderViewItems = document.querySelector( '.swiper-wrapper' ).children[0];
				arrowLeft.classList.add('display-none');
			}

			// trigger the slider method
			sliderMe( sliderViewItems, isActiveItem );

	}

	//  triggers arrows
	arrowRight.addEventListener( 'click', () => beforeSliding(1) );
	arrowLeft.addEventListener( 'click', () => beforeSliding(-1) );

} );
