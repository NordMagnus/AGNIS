<?php
    /*
     *      OSCLass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2010 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
    osc_get_premiums($max = 20); 
?>
        <?php osc_current_web_theme_path('header.php') ; ?>
        <div id="main">
            <div id="home-search">
                <form action="<?php echo osc_base_url(true) ; ?>" method="get" class="search" onsubmit="javascript:return doSearch();">
                    <input type="hidden" name="page" value="search" />
                    <!--<h2>< ?php _e("Find a place, <span>find a home</span>", 'realestate');?></h2>-->
  				<h2><span style="color:#005eac;">Encuentra tu</span> <span style="color:#ffcb05;">próxima vivienda</span></h2>
                    <div class="has-placeholder"><span id="search-placeholder"><?php echo osc_get_preference('keyword_placeholder','realestate') ; ?></span><input type="text" name="sPattern" id="query" class="input-text js-input-home" value="" /><a href="#" class="ui-button ui-button-big js-submit"><?php _e("Search", 'realestate');?></a><div id="message-seach"></div></div>
                </form>
                <div class="categories" style="border:1px solid #D9DDE2; border-radius:4px; margin-top:23px; width:452px; text-align:center; padding:8px;">
                   
                            <a href="venta" title=""><div class="catventa"></div></a>
                            <a href="renta" title=""><div class="catrenta"></div></a>
							
                   
                    <div class="clear"></div>
               </div> 
            </div>
           <div id="premium-stage">
                <?php if( osc_count_premiums() == 0) { ?>
                    <p class="empty"><?php _e('No hay ninguna propiedad destacada', 'realestate') ; ?></p>
                <?php } 
                    ?>
	               <?php while ( osc_has_premiums() ) { ?>

                        <div class="ui-item">
                            <div class="frame">
                                <a href="<?php echo osc_premium_url() ; ?>"><?php if( osc_images_enabled_at_items() ) { ?>
                                    <?php if( osc_count_premium_resources() ) { ?>
                                        <img src="<?php echo osc_resource_preview_url() ; ?>" title="<?php echo osc_premium_title(); ?>" alt="<?php echo osc_premium_title(); ?>"/>
                                    <?php } else { ?>
                                        <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                    <?php } ?>
                                <?php } else { ?>
                                    <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                <?php } ?>
                                <div class="type"><?php echo osc_premium_category(); ?></div>
                                <div class="destaca"></div>
                                </a>
                            </div>
                            <div class="info">
                                <div>
                                    <h3><a href="<?php echo osc_premium_url() ; ?>"><?php if(strlen(osc_premium_title()) > 70){ echo substr(osc_premium_title(), 0, 70).'...'; } else { echo osc_premium_title(); } ?></a></h3>
                                </div>
                                <div class="data"><?php item_realestate_attributes(); ?></div>
                                <div class="author">
                                    <!--< ?php echo osc_format_date(osc_item_pub_date()); ?><br />-->
									<?php if( osc_price_enabled_at_items() ) { ?><?php echo osc_premium_formated_price() ; ?><?php } ?><br />
                                    <?php echo osc_premium_city(); ?> (<?php echo osc_premium_region();?>)
                                </div>
                            </div>
                        </div>
					
                    <?php
                           
                            
                        }
                      ?>
                <div class="clear"></div>
                <?php View::newInstance()->_erase('items') ;
                 ?>
                <script type="text/javascript">
                /* <![CDATA[ */
                var slides = $("#premium-stage .ui-item:not(:last)").hide();
                if(slides.length >= 1){
                     slider = setInterval('showNext()',5000);
                }
                function showNext(){
                    $("#premium-stage .ui-item:last").prev().fadeIn(500);
                    $("#premium-stage .ui-item:last").fadeOut(500,function(){
                        $(this).remove().prependTo('#premium-stage');
                    });
                    
                }
                function showSlide(el){
                     clearInterval(slider);
                     if('#'+$("#slider-stage .slider:last").attr('id') != el){
                          $(el).remove().insertBefore("#slider-stage .slider:last");
                          showNext();    
                     }
                }
                /* ]]> */
                </script>
            </div>
        </div>
        <div class="content home" style="margin-top:60px;">
            <h2 style="font-size:18px;"><?php _e('Latest Items', 'realestate') ; ?></h2>
            <div id="latest-ads">               
			<?php osc_reset_latest_items(); ?>
                <?php if( osc_count_latest_items() == 0) { ?>
                    <p class="empty"><?php _e('No Latest Items', 'realestate') ; ?></p>
                <?php } else { ?>
                    <?php while ( osc_has_latest_items() ) { ?>
                        <div class="ui-item ui-item-list">
                            <div class="frame">
                                <a href="<?php echo osc_item_url() ; ?>"><?php if( osc_images_enabled_at_items() ) { ?>
                                    <?php if( osc_count_item_resources() ) { ?>
                                        <img src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>"/>
                                    <?php } else { ?>
                                        <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                    <?php } ?>
                                <?php } else { ?>
                                    <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                <?php } ?>
                                <!--<div class="type">< ?php echo osc_item_category(); ?></div>-->
                                <?php if( osc_price_enabled_at_items() ) { ?><div class="price"><?php echo osc_item_formated_price() ; ?></div> <?php } ?>
                                </a>
                            </div>
                            <div class="info">
                                <div>
                                    <h3><a href="<?php echo osc_item_url() ; ?>"><?php if(strlen(osc_item_title()) > 31){ echo substr(osc_item_title(), 0, 22).'...'; } else { echo osc_item_title(); } ?></a></h3>
                                </div>
                                <!--<div class="data">< ?php item_realestate_attributes(); ?></div>-->
								<div class="data"><?php echo osc_item_category(); ?></div>
                                <div class="author">
                                    <?php echo osc_item_city(); ?> (<?php echo osc_item_region();?>)
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <div class="clear"></div>
                <?php View::newInstance()->_erase('items') ;
                } ?>
            </div>
            <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
                <div class="pagination-box">
                    <a href="<?php echo osc_search_show_all_url();?>" class="ui-button ui-button-grey"><?php _e("Mostrar todas las propiedades", 'realestate'); ?> &raquo;</a></p>
                </div>
            <?php } ?>
        </div>
        <?php osc_current_web_theme_path('footer.php') ; ?>
