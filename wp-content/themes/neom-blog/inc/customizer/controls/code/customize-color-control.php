<?php
/**
 * Customize Color control class.
 *
 * @package neom
 *
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class neom_Customize_Color_Control
 */
class neom_Customize_Color_Control extends neom_Customize_Base_Control {

	/**
	 * Backwards compatibility.
	 *
	 * @access protected
	 * @var bool
	 */
	protected $alpha = false;

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'neom-color';

	/**
	 * Colorpicker palette
	 *
	 * @access public
	 * @var bool
	 */
	public $palette = true;

	/**
	 * Mode.
	 *
	 * @var string
	 */
	public $mode = 'full';

	/**
	 * Some fields require options to be set.
	 * We're whitelisting the property here
	 * and suggest you validate this in a child class.
	 *
	 * @access protected
	 * @var array
	 */
	public $choices = array();

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see    WP_Customize_Control::to_json()
	 * @access public
	 * @return void
	 */
	public function to_json() {

		parent::to_json();

		$this->json['palette']          = $this->palette;
		$this->json['choices']['alpha'] = ( isset( $this->choices['alpha'] ) && $this->choices['alpha'] ) ? 'true' : 'false';
		$this->json['mode']             = $this->mode;

	}
}
