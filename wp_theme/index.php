<?php get_header();?>

		<section id="about" class="s_about bg_light">
			<div class="section_header">
				<h2>
					<?php
						$idObj = get_category_by_slug('s_about');
						$id = $idObj->term_id;
						echo get_cat_name($id);
					?>
				</h2>
				<div class="s_descr_wrap"><div class="s_descr"><?php echo category_description($id)?></div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<?php
							if(have_posts()) : query_posts('p=33');
							while(have_posts()) : the_post();
						?>
						<div class="col-md-4 col-md-push-4 animation_1">
							<h3>Фото</h3>
							<div class="person">
								<?php if(has_post_thumbnail()) : ?>
									<a class="popup" 
										href="<?php 
											$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
											echo $large_image_url[0]; 
										?>" 
										title="<?php the_title_attribute();?>"
									>
										<?php the_post_thumbnail(array(220, 220)); ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-4 col-md-pull-4 animation_2">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
						<?php endwhile; endif; wp_reset_query(); ?>

						<div class="col-md-4 animation_3 personal_last_block">
							<?php
								if(have_posts()) : query_posts('p=36');
								while(have_posts()) : the_post();
							?>
							<h3><?php the_title(); ?></h3>
							<h2 class="personal_header"><?php echo get_bloginfo('name'); ?></h2>
							<?php the_content(); ?>
							<?php endwhile; endif; wp_reset_query(); ?>
							<div class="social_wrap">
								<ul>
								<?php if(have_posts()) : query_posts('cat=3');
									while(have_posts()) : the_post(); ?>
									<li>
										<a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true); ?>"></i></a>
									</li>
								<?php endwhile; endif; wp_reset_query(); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="resume" class="s_resume">
			<div class="section_header">
				<h2>
					<?php
						$idObj = get_category_by_slug('s_resume');
						$id = $idObj->term_id;
						echo get_cat_name($id);
					?>
				</h2>
				<div class="s_descr_wrap"><div class="s_descr"><?php echo category_description($id)?></div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="resume_container">
							<div class="col-md-6 col-sm-6 left">
								<h3><?php echo get_cat_name(5)?></h3>
								<div class="resume_icon"><i class="icon-basic-case"></i></div>

								<?php if(have_posts()) : query_posts('cat=5');
									while(have_posts()) : the_post(); ?>
									<div class="resume_item">
										<div class="year"><?php echo get_post_meta($post->ID, 'years', true); ?></div>
										<div class="resume_description"><?php echo get_post_meta($post->ID, 'resume_place', true); ?><strong><?php the_title(); ?></strong></div>
										<p>
											<?php the_content(); ?>
										</p>
									</div>
								<?php endwhile; endif; wp_reset_query(); ?>
								
							</div>
							<div class="col-md-6 col-sm-6 right">
								<h3><?php echo get_cat_name(6)?></h3>
								<div class="resume_icon"><i class="icon-basic-book-pen"></i></div>
								<?php if(have_posts()) : query_posts('cat=6');
									while(have_posts()) : the_post(); ?>
									<div class="resume_item">
										<div class="year"><?php echo get_post_meta($post->ID, 'years', true); ?></div>
										<div class="resume_description"><strong><?php the_title(); ?></strong><?php echo get_post_meta($post->ID, 'resume_place', true); ?></div>
										<p>
											<?php the_content(); ?>
										</p>
									</div>
								<?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio" class="s_portfolio bg_dark">
			<div class="section_header">
				<h2><?php echo get_cat_name(7)?></h2>
				<div class="s_descr_wrap"><div class="s_descr"><?php echo category_description(7)?></div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="filter_div controls">
							<ul>
								<li class="filter active" data-filter="all">Все работы</li>
								<li class="filter" data-filter=".sites">Сайты</li>
								<li class="filter" data-filter=".identy">Айдентика</li>
								<li class="filter" data-filter=".logos">Логотипы</li>
							</ul>
						</div>
						<div id="portfolio_grid">

						<?php if(have_posts()) : query_posts('cat=7');
							while(have_posts()) : the_post(); ?>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item <?php
								$tags = wp_get_post_tags($post->ID);
								if ($tags) {
									foreach($tags as $tag) {
										echo ' ' . $tag->name;
									}
								}
								?>">
								<?php the_post_thumbnail(array(400, 300)); ?>
								<div class="port_item_cont">
									<h3><?php the_title(); ?></h3>
									<?php the_excerpt(); ?>
									<a href="#" class="popup_content">view</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3><?php the_title(); ?></h3>
											<?php the_content(); ?>
											<img 
												src="<?php 
													$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
													echo $large_image_url[0]; 
												?>" alt="<?php the_title(); ?>" />
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; endif; wp_reset_query(); ?>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contacts" class="s_contacts bg_light">
			<div class="section_header">
				<h2><?php echo get_cat_name(11); ?></h2>
				<div class="s_descr_wrap"><div class="s_descr"><?php echo category_description(11); ?></div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="contact_box">
								<div class="contacts_icon icon-basic-geolocalize-05"></div>
								<h3>Adress:</h3>
								<p>
									<?php 
										$option = get_option('sample_theme_options'); 
										echo $option['adress'];
									?>
								</p>
							</div>
							<div class="contact_box">
								<div class="contacts_icon icon-basic-smartphone"></div>
								<h3>Phone:</h3>
								<p>
									<?php 
										$option = get_option('sample_theme_options'); 
										echo $option['phonetext'];
									?>
								</p>
							</div>
							<div class="contact_box">
								<div class="contacts_icon icon-basic-webpage-img-txt"></div>
								<h3>Web site:</h3>
								<p><a href="//<?php 
													$option = get_option('sample_theme_options'); 
													echo $option['link'];
												?>" target="_blank"
											>
											<?php 
												$option = get_option('sample_theme_options'); 
												echo $option['link'];
											?>
									</a>
								</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<form
								action="http://formspree.io/agragregra@ya.ru"
								class="main_form"
								novalidate
								target="_blank"
								method="post"
							>
								<label class="form-group">
									<span class="color_element">*</span> Name:
									<input
										type="text"
										name="name"
										placeholder="Name"
										data-validation-required-message="Name need"
										required
									/>
									<span class="help-block text-danger"></span>
								</label>
								<label class="form-group">
									<span class="color_element">*</span>E-mail:
									<input
										type="email"
										name="email"
										placeholder="E-mail"
										data-validation-required-message="need E-mail"
										required
									/>
									<span class="help-block text-danger"></span>
								</label>
								<label class="form-group">
									<span class="color_element">*</span> Message:
									<textarea
										name="message"
										placeholder="Message"
										data-validation-required-message="Need Message"
										required
									></textarea>
									<span class="help-block text-danger"></span>
								</label>
								<button>Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer();?>
