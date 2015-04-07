<div class="donacion">
  <p>
    <?php _e( 'If you enjoyed and find helpful this plugin, please make a donation:', 'apg_free_shipping' ); ?>
  </p>
  <p><a href="<?php echo $apg_free_shipping['donacion']; ?>" target="_blank" title="<?php _e( 'Make a donation by ', 'apg_free_shipping' ); ?>APG"><span class="genericon genericon-cart"></span></a></p>
  <div>
    <p>Art Project Group:</p>
    <p><a href="http://www.artprojectgroup.es" title="Art Project Group" target="_blank"><strong class="artprojectgroup">APG</strong></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Follow us:', 'apg_free_shipping' ); ?>
    </p>
    <p><a href="https://www.facebook.com/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_free_shipping' ); ?>Facebook" target="_blank"><span class="genericon genericon-facebook-alt"></span></a> <a href="https://twitter.com/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_free_shipping' ); ?>Twitter" target="_blank"><span class="genericon genericon-twitter"></span></a> <a href="https://plus.google.com/+ArtProjectGroupES" title="<?php _e( 'Follow us on ', 'apg_free_shipping' ); ?>Google+" target="_blank"><span class="genericon genericon-googleplus-alt"></span></a> <a href="http://es.linkedin.com/in/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_free_shipping' ); ?>LinkedIn" target="_blank"><span class="genericon genericon-linkedin"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'More plugins:', 'apg_free_shipping' ); ?>
    </p>
    <p><a href="http://profiles.wordpress.org/artprojectgroup/" title="<?php _e( 'More plugins on ', 'apg_free_shipping' ); ?>WordPress" target="_blank"><span class="genericon genericon-wordpress"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Contact with us:', 'apg_free_shipping' ); ?>
    </p>
    <p><a href="mailto:info@artprojectgroup.es" title="<?php _e( 'Contact with us by ', 'apg_free_shipping' ); ?>e-mail"><span class="genericon genericon-mail"></span></a> <a href="skype:artprojectgroup" title="<?php _e( 'Contact with us by ', 'apg_free_shipping' ); ?>Skype"><span class="genericon genericon-wordpress"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Documentation and Support:', 'apg_free_shipping' ); ?>
    </p>
    <p><a href="<?php echo $apg_free_shipping['plugin_url']; ?>" title="<?php echo $apg_free_shipping['plugin']; ?>"><span class="genericon genericon-book"></span></a> <a href="<?php echo $apg_free_shipping['soporte']; ?>" title="<?php _e( 'Support', 'apg_free_shipping' ); ?>"><span class="genericon genericon-cog"></span></a></p>
  </div>
  <div>
    <p> <?php echo sprintf( __( 'Please, rate %s:', 'apg_free_shipping' ), $apg_free_shipping['plugin'] ); ?> </p>
    <?php echo apg_free_shipping_plugin( $apg_free_shipping['plugin_uri'] ); ?>
  </div>
</div>
