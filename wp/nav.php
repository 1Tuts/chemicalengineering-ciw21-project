<!-- 					<ul>
						<li>
							<a href="index.html">
								<img class="ico" src="images/menu-home.png" width="50" height="50" />
								<span class="lbl">صفحه اصلی</span>
							</a>
						</li>
						<li>
							<a href="newDrug.html">
								<img class="ico" src="images/menu-newDrug.png" width="50" height="50" />
								<span class="lbl">تــازه های دارویی</span>
							</a>
						</li>
						<li>
							<a href="company.html">
								<img class="ico" src="images/menu-company.png" width="50" height="50" />
								<span class="lbl">شرکت های داروسازی</span>
							</a>
						</li>
						<li>
							<a href="diary.html">
								<img class="ico" src="images/menu-memory.png" width="50" height="50" />
								<span class="lbl">خاطرات داروخانه</span>
							</a>
						</li>
						<li>
							<a href="aboutUs.html">
								<img class="ico" src="images/menu-aboutUs.png" width="50" height="50" />
								<span class="lbl">دربــــاره ما</span>
							</a>
						</li>
					</ul> -->
					<?php
						wp_nav_menu(array(
							'theme_location'  => 'Mainmenu',
							'container'       => false, 
							'container_class' => '', 
							'menu_class'      => '', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
						));
					?>