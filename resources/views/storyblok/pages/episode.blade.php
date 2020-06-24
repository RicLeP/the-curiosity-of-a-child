<?php
//dd($story);
?>


@foreach($story->features as $feature)
	@foreach($feature->body as $block)


		<?php dump($block->componentPath); ?>
		Is child of body: {{ $block->isChildOf('body') }}<br>
		Is ancestor of features: {{ $block->isAncestorOf('features') }}<br>
		Is layout: {{ $block->isLayout() }}<br>
		Inside layout: {{ $block->getLayout() }}<br>
		Class with parent: {{ $block->cssClassWithParent() }}<br>
		Class with layout: {{ $block->cssClassWithLayout() }}<br>
		<?php // dump($block); ?>

		@foreach($block->content() as $item)
			@if ($item instanceof \Riclep\Storyblok\Block)
				<?php dump($item->componentPath); ?>
				Is child of body: {{ $item->isChildOf('body') }}<br>
				Is ancestor of features: {{ $item->isAncestorOf('features') }}<br>
				Is layout: {{ $item->isLayout() }}<br>
				Inside layout: {{ $item->getLayout() }}<br>
				Class with parent: {{ $item->cssClassWithParent() }}<br>
				Class with layout: {{ $item->cssClassWithLayout() }}<br>

				<?php // dump($item); ?>

				@foreach($item as $item2)
					@if ($item2 instanceof \Riclep\Storyblok\Block)
						<?php dump($item2->componentPath); ?>
						Is child of body: {{ $item2->isChildOf('body') }}<br>
						Is ancestor of features: {{ $item2->isAncestorOf('features') }}<br>
						Is layout: {{ $item2->isLayout() }}<br>
						Inside layout: {{ $item2->getLayout() }}<br>
						Class with parent: {{ $item2->cssClassWithParent() }}<br>
						Class with layout: {{ $item2->cssClassWithLayout() }}<br>
					@endif
				@endforeach
			@endif
		@endforeach
		<hr><br><br>
	@endforeach
	<?php
	exit();
	?>
	<hr><br><br>
@endforeach
