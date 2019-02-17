wp.blocks.registerBlockType( 'sg-block/simple-block', {

	title: wp.i18n.__( 'Simple Block', 'sg-block' ),
	description: wp.i18n.__( 'My block description' ),
	icon: 'universal-access-alt',
	category: 'common',

	edit: function () {
		return wp.element.createElement( 'p', { className: 'custom-block' }, 'Hello World' );
	},

	save: function () {
		return wp.element.createElement( 'p', { className: 'custom-block' }, 'Saves in post Content' );
	}

} );