<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="col-lg-4 mb-5 mb-lg-0">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 class="footer-heading mb-4">Navigations</h3>
			</div>
			<?$i=0?>
			<?for($j =0;$j <= count($arResult)-1;$j++):?>
				<?if($i === 0):?>
					<div class="col-md-6 col-lg-6">
						<ul class="list-unstyled">
							<li><a href="<?=$arResult[$j]["LINK"]?>"><?=$arResult[$j]["TEXT"]?></a></li>
				<?else:?>
					<li><a href="<?=$arResult[$j]["LINK"]?>"><?=$arResult[$j]["TEXT"]?></a></li>
				<?endif;?>
				<?$i = $i + 1;?>
				<?if(($j===count($arResult)-1) || ($i === 4)):?>
						</ul>
					</div>
					<?$i = 0;?>
				<?endif;?>
			<?endfor;?>
		</div>
	</div>
<?endif?>