<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('text_highlight'))
{ 
  function highlight($text, $words) {
      preg_match_all('~[A-Za-z0-9]+~', $words, $m);
      if(!$m)
          return $text;
      $re = '~(' . implode('|', $m[0]) . ')~i';
      return preg_replace($re, '<b style="background: yellow;">$0</b>', $text);
  }
}