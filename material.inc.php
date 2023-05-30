<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * newgames implementation : © <Your name here> <Your email address here>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * newgames game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */


/*

Example:

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/


$this->colors = array(
  1 => '1',
  2 => '2',
  3 => '3',
  4 => '4',
  5 => '5',
);

$this->values_label = array(
  1 => 'pride',
  2 => 'envy',
  3 => 'wrath',
  4 => 'sloth',
  5 => 'greed',
  6 => 'gluttony',
  7 => 'lust',
);