<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/language_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Output
 *
 * Fetches a language variable and outputs that text with an HTML element
 *
 * @access	public
 * @param	string	the language line
 * @param	string	the element (P by default, can also be an H tag)
 * @return	string
 */	
if ( ! function_exists('lang_output'))
{
	function lang_output($line, $element = 'p', $class = NULL, $nl2br = TRUE)
	{
		$CI =& get_instance();
		$line = $CI->lang->line($line);
		$class_var = NULL;
		
		/* set the class variable */
		$class_var = (isset($class)) ? ' class="' . $class . '"' : NULL;
		
		/* set the content */
		$content = ($nl2br == TRUE) ? nl2br($line) : $line;
		
		/* set the elements */
		$start_element = ($element == '') ? NULL : '<'. $element . $class_var .'>';
		$end_element = ($element == '') ? NULL : '</'. $element .'>';
		
		/* set up the entire element */
		$retval = $start_element . $content . $end_element;
		
		/* return the element */
		return $retval;
	}
}

// ------------------------------------------------------------------------

/**
 * Text Output
 *
 * Outputs text with an HTML element
 *
 * @access	public
 * @param	string	the text
 * @param	string	the element (P by default, can also be an H tag)
 * @param	string	a class
 * @return	string
 */	
if ( ! function_exists('text_output'))
{
	function text_output($text = '', $element = 'p', $class = null, $nl2br = true)
	{
		/* set the class variable */
		$class_var = (isset($class)) ? ' class="' . $class . '"' : null;
		
		/* set the content */
		$content = ($nl2br) ? nl2br($text) : $text;
		
		/* set the elements */
		$start_element = ($element == '') ? null : '<'. $element . $class_var .'>';
		$end_element = ($element == '') ? null : '</'. $element .'>';
		
		/* set up the entire element */
		$retval = $start_element . $content . $end_element;
		
		/* return the element */
		return $retval;
	}
}

if ( ! function_exists('nl2p'))
{
	function nl2p($str)
	{
		return str_replace("\n\n", "</p>\n<p>", '<p>'.$str.'</p>');
	}
}

if ( ! function_exists('content_output'))
{
	function content_output($str, $class = false)
	{
		return br2p(text_output($str, '', $class));
	}
}

if ( ! function_exists('br2p'))
{
	function br2p($text)
    {
    	$text = explode('<br />', $text);
		
		$lastEmpty = true;
		$outOfP = false;
		
		$str = '<p>';
		
		foreach($text as $sub)
		{
			$len0 = (strlen(trim($sub)) == 0);

			if ($len0)
			{
				if( ! $outOfP)
					$str.= '</p>';
				else
					$str.= '<br>';
			}
			else
			{
				if ($outOfP)
				{
					$str.= '<p>';
					$outOfP = false;
				}
				elseif ( ! $lastEmpty)
				{
					$str.= '<br>';
				}
				
				$str.= $sub;
			}

			if($len0)
				$outOfP = true;

			$lastEmpty = $len0;
		}

		$str.= '</p>';
		
		return $str;
    }
}