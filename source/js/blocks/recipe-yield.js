const {registerBlockType} = wp.blocks;
const {TextControl} = wp.components;
const {__} = wp.i18n;

registerBlockType( 'rtut/recipe-yield', {

	title: __( 'Recipe Yield', 'rtut' ),

	icon: 'dashboard',

	keywords: [
		__( 'recipe', 'rtut' )
	],

	category: 'common',

	supports: {
		html: false,
		multiple: false,
		reusable: false,
	},

	attributes: {
		recipeYield: {
			type: 'string',
			source: 'html',
			selector: 'dd',
		}
	},

	edit({attributes, className, isSelected, setAttributes}) {
		return (
			<dl className={className}>
				<dt>{__( 'Serves', 'rtut' )}</dt>
				<dd>
					{
						isSelected ?
							(
								<TextControl
									className=""
									onChange={recipeYield => setAttributes( {recipeYield} )}
									placeholder="0"
									value={attributes.recipeYield || ''}
								/>
							) :
							attributes.recipeYield
					}
				</dd>
			</dl>
		);
	},

	save({attributes: {recipeYield}, className}) {
		return (
			<dl className={className}>
				<dt>{__( 'Serves', 'rtut' )}</dt>
				<dd>{recipeYield}</dd>
			</dl>
		);
	},

} );
