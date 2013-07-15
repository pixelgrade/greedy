<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="assets/js/vendor/conditionizr.min.js"></script>
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
<body class="l-sidebar-right">
    <div id="page">
        <div class="wrapper">
            <header>
                <h1 id="main-title">
                    CityLife
                </h1>
                <ul class="main-menu">
                    <li>
                        Homepage
                        <ul class="submenu">
                            <li>Who we are</li>
                            <li>
                                <a href="#">what we do</a>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li>About</li>
                    <li>Services</li>
                    <li>Portfolio</li>
                    <li>Gallery</li>
                    <li>Contact</li>
                    <li class="search-button"></li>
                </ul>
            </header>
            <div class="container" hidden="hidden">
                <ul class="main-menu">
                    <li class="main-menu-item"><a href="#">menu item</a></li>
                    <li class="main-menu-item"><a href="#">menu item</a>
                        <ul class="sub-menu">
                            <li><a href="#">level2 item</a>
                                <ul class="sub-menu">
                                    <li><a href="#">level3 item</a></li>
                                    <li><a href="#">level3 item</a></li>
                                    <li><a href="#">level3 item</a></li>
                                    <li><a href="#">level3 item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">level2 item</a></li>
                            <li><a href="#">level2 item</a></li>
                            <li><a href="#">level2 item</a></li>
                        </ul>
                    </li>
                    <li class="main-menu-item"><a href="#">menu item</a></li>
                    <li class="main-menu-item"><a href="#">menu item</a></li>
                    <li class="main-menu-item"><a href="#">menu item</a></li>
                    <li class="main-menu-item"><a href="#">menu item</a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="test">
                    <h1>sadsa dsd asxsa</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum elit nunc, sed tincidunt nibh lobortis vitae. Aenean ut justo velit. Sed interdum porttitor adipiscing. Etiam posuere ligula eget bibendum sagittis. Pellentesque porttitor egestas vulputate. Maecenas eleifend mattis turpis, sed blandit sapien porta sagittis. Quisque feugiat luctus libero. Aliquam nec consectetur erat. Curabitur dignissim scelerisque urna sed ullamcorper. Etiam pulvinar felis lorem. Curabitur eget diam a nisl tincidunt placerat vel sit amet est.</p>
                    <p>Nullam quis risus ante. Duis accumsan tincidunt condimentum. Proin rutrum nisl ac malesuada semper. Sed consequat adipiscing odio vel eleifend. Vestibulum commodo pellentesque consectetur. Phasellus cursus tortor vitae orci vulputate, sed placerat quam sodales. Etiam ultricies elit enim, a porttitor mauris dapibus a. 
                    </p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="l-main">
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
                        <h3>Tables</h3>
                        <h3>Forms</h3>
                        <h3>Navigation patterns</h3>
                        <h3>Interaction elements</h3>
                        <ul>
                            <li>Alerts and notifications</li>
                            <li>Progress bars (swipe)</li>
                            <li>Tooltips and flyouts</li>
                            <li>Modal (magnificent modal)</li>
                        </ul>
                        <h1>My Bad</h1>
                        <p>Tonight's the night. And it's going to happen again and again. It has to happen. This man is a knight in shining armor. I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo. Somehow, I doubt that. You have a good heart, Dexter. I'm going to tell you something that I've never told anyone before.</p>
                        <h2>Born Free</h2>
                        <p>I am not a killer. I'm a sociopath; there's not much he can do for me. Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be. I'm really more an apartment person. I'm Dexter, and I'm not sure what I am. God created pudding, and then he rested.</p>
                        <ul>
                            <li>I'm doing mental jumping jacks.</li>
                            <li>Keep your mind limber.</li>
                        </ul>
                    </div>
                    <div class="l-side">
                        <h3>Father Knows Best</h3>
                        <p>Watching ice melt. This is fun. I'm thinking two circus clowns dancing. You? This man is a knight in shining armor.</p>
                        <h4>Waiting to Exhale</h4>
                        <p>Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be. I'm really more an apartment person. Keep your mind limber. You look&hellip;perfect. Watching ice melt. This is fun. Hello, Dexter Morgan.</p>
                        <ol>
                            <li>I feel like a jigsaw puzzle missing a piece. And I'm not even sure what the picture should be.</li>
                            <li>I'm doing mental jumping jacks.</li>
                        </ol>
                        <h5>Slack Tide</h5>
                        <p>Tell him time is of the essence. I'm Dexter, and I'm not sure what I am. I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
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
</body>
</html>