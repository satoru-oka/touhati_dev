<?php
/*
Template Name: 店舗詳細
*/
get_header();
?>
			  <div class="page-inner full-width">
                <div class="page-main" id="pg-shopDetail">
                  <div class="lead-inner">
<?php
if ( have_posts() ):
	while ( have_posts() ): the_post();
		the_content();
	endwhile;
endif;
?>
                    <div class="bg-shop"></div>
                  </div>
                  <div class="shopList-Container">
                    <div class="shopList-head">
                      <span class="title-en"></span>
                      <h3 class="title">ショップリスト</h3>
                    </div>
                    <div class="shopList-inner">
                      <ul class="shopList">
                        <li class="shopList-item">
                          <div class="shop-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otemachi_cinema.png" alt="" />
                          </div>
                          <div class="shop-body">
                            <p class="shop-title">パシフィックシネマ 大手町 </p>
                            <p class="shop-caption">
                              大手町モール35階&#12316;38階にある都内最大級の15のスクリーンを備えている映画館です。大きいものでは700席あるスクリーンから、100席ほどのスクリーンまで様々なタイプのスクリーンで映画をお楽しみいただけます。<br />
                              IMAX、4DXなど最新の上映も行っております。体全体で感じる映画をお楽しみください。<br />
                              隣の座席との間隔も広めに設計されているため長時間の鑑賞も快適にお楽しみいただけます。<br />
                              また、プラチナシート、ファミリーシート、カップルシートなど様々な場面に応じたシートをご用意しております。ご家族で、恋人と、また特別な人へのおもてなしとしてぜひお使いください。 
                            </p>
                            <div class="shop-detail">
                              <dl>
                                <dt>営業時間</dt>
                                <dd>9:00&#12316;0:00 </dd>
                              </dl>
                              <dl>
                                <dt>フロア情報</dt>
                                <dd>35階&#12316;38階 シネマフロア</dd>
                              </dl>
                            </div>
                          </div>
                        </li>
                        <li class="shopList-item">
                          <div class="shop-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otemachi_shikou.png" alt="" />
                          </div>
                          <div class="shop-body">
                            <p class="shop-title">和牛専門 「大手町 至高（しこう）」 </p>
                            <p class="shop-caption">
                              料理長自ら和牛の買い付けに行き、厳選しているそのこだわり。 その中でも特に上質な最高級和牛の但馬牛（たじまぎゅう）を使います。<br />
                              和食の枠にとらわれず、料理人の柔軟な発想で、様々な姿でお客様に但馬牛の料理を堪能いただきます。 その芸術的な料理はまさに至高。ここでしか味わえません。ぜひお試しください。 
                            </p>
                            <div class="shop-detail">
                              <dl>
                                <dt>営業時間</dt>
                                <dd>11:00～22:00（L.O. 21:30） </dd>
                              </dl>
                              <dl>
                                <dt>フロア情報</dt>
                                <dd>40階 和のフロア</dd>
                              </dl>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
