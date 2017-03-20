
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          


          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <?php foreach($recent_posts as $post) : ?>
    <li>
        <a href="<?php echo get_permalink($post['ID']) ?>">
            <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
            <div><?php echo $post['post_title'] ?></div>
        </a>
    </li>
<?php endforeach; ?> 
            <p><?php the_author_meta( 'description' ); ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({
               google_ad_client: "ca-pub-8855663070029233",
               enable_page_level_ads: true
              });
            </script>
          </div>
        </div><!-- /.blog-sidebar -->