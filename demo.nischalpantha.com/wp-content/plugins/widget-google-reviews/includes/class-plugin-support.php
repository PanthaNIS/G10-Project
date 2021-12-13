<?php

namespace WP_Rplg_Google_Reviews\Includes;

class Plugin_Support {

    public function __construct() {
    }

    public function register() {
        add_action('grw_admin_page_grw-support', array($this, 'init'));
        add_action('grw_admin_page_grw-support', array($this, 'render'));
    }

    public function init() {

    }

    public function render() {

        $tab = isset($_GET['grw_tab']) && strlen($_GET['grw_tab']) > 0 ? sanitize_text_field(wp_unslash($_GET['grw_tab'])) : 'welcome';

        ?>
        <div class="grw-page-title">
            Support and Troubleshooting
        </div>

        <div class="grw-support-workspace">

            <div data-nav-tabs="">

                <div class="nav-tab-wrapper">
                    <a href="#welcome" class="nav-tab<?php if ($tab == 'welcome') { ?> nav-tab-active<?php } ?>">
                        <?php echo __('Welcome', 'grw'); ?>
                    </a>
                    <a href="#fig" class="nav-tab<?php if ($tab == 'fig') { ?> nav-tab-active<?php } ?>">
                        <?php echo __('Full Installation Guide', 'grw'); ?>
                    </a>
                    <a href="#support" class="nav-tab<?php if ($tab == 'support') { ?> nav-tab-active<?php } ?>">
                        <?php echo __('Support', 'grw'); ?>
                    </a>
                </div>

                <div id="welcome" class="tab-content" style="display:<?php echo $tab == 'welcome' ? 'block' : 'none'?>;">
                    <h3>Google Reviews Widget for WordPress</h3>
                    <div class="grw-flex-row">
                        <div class="grw-flex-col">
                            <span>Google Reviews plugin is an easy and fast way to integrate Google business reviews right into your WordPress website. This plugin works instantly and keep all Google places and reviews in WordPress database thus it has no depend on external services.</span>
                            <p style="font-size:20px;text-align:center"><b><u>Please read '<a href="<?php echo admin_url('admin.php?page=grw-support&grw_tab=fig'); ?>">Full Installation Guide</a>' to completely understand how it works and set up the plugin</u></b>.</p>
                            <p>Also you can find most common answers and solutions for most common questions and issues in next tabs.</p>
                            <div class="grw-alert grw-alert-success">
                                <strong>Try more features in the Business version</strong>: Merge Google, Facebook and Yelp reviews, Beautiful themes (Slider, Grid, Trust Badges), Shortcode support, Rich Snippets, Rating filter, Any sorting, Include/Exclude words filter, Hide/Show any elements, Priority support and many others.
                                <a class="button-primary button" href="https://richplugins.com/business-reviews-bundle-wordpress-plugin" target="_blank" style="margin-left:10px">Upgrade to Business</a>
                            </div>
                            <br>
                            <div class="grw-socials">
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.6&appId=1501100486852897";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-like" data-href="https://richplugins.com/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                <a href="https://twitter.com/richplugins?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @richplugins</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200" data-href="https://plus.google.com/101080686931597182099"></div>
                                <script type="text/javascript">
                                    window.___gcfg = { lang: 'en-US' };
                                    (function () {
                                        var po = document.createElement('script');
                                        po.type = 'text/javascript';
                                        po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </div>
                        </div>
                        <div class="grw-flex-col">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Wbst-UBgXXk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div id="fig" class="tab-content" style="display:<?php echo $tab == 'fig' ? 'block' : 'none'?>;">
                    <h3>How to connect Google reviews</h3>
                    <?php include_once(dirname(GRW_PLUGIN_FILE) . '/includes/page-setting-fig.php'); ?>
                </div>

                <div id="support" class="tab-content" style="display:<?php echo $tab == 'support' ? 'block' : 'none'?>;">
                    <h3>Most Common Questions</h3>
                    <?php include_once(dirname(GRW_PLUGIN_FILE) . '/includes/page-setting-support.php'); ?>
                </div>

            </div>
        </div>
        <?php
    }
}
