(function( $ ) {
 
    $.pad = function(n, width, z) {
		z = z || '0';
		n = n + '';
		return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
	}
 
	$.fill = function(n, width, z) {
		z = z || '0';
		n = n + '';
		return n.length >= width ? n : n + new Array(width - n.length + 1).join(z);
	}
 
})( jQuery );
