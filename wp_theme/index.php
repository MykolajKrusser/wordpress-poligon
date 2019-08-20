<?php get_header();?>

		<section id="about" class="s_about bg_light">
			<div class="section_header">
				<h2><?php echo get_cat_name(2)?></h2>
				<div class="s_descr_wrap"><div class="s_descr"><?php echo category_description(2)?></div></div>
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
				<h2>Резюме</h2>
				<div class="s_descr_wrap"><div class="s_descr">Мои знания и достижения</div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="resume_container">
							<div class="col-md-6 col-sm-6 left">
								<h3>Работа</h3>
								<div class="resume_icon"><i class="icon-basic-case"></i></div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description">ООО "Пронькина забава"<strong>Программист</strong></div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description">ООО "Пронькина забава"<strong>Программист</strong></div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description">ООО "Пронькина забава"<strong>Программист</strong></div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 right">
								<h3>Учеба</h3>
								<div class="resume_icon"><i class="icon-basic-book-pen"></i></div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description"><strong>Программист</strong>ООО "Пронькина забава"</div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description"><strong>Программист</strong>ООО "Пронькина забава"</div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
								<div class="resume_item">
									<div class="year">2008-2015</div>
									<div class="resume_description"><strong>Программист</strong>ООО "Пронькина забава"</div>
									<p>
										Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
										стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
										создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio" class="s_portfolio bg_dark">
			<div class="section_header">
				<h2>Портфолио</h2>
				<div class="s_descr_wrap"><div class="s_descr">Мои последние работы</div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="filter_div controls">
							<ul>
								<li class="filter active" data-filter="all">Все работы</li>
								<li class="filter" data-filter=".category-1">Сайты</li>
								<li class="filter" data-filter=".category-2">Айдентика</li>
								<li class="filter" data-filter=".category-3">Логотипы</li>
							</ul>
						</div>
						<div id="portfolio_grid">
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
							<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item category-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo.
												Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi
												magni veniam adipisci non.
											</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contacts" class="s_contacts bg_light">
			<div class="section_header">
				<h2>Контакты</h2>
				<div class="s_descr_wrap"><div class="s_descr">Оставьте ваше сообщение</div></div>
			</div>
			<div class="section_content">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="contact_box">
								<div class="contacts_icon icon-basic-geolocalize-05"></div>
								<h3>Адрес:</h3>
								<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
							</div>
							<div class="contact_box">
								<div class="contacts_icon icon-basic-smartphone"></div>
								<h3>Телефон:</h3>
								<p>+7 999 999 99 99</p>
							</div>
							<div class="contact_box">
								<div class="contacts_icon icon-basic-webpage-img-txt"></div>
								<h3>Веб-сайт:</h3>
								<p><a href="//webdesign-master.ru" target="_blank">webdesign-master.ru</a></p>
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
									<span class="color_element">*</span> Ваше имя:
									<input
										type="text"
										name="name"
										placeholder="Ваше имя"
										data-validation-required-message="Вы не ввели имя"
										required
									/>
									<span class="help-block text-danger"></span>
								</label>
								<label class="form-group">
									<span class="color_element">*</span> Ваш E-mail:
									<input
										type="email"
										name="email"
										placeholder="Ваш E-mail"
										data-validation-required-message="Не корректно введен E-mail"
										required
									/>
									<span class="help-block text-danger"></span>
								</label>
								<label class="form-group">
									<span class="color_element">*</span> Ваше сообщение:
									<textarea
										name="message"
										placeholder="Ваше сообщение"
										data-validation-required-message="Вы не ввели сообщение"
										required
									></textarea>
									<span class="help-block text-danger"></span>
								</label>
								<button>Отправить</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer();?>
