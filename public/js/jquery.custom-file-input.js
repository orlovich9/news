/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function( $, window, document, undefined )
{
	$( '.inputfile' ).each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.find( 'span' ).html( fileName );
			else
				$label.html( labelVal );
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
})( jQuery, window, document );

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader(),
         	file = input.files[0].name,
         	arFiles = ['jpg', 'jpeg', 'svg', 'png', 'bmp', 'gif'];

        reader.onload = function (e) {
        	if (arFiles.indexOf(file.split('.')[1]) >= 0) {
	            $('#avatar').attr('src', e.target.result);
        	} else {
        		$('#avatar').attr('src', '/news/public/images/avatar.png');
        	}
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file").change(function(){
    readURL(this);
});