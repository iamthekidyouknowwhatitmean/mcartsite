<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
// echo '<pre>';
// print_r($arResult);
// echo '</pre>'
?>
<?php if(!empty($arResult)): ?>
	<div class="col-4 col-md-4 col-lg-8">
		<nav class="site-navigation text-right text-md-right" role="navigation">
			<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
				class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
			</div>

			<ul class="site-menu js-clone-nav d-none d-lg-block">
				<?php foreach($arResult as $item): ?>
					<?if($item["SELECTED"] && $item["IS_PARENT"] === false):?>
						<li class="active"><a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
					<?else:?>
						<?if($item["IS_PARENT"] === false):?>
							<li><a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
						<?endif;?>
					<?endif?>
					
					<?php if(!empty($item['subitems'])):?>
						<li class="has-children">
							<a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a>
							<ul class="dropdown">
								<?$i = -1;?>
								<?while($i <= count($item['subitems'])):?>
									<?if($item['subitems'][$i]["IS_PARENT"] ===true):?>
										<li class="has-children">
											<a href="<?=$item['subitems'][$i]['LINK'];?>"><?=$item['subitems'][$i]['TEXT']?></a>

											<ul class="dropdown">
												<?$i++?>
												<?while($item['subitems'][$i]["DEPTH_LEVEL"] === 3):?>
													<li><a href="<?=$item['subitems'][$i]['LINK'];?>"><?=$item['subitems'][$i]['TEXT']?></a></li>
													<?$i++;?>
												<?endwhile;?>
											</ul>
										</li>
										<?$i--;?>
									<?else:?>
										<li><a href="<?=$item['subitems'][$i]['LINK'];?>"><?=$item['subitems'][$i]['TEXT']?></a></li>
									<?endif;?>
									<?$i++?>
								<?endwhile;?>
							</ul>
						</li>
					<?php endif;?>
				<?php endforeach;?>
			</ul>
		</nav>
	</div>	
<?php endif;?>
