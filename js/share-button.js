$( '.tools-share' ).click( function () {
  'use strict';
  var title, url;
  title = page_title;
  url = page_link;;
  navigator.share({
    title: title,
    text: title + ' - ' + blog_name,
    url: url
  })
  .catch( function ( error ) {
    console.error( 'Share API error: ', error );
  } );
} );
