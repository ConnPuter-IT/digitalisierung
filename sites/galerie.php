<!DOCTYPE html>
<html>
    <head>
        <title>Digitalisierung Leipzig</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
            <!--[if lte IE 8]>
        <script src="../js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../js/skel.min.js"></script>
        <script src="../js/skel-panels.min.js"></script>
        <script src="../js/init.js"></script>

        <link rel="stylesheet" href="../css/skel-noscript.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <script type="text/javascript" src="../js/fancybox/lib/jquery-1.10.1.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="../js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="../js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="../js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="../js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
        <script type="text/javascript" src="../js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="../js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="../js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="../js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script src="js/fancybox/skel.min.js"></script>
        <script src="js/fancybox/skel-panels.min.js"></script>
        <script src="js/fancybox/init.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.fancybox').fancybox();
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title : {
                        type : 'outside'
                        },
                        overlay : {
                            speedOut : 0
                        }
                    }
                });
                $(".fancybox-effects-b").fancybox({
                    openEffect  : 'none',
                    closeEffect        : 'none',
                    helpers : {
                        title : {
                        type : 'over'
                        }
                    }
                });
                $(".fancybox-effects-c").fancybox({
                    wrapCSS    : 'fancybox-custom',
                    closeClick : true,
                    openEffect : 'none',
                    helpers : {
                        title : {
                        type : 'inside'
                        },
                        overlay : {
                            css : {
                                'background' : 'rgba(238,238,238,0.85)'
                            }
                        }
                    }
                });
            // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,
                    penEffect : 'elastic',
                    openSpeed  : 150,
                    closeEffect : 'elastic',
                    closeSpeed  : 150,
                    closeClick : true,
                    helpers : {
                        overlay : null
                        }
                });
            // Button helper. Disable animations, hide close button, change title type and content
                $('.fancybox-buttons').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',
                    closeBtn  : false,
                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        buttons        : {}
                    },
                    afterLoad : function() {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });
            // Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                $('.fancybox-thumbs').fancybox({
                    prevEffect : 'none',
                    nextEffect : 'none',
                    closeBtn  : false,
                    arrows    : false,
                    nextClick : true,
                    helpers : {
                        thumbs : {
                            width  : 50,
                            height : 50
                        }
                    }
                });

            // Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                $('.fancybox-media')
                    .attr('rel', 'media-gallery')
                    .fancybox({
                        openEffect : 'none',
                        closeEffect : 'none',
                        prevEffect : 'none',
                        nextEffect : 'none',
                        arrows : false,
                        helpers : {
                            media : {},
                            buttons : {}
                        }
                    });

                        /*
                         *  Open manually
                         */

                        $("#fancybox-manual-a").click(function() {
                                $.fancybox.open('1_b.jpg');
                        });

                        $("#fancybox-manual-b").click(function() {
                                $.fancybox.open({
                                        href : 'iframe.html',
                                        type : 'iframe',
                                        padding : 5
                                });
                        });

                        $("#fancybox-manual-c").click(function() {
                                $.fancybox.open([
                                        {
                                                href : '1_b.jpg',
                                                title : 'My title'
                                        }, {
                                                href : '2_b.jpg',
                                                title : '2nd title'
                                        }, {
                                                href : '3_b.jpg'
                                        }
                                ], {
                                        helpers : {
                                                thumbs : {
                                                        width: 75,
                                                        height: 50
                                                }
                                        }
                                    });
                            });
                        });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
            body {
                    max-width: 0 auto;
                    margin: 0 auto;
                }
        </style>
    </head>
<body>

<?php include_once '../php_static/menue.php'; ?>
<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">
    <!-- Content -->
    <div id="content" class="12u skel-cell-important">
        <section>
            <header>
                <h2>Galerie</h2>
                    <h1>Hier finden Sie einige Beispiele unserer Arbeit.</h1>
                    <p>
                        <a class="fancybox"  href="../images/Blatt-1g.jpg"><img src="../images/Blatt-1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Fisch-1g.jpg"><img src="../images/Fisch-1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/graffi2g.jpg"><img src="../images/graffi2k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/graffi1g.jpg"><img src="../images/graffi1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Rose2g.jpg"><img src="../images/Rose2k.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/pic-2-5.jpg"><img src="../images/pic-2-5k.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/Nepal02g.jpg"><img src="../images/Nepal02k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Nepal01g.jpg"><img src="../images/Nepal01k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/wasser2g.jpg"><img src="../images/wasser2k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/schiene1g.jpg"><img src="../images/schiene1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/dj1g.jpg"><img src="../images/dj1k.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/Pavilion1g.jpg"><img src="../images/Pavilion1k.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/am%20Wehr1g.jpg"><img src="../images/am%20Wehr1k.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/wasser1g.jpg"><img src="../images/wasser1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/mast1g.jpg"><img src="../images/mast1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/licht-1g.jpg"><img src="../images/licht-1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Qualle-3g.jpg"><img src="../images/Qualle-3k.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/Rose1g.jpg"><img src="../images/Rose1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/sonne1g.jpg"><img src="../images/sonne1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Qualle-2g.jpg"><img src="../images/Qualle-2k.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/Kuppel-1g.jpg"><img src="../images/Kuppel-1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Hotel-1g.jpg"><img src="../images/Hotel-1k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/magnolia1g.jpg"><img src="../images/magnolia1k.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/pic-2-7orig.jpg"><img src="../images/pic-2-7origk.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/pic-2-7bearbeitet.jpg"><img src="../images/pic-2-7bearbeitetk.jpg" alt="Bild" /></a><br />
                        <a class="fancybox" href="../images/pic-2-9orig.jpg"><img src="../images/pic-2-9origk.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/pic-2-9bearbeitet.jpg"><img src="../images/pic-2-9bearbeitetk.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox" href="../images/pic-2-8orig.jpg"><img src="../images/pic-2-8origk.jpg" alt="Bild" /></a>
                        <a class="fancybox" href="../images/pic-2-8bearbeitet.jpg"><img src="../images/pic-2-8bearbeitetk.jpg" alt="Bild" /></a>
                    <br />
                        <a class="fancybox"  href="../images/Pic-2-2.jpg"><img src="../images/Pic-2-2k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Pic-3-2.jpg"><img src="../images/Pic-3-2k.jpg" alt="Bild" /></a>
                        <a class="fancybox"  href="../images/Pic-4-2.jpg"><img src="../images/Pic-4-2k.jpg" alt="Bild" /></a>
                    </p>
    </div>
    <!-- /Content -->

                </div>
            </div>
        </div>
<!-- Main -->

<!-- Copyright -->
    <div id="copyright">
        <div class="container">
            Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
        </div>
    </div>
        <script type="text/javascript">
            $(document).ready(function() {
            $(".fancybox").fancybox();
            });
        </script>
    </body>
</html>