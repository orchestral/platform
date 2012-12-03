<?php namespace Orchestra\Widget;

class Menu extends Driver {
	/**
	 * Construct a new instance
	 *
	 * @access  public
	 * @param   string  $name
	 * @param   array   $config
	 * @return  void
	 */
	public function __construct($name, $config = array())
	{
		$this->name   = $name;
		$this->config = $config;
		//$this->nesty  = new Nesty($this->config);
	}
}