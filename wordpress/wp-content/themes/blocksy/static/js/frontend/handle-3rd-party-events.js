import $ from 'jquery'

if (window.WP_Grid_Builder) {
	Object.values(window.WP_Grid_Builder.instances).map((instance) => {
		if (!instance.facets) {
			return
		}

		instance.facets.on('render', (layout) =>
			setTimeout(() => ctEvents.trigger('blocksy:frontend:init'))
		)
	})
}

if ($) {
	if (window.wpcFilterFront) {
		$(document).on('ready', (e) => {
			ctEvents.trigger('blocksy:frontend:init')
		})
	}

	document.addEventListener('wpfAjaxSuccess', (e) => {
		ctEvents.trigger('blocksy:frontend:init')
	})

	document.addEventListener('facetwp-loaded', () => {
		ctEvents.trigger('blocksy:frontend:init')
	})

	$(() => {
		setTimeout(() => {
			ctEvents.trigger('blocksy:frontend:init')
		}, 100)
	})
	;[
		'berocket_ajax_filtering_end',
		'preload',
		'jet-filter-content-rendered',
		'yith_infs_added_elem',
		'yith-wcan-ajax-filtered',
		'ywraq_table_reloaded',
		'sf:ajaxfinish',
		'ddwcpoRenderVariation',
	].map((event) => {
		$(document).on(event, () => {
			setTimeout(() => {
				ctEvents.trigger('blocksy:frontend:init')
			}, 100)
		})
	})
}
