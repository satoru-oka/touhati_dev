                    <article class="article-card">
                      <a class="card-link" href="<?php the_permalink(); ?>">
                        <div class="image"><?php the_post_thumbnail( 'contribution' ); ?></div>
                        <div class="body">
                          <time><?php the_time( 'Y.m.d' ); ?></time>
                          <p class="title"><?php the_title(); ?></p>
                          <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                          <div class="buttonBox">
                            <button type="button" class="seeDetail">MORE</button>
                          </div>
                        </div>
                      </a>
                    </article>
