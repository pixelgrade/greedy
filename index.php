<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/vendor/spectrum.css"/>
    <script src="assets/js/vendor/conditionizr.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/spectrum.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
    conditionizr({
        debug      : true,
        scriptSrc  : 'assets/js/conditionizr/',
        styleSrc   : 'assets/css/conditionizr/',
        ieLessThan : {
            active: true,
            version: '9',
            scripts: true,
            styles: true,
            classes: true,
            customScript: '' +
            '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js,' +
            '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js'
        },
        chrome     : { scripts: true, styles: true, classes: true, customScript: '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js, //cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js' },
        safari     : { scripts: true, styles: true, classes: true, customScript: false },
        opera      : { scripts: true, styles: true, classes: true, customScript: false },
        firefox    : { scripts: true, styles: true, classes: true, customScript: false },
        ie10       : { scripts: true, styles: true, classes: true, customScript: false },
        ie9        : { scripts: true, styles: true, classes: true, customScript: false },
        ie8        : { scripts: true, styles: true, classes: true, customScript: false },
        ie7        : { scripts: true, styles: true, classes: true, customScript: false },
        ie6        : { scripts: true, styles: true, classes: true, customScript: false },
        retina     : { scripts: true, styles: true, classes: true, customScript: false },
        touch      : { scripts: true, styles: true, classes: true, customScript: false },
        mac        : true,
        win        : true,
        x11        : true,
        linux      : true
    });
</script>
</head>
<body class="l-sidebar-right" data-accentcolor="#0179a2">
    <div class="settings-container">
        <a class="settings-toggle" href="#"><i class="icon-cogs"></i></a>
        <div class="settings">
            <p>Layout</p>
            <select name="layout" id="">
                <option value="">Full Width</option>
                <option value="l-boxed">Boxed</option>
            </select>
            <p>Sidebar</p>
            <select name="sidebar" id="">
                <option value="l-sidebar-right">Sidebar Right</option>
                <option value="l-sidebar-left">Sidebar Left</option>
                <option value="l-fullwidth">No Sidebar</option>
            </select>
            <p>Navigation</p>
            <select name="navigation" id="">
                <option value="">Default</option>
                <option value="inverse">Inverse</option>
            </select>
            <p>Accent Color</p>
            <input name="accent-color" type="text" />
        </div>
    </div>
    <div id="page" class="rhytm-overlay-none">
        <div class="wrapper">
            <div class="container container-header">
                <div class="row">
                    <div class="span6">
                        <div class="site-branding">
                            <h1>Enhance <small>Your web experience</small></h1>
                        </div>
                    </div>
                    <div class="span6">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container container-navigation">
                <ul class="nav">
                    <li class="current"><a href="#">Home</a></li>
                    <li><a href="#">Features</a>
                        <ul>
                            <li><a href="#">Full Width</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing Tables</a></li>
                            <li><a href="#">FlexSlider</a></li>
                            <li><a href="#">Page Templates</a>
                                <ul>
                                    <li><a href="#">Sidebar Right</a></li>
                                    <li><a href="#">Sidebar Left</a></li>
                                    <li><a href="#">Single Post</a></li>
                                    <li><a href="#">Single Project</a>
                                        <ul>
                                            <li><a href="#">Third level menu item</a></li>
                                            <li><a href="#">Third level menu item</a></li>
                                            <li><a href="#">Third level menu item</a></li>
                                            <li><a href="#">Third level menu item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Shortcodes</a></li>
                    <li><a href="#">Portfolio</a>
                        <ul>
                            <li><a href="#">2 Columns</a></li>
                            <li><a href="#">3 Columns</a></li>
                            <li><a href="#">4 Columns</a></li>
                            <li><a href="#">Single Project</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <!-- <select class="selectnav" id="selectnav1">
                    <option value="#">Menu</option>
                    <option value="#">Home</option>
                    <option value="#">Features</option>
                    <option value="#">- Full Width</option>
                    <option value="#">- About Us</option>
                    <option value="#">- Services</option>
                    <option value="#">- Pricing Tables</option>
                    <option value="#">- FlexSlider</option>
                    <option value="#">- Page Templates</option>
                    <option value="#">-- Sidebar Right</option>
                    <option value="#">-- Sidebar Left</option>
                    <option value="#">-- Single Post</option>
                    <option value="#">-- Single Project</option>
                    <option value="#">Shortcodes</option>
                    <option value="#">Portfolio</option>
                    <option value="#">- 2 Columns</option>
                    <option value="#">- 3 Columns</option>
                    <option value="#">- 4 Columns</option>
                    <option value="#">- Single Project</option>
                    <option value="#">Blog</option>
                    <option value="#">Contact</option>
                </select>
                <div class="search-form">
                    <form method="get" action="#">
                        <input type="text" class="search-text-box">
                    </form>
                </div> -->
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <h2 class="slogan align-center">We are a group of experienced designers and developers.<br>
We set new standards in user experience &amp; make future happen.</h2>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="flexslider">
                    <ul class="slides">
                        <li><?php the_image(); ?></li>
                        <li><?php the_image(); ?></li>
                        <li><?php the_image(); ?></li>
                        <li><?php the_image(); ?></li>
                        <li><?php the_image(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <i class="icon-leaf icon-2x pull-left"></i>
                        <h5>Fresh &amp; Clean Design</h5>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </div>
                    <div class="span4">
                        <i class="icon-cog icon-2x pull-left"></i>
                        <h5>Easily Customization</h5>
                        <p>Nam aliquam volutpat leo vel bibendum nunc elit purus, tempus pulvinare rhoncus egestas nibh volutpat leo.</p>
                    </div>
                    <div class="span4">
                        <i class="icon-mobile-phone icon-2x pull-left"></i>
                        <h5>Fully Responsive</h5>
                        <p>Fusce porttitor turpis quis molestie costant equat. Nam purus, tincidunt sedeat dapibus ugravida ut dui. Fusce et magna libero</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            function the_image() {
                $dir = "assets/img/stock";
                $images = scandir($dir);
                $i = rand(2, sizeof($images)-1);
                echo "<img src=".$dir."/".$images[$i]." alt='Random Image'>";
            }
        ?>
        <div class="wrapper">
            <div class="container">
                <div class="carousel-heading">
                    <h3 class="section-title">Recent Works</h3>
                    <a href="#" class="carousel-prev"><i class="icon-chevron-left"></i></a>
                    <a href="#" class="carousel-next"><i class="icon-chevron-right"></i></a>
                </div>
                <div class="row">
                    <div class="span3">
                        <?php the_image(); ?>
                        <div class="work-description">
                            <h4 class="work-title">Cool breath</h4>
                            <p>Do the harlem shake you little prick</p>
                        </div>
                    </div>
                    <div class="span3">
                        <?php the_image(); ?>
                        <div class="work-description">
                            <h4 class="work-title">Cool breath</h4>
                            <p>Do the harlem shake you little prick</p>
                        </div>
                    </div>
                    <div class="span3">
                        <?php the_image(); ?>
                        <div class="work-description">
                            <h4 class="work-title">Cool breath</h4>
                            <p>Do the harlem shake you little prick</p>
                        </div>
                    </div>
                    <div class="span3">
                        <?php the_image(); ?>
                        <div class="work-description">
                            <h4 class="work-title">Cool breath</h4>
                            <p>Do the harlem shake you little prick</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="l-main">
                        <h3 class="section-title">Latest Blog Articles</h3>
                        <ol class="slats">
                            <li class="article">
                                <div class="article-thumb"><?php the_image(); ?></div>
                                <a class="article-link" href="#">
                                    <h3 class="article-title">This is the title</h3>
                                </a>
                                <div class="article-content">
                                    <div class="article-meta"><span><i class="icon-calendar"></i>On 10 August, 2012</span> <span><i class="icon-user"></i>By <a href="#">admin</a></span> <span><i class="icon-comment"></i>With <a href="#">12 Comments</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </li>
                            <li class="article">
                                <div class="article-thumb"><?php the_image(); ?></div>
                                <a class="article-link" href="#">
                                    <h3 class="article-title">This is the title</h3>
                                </a>
                                <div class="article-content">
                                    <div class="article-meta"><span><i class="icon-calendar"></i>On 10 August, 2012</span> <span><i class="icon-user"></i>By <a href="#">admin</a></span> <span><i class="icon-comment"></i>With <a href="#">12 Comments</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </li>
                            <li class="article">
                                <div class="article-thumb"><?php the_image(); ?></div>
                                <a class="article-link" href="#">
                                    <h3 class="article-title">This is the title</h3>
                                </a>
                                <div class="article-content">
                                    <div class="article-meta"><span><i class="icon-calendar"></i>On 10 August, 2012</span> <span><i class="icon-user"></i>By <a href="#">admin</a></span> <span><i class="icon-comment"></i>With <a href="#">12 Comments</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </li>
                        </ol>
                        <nav class="page">
                            <ul>
                                <li class="page-prev"><a href="#"><i class="icon-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="page-next"><a href="#"><i class="icon-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                        <h3>Climb leg rub face on everything</h3>
                        <p>Give attitude nap all day for under the bed. Chase mice attack feet but rub face on.</p>
                        <h3>Grid</h3>
                        <ul>
                            <li>Reset push, pull and offset classes on different viewports</li>
                            <li>Visibility classes</li>
                            <li>Containers (with centering and stuff)</li>
                        </ul>
                        <h3>Typography</h3>
                        <ul>
                            <li>Baseline grid (read some print design guides about spacing and the way heading relate to content)</li>
                            <li>Take care at headings, hgroups, heading with subheadings, nested lists</li>
                            <li>Spacing (leader, trailer, hr, maybe other tags for spacing?? common dimensions of spacing)</li>
                            <li>Font stacks</li>
                            <li>Test alignment classes, text styling classes (emphasises paragraphs)</li>
                            <li>Lists</li>
                        </ul>
                        <h3>Misc</h3>
                        <ul>
                            <li>Easy theming and color changing</li>
                            <li>Prepare for major icon packs</li>
                        </ul>
                    </div>
                    <div class="l-side">
                        <div class="widget-area">
                            <div class="widget">
                                <h4 class="widget-title">Father Knows Best</h4>
                                <p>Watching ice melt. This is fun. I'm thinking two circus clowns dancing. You? This man is a knight in shining armor.</p>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Waiting to Exhale</h4>
                                <ol>
                                    <li>I feel like a jigsaw puzzle missing a piece. And I'm not even sure what the picture should be.</li>
                                    <li>I'm doing mental jumping jacks.</li>
                                </ol>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Slack Tide</h4>
                                <p>Tell him time is of the essence. I'm Dexter, and I'm not sure what I am. I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <h3 class="section-title">Interaction elements</h3>
                <ul>
                    <li>Alerts and notifications</li>
                    <li>Progress bars (swipe)</li>
                    <li>Tooltips and flyouts</li>
                    <li>Modal (magnificent modal)</li>
                </ul>
                <p>Tonight's the night. And it's going to happen again and again. It has to happen. This man is a knight in shining armor. I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo. Somehow, I doubt that. You have a good heart, Dexter. I'm going to tell you something that I've never told anyone before.</p>
                <p>I am not a killer. I'm a sociopath; there's not much he can do for me. Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be. I'm really more an apartment person. I'm Dexter, and I'm not sure what I am. God created pudding, and then he rested.</p>
                <ul>
                    <li>I'm doing mental jumping jacks.</li>
                    <li>Keep your mind limber.</li>
                </ul>
            </div>
        </div>
        <div class="wrapper wrapper-footer inverse">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h3>The title</h3>
                        <p>This is that mother-fucking short paragraph</p>
                    </div>
                    <div class="span4">
                        <h3>The title</h3>
                        <p>This is that mother-fucking short paragraph</p>
                    </div>
                    <div class="span4">
                        <h3>The title</h3>
                        <p>This is that mother-fucking short paragraph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="scroll-to-top"><i class="icon-chevron-up"></i></a>
</body>
</html>