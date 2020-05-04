                    <article class="article-card">
                      <a class="card-link" href="<?php echo get_term_link( $term ); ?>">
                        <div class="image">
<?php
$image_id = get_field( 'event_image', $term->taxonomy. '_'. $term->term_id );
echo wp_get_attachment_image( $image_id, 'contribution' );
?>
						</div>
                        <div class="body">
                          <p class="title"><?php echo $term->name; ?></p>
                          <p class="excerpt"><?php echo $term->description; ?></p>
                          <div class="buttonBox">
                            <button type="button" class="seeDetail">MORE</button>
                          </div>
                        </div>
                      </a>
                    </article>
