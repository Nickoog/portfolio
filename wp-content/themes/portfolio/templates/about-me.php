<section id="about-me">
    <div class="container">
        <div class="section-title-wrapper">
            <h2>About <strong>me</strong></h2>
            <?php get_separator('50px', '2px', 'yellow'); ?>
        </div>
        <div class="content-container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="text-container">
                        <h3>
                            Alberto Lacerda
                        </h3>
                        <p>
                            Driven Front-End Web Developer with deep curiosity in existing and emerging web technologies. In pursuit of JavaScript mastery, I have adopted a scalable front-end stack based on React.js, JQuery, Angular.js, Bootstrap, SASS, CSS. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <?php get_skill('fa-code', 'CODE', 'Creating web applications for desktop and mobile, focused on speed, responsiveness and performance.');?>
                </div>
                <div class="col-md-3">
                    <?php get_skill('fa-code', 'CODE', 'Creating web applications for desktop and mobile, focused on speed, responsiveness and performance.');?>
                </div>
                <div class="col-md-3">
                    <?php get_skill('fa-code', 'CODE', 'Creating web applications for desktop and mobile, focused on speed, responsiveness and performance.');?>
                </div>
            </div>
            <div class="row width">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="button-container">
                        <?php get_button('contact');?>
                        <?php get_button('contact');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portrait" class="background-image" style="background-image:url('<?= get_field('bg_img_header', 'option')['url']; ?>')">
        <div class="filter"></div>
    </div>
</section>