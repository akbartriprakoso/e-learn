
<!DOCTYPE html>
<html>
<head>
    <title>Video</title>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        #mcTooltip.lessPadding {
            padding: 5px;
            border-width:1px;
            border-color: transparent;
            border-radius: 0px;
            padding:2px;
            background-color:#fff;
        }
    </style>
</head>
<body>
            <div id="sliderFrame">
                <div id="slider">
                    <img src="/images/image-slider-1.jpg" />
                    <a class="video" href="http://www.youtube.com/watch?v=VGiGHQeOqII">
                        <b data-src="/images/image-slider-2.jpg">YouTube Slider</b>
                    </a>
                    <a class="lazyImage" href="/images/image-slider-3.jpg">Plain JavaScript Image Slider</a>
                    <a class="lazyImage" href="/images/image-slider-4.jpg">Slide 4</a>
                    <a class="lazyImage" href="/images/image-slider-5.jpg" title="#htmlcaption1">Slide 5</a>
                </div>    
</body>
</html>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-27119547-1', 'auto');
    ga('send', 'pageview');
    </script>

<script src="/bundles/jisJs?v=U7RXlUWeI3wHFw15lv618HYWJgHTqNnHjoCkxLbaDVs1"></script>

<script type="text/javascript">
    imageSlider.thumbnailPreview(function (thumbIndex) { return "<img s" + "rc='/slider/jsImgSlider/images/thumb" + (thumbIndex + 1) + ".jpg' style='width:140px;height:61px;' />"; }, { showDelay: 10, hideDelay: 100, effect: "slide", duration: 200, offsetX: 3, offsetY: 22, position: 0, calloutPosition: 0.5, cssClass: "lessPadding" });
</script>

<script type="text/javascript">
var addthis_config = { data_track_addressbar: false, pubid: 'ra-4fe3ac362ddf5c8f' };
var addthisScript = document.createElement('script');
addthisScript.setAttribute('src', 'http://s7.addthis.com/js/300/addthis_widget.js#domready=1');
$(window).load(function () {
    document.body.appendChild(addthisScript);
});
</script>