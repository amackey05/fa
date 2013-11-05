$(function(){
    /* name of the selected album */
 
    /*
    when we resize the window, the image needs to be resized,
    and also the grid should be centered
    */
    $(window).bind('resize', function() {
        autoCenterPhotos()
        if($('.theimage').find('img').length)
            resize($('.theimage').find('img'));
    });

    /*
    resize the image, based on windows width and height
    */
    function resize($image){
        var widthMargin		= 10
        var heightMargin 	= 80;
		
        var windowH      = $(window).height()-heightMargin;
        var windowW      = $(window).width()-widthMargin;
        var theImage     = new Image();
        theImage.src     = $image.attr("src");
        var imgwidth     = theImage.width;
        var imgheight    = theImage.height;

        if((imgwidth > windowW)||(imgheight > windowH)){
            if(imgwidth > imgheight){
                var newwidth = windowW;
                var ratio = imgwidth / windowW;
                var newheight = imgheight / ratio;
                theImage.height = newheight;
                theImage.width= newwidth;
                if(newheight>windowH){
                    var newnewheight = windowH;
                    var newratio = newheight/windowH;
                    var newnewwidth =newwidth/newratio;
                    theImage.width = newnewwidth;
                    theImage.height= newnewheight;
                }
            }
            else{
                var newheight = windowH;
                var ratio = imgheight / windowH;
                var newwidth = imgwidth / ratio;
                theImage.height = newheight;
                theImage.width= newwidth;
                if(newwidth>windowW){
                    var newnewwidth = windowW;
                    var newratio = newwidth/windowW;
                    var newnewheight =newheight/newratio;
                    theImage.height = newnewheight;
                    theImage.width= newnewwidth;
                }
            }
        }
        $image.css({
            'width':theImage.width+'px',
            'height':theImage.height+'px'
            });
    }
	
    /*
    Orientation callback event
    When we flip the device we need the image to be resized,
    and also the grid should be centered
    */
    $('body').bind('turn', function(e, data){
        autoCenterPhotos()
        if($('.theimage').find('img').length){
            resize($('.theimage').find('img'));
        }
    });
});