<?php
/**
 * Theme_Name helpers
 *
 * @package Theme_Name
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'get_pr' ) ) {
	/**
	 * Debug function print_r
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_pr( $var, $die = true ) {
		echo '<pre>';
		print_r( $var );
		echo '</pre>';
		if ( $die ) {
			die();
		}
	}
}
if ( ! function_exists( 'get_vd' ) ) {
	/**
	 * Debug function var_dump
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_vd( $var, $die = true ) {
		echo '<pre>';
		var_dump( $var );
		echo '</pre>';
		if ( $die ) {
			die();
		}
	}
}
if ( ! function_exists( 'get_num_ending' ) ) {
	/**
	 * Склонения числительных
	 *
	 * @param $number
	 * @param $ending_array
	 *
	 * @return mixed
	 */
	function get_num_ending( $number, $ending_array ) {
		$number = $number % 100;
		if ( $number >= 11 && $number <= 19 ) {
			$ending = $ending_array[2];
		} else {
			$i = $number % 10;
			switch ( $i ) {
				case ( 1 ):
					$ending = $ending_array[0];
					break;
				case ( 2 ):
				case ( 3 ):
				case ( 4 ):
					$ending = $ending_array[1];
					break;
				default:
					$ending = $ending_array[2];
			}
		}
		
		return $ending;
	}
}

if ( ! function_exists( 'str2url' ) ) {
	function str2url($str) {
	  // переводим в транслит
	  $str = rus2translit($str);
	  // в нижний регистр
	  $str = strtolower($str);
	  // заменям все ненужное нам на "-"
	  $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
	  // удаляем начальные и конечные '-'
	  $str = trim($str, "-");
	  return $str;
	}
}

if ( ! function_exists( 'rus2translit' ) ) {
	function rus2translit( $string ) {
	  $converter = array(
	    'а' => 'a',   'б' => 'b',   'в' => 'v',
	    'г' => 'g',   'д' => 'd',   'е' => 'e',
	    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
	    'и' => 'i',   'й' => 'y',   'к' => 'k',
	    'л' => 'l',   'м' => 'm',   'н' => 'n',
	    'о' => 'o',   'п' => 'p',   'р' => 'r',
	    'с' => 's',   'т' => 't',   'у' => 'u',
	    'ф' => 'f',   'х' => 'h',   'ц' => 'cz',
	    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
	    'ь' => '',  'ы' => 'y',   'ъ' => '\'',
	    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
	    
	    'А' => 'A',   'Б' => 'B',   'В' => 'V',
	    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
	    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	    'О' => 'O',   'П' => 'P',   'Р' => 'R',
	    'С' => 'S',   'Т' => 'T',   'У' => 'U',
	    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'CZ',
	    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
	    'Ь' => '',  'Ы' => 'Y',   'Ъ' => '\'',
	    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
	  );
	  return strtr($string, $converter);
	}
}

if ( ! function_exists( 'phone2tel' ) ) {
	function phone2tel($phone) {
		$phone = str_replace( array('(', ')', '-', ' '), '', $phone);
		return $phone;
	}
}

if ( ! function_exists( 'phone2login' ) ) {
	function phone2login($phone) {
		$phone = str_replace( array('(', ')', '+'), '', $phone);
		return $phone;
	}
}