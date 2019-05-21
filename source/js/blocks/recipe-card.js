const {registerBlockType} = wp.blocks;
const {Button, Placeholder, ServerSideRender, TextControl} = wp.components;
const {InspectorControls} = wp.editor;
const {createRef, Fragment} = wp.element;
const {__} = wp.i18n;

registerBlockType( 'rtut/recipe-card', {

	title: __( 'Recipe Card', 'rtut' ),

	icon: 'portfolio',

	category: 'common',

	keywords: [
		__( 'recipe', 'rtut' )
	],

	attributes: {
		id: {
			type: 'number',
		}
	},

	edit({attributes, setAttributes}) {
		let textControl = createRef();

		function handlePlaceholderChange(e) {
			e.preventDefault();
			setAttributes( {id: textControl.current.value} );
		}

		function handleChange(e) {
			setAttributes( {id: e.target.value} );
		}

		return (
			<Fragment>
				{
					attributes.id ?
						(
							<ServerSideRender block="rtut/recipe-card" attributes={attributes}/>
						) :
						<Placeholder label={__( 'Please enter a Recipe ID', 'rtut' )}>
							<form onSubmit={handlePlaceholderChange}>
								<label className="screen-reader-text" htmlFor="rtut-recipe-id-placeholder">{__( 'Recipe ID', 'rtut' )}</label>
								<input id="rtut-recipe-id-placeholder" type="number" defaultValue={attributes.id || ''} ref={textControl}/>
								<Button isDefault onClick={handlePlaceholderChange}>{__( 'Submit', 'rtut' )}</Button>
							</form>
						</Placeholder>
				}
				<InspectorControls>
					<label htmlFor="rtut-recipe-id" style={{display: 'block'}}>{__( 'Recipe ID', 'rtut' )}</label>
					<input id="rtut-recipe-id" type="number" value={attributes.id || ''} onChange={handleChange}/>
				</InspectorControls>
			</Fragment>
		);
	},

	save() {
		return null;
	}

} );
