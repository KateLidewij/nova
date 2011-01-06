<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Http_Exception extends Kohana_Exception {

	/**
	 * @var     int      http status code
	 */
	protected $_code = 0;

	/**
	 * @var     string   file of view to use for http exeception
	 */
	protected $_http_view = 'kohana/http/error';

	/**
	 * Creates a new translated exception.
	 *
	 *     throw new Kohana_Exception('Something went terrible wrong, :user',
	 *         array(':user' => $user));
	 *
	 * @param   string   status message, custom content to display with error
	 * @param   array    translation variables
	 * @param   integer  the http status code
	 * @return  void
	 */
	public function __construct($message = NULL, array $variables = NULL, $code = 0)
	{
		if ($code == 0)
		{
			$code = $this->_code;
		}

		if ( ! isset(Response::$messages[$code]))
			throw new Kohana_Exception('Unrecognized HTTP status code: :code . Only valid HTTP status codes are acceptable, see RFC 2616.', array(':code' => $code));

		parent::__construct($message, $variables, $code);
	}

	/**
	 * Magic object-to-string method.
	 *
	 *     echo $exception;
	 *
	 * @return  string
	 */
	public function __toString()
	{
		return (string) $response;
	}

	/**
	 * Renders this exception.
	 *
	 *     $response = $exception->render();
	 *
	 * @return  [Response]
	 */
	public function render()
	{
		$code = $this->getCode();
		$message = $this->getMessage();

		// In some edge cases, Request::current() may be NULL
		if ( ! ($request = Request::current()) instanceof Request)
		{
			$request = Request::initial();
		}

		// Create response
		$response = $request->create_response();
		// Create view
		$this->_http_view = new View($this->_http_view, array(
			'http_code'    => $code,
			'http_status'  => Response::$messages[$code],
			'message'      => $message
		));

		// Return the response with variables applied
		return $response->status($this->getCode())
			->body($this->_http_view->render());
	}
} // End Kohana_Http_Exception