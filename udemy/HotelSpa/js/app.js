
$(function() {
    $('#gallery a').on('click',function() {
        var image = $(this).find('img').attr('src');
        var imageSelected = image.split('thumbnail');
        var fullPath = imageSelected[0] + 'fullsize' + imageSelected[1];
        $('#galleryModal #imageContainer').attr('src', fullPath);

    })
});


$(document).foundation();
