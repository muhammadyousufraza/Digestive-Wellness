<?php

/*
Name: Featured Image Banner
Author: Keith Williams - Pro Tech Studios
Description: Looks for a featured image on a post/page and outputs it in a div. If there is no image it will revert to a default image.
Version: 1.5
Class: thesis_featured_image_banner
*/

class thesis_featured_image_banner extends thesis_box {

	public function translate() 
	{
		$this->title = __('Featured Image Banner', 'thesis');
	}
	
	protected function class_options()
	{
		global $thesis;		

		return array(
			'setdivid' => array(
				'type' => 'text',
				'width' => 'medium',
				'label' => __('ID for the div', 'thesis'),
				'tooltip' => sprintf(__('You can set an ID for the div by typing it in here.', 'thesis')),
			),

			'setdivclass' => array(
				'type' => 'text',
				'width' => 'medium',
				'label' => __('Class for the div', 'thesis'),
				'tooltip' => sprintf(__('You can set a class for the div by typing it in here.', 'thesis')),
			),

			'setdefaultimage' => array(
				'type' => 'text',
				'width' => 'long',
				'label' => __('Default image URL', 'thesis'),
				'tooltip' => sprintf(__('You can set a URL for a default image to be shown when no Featured Image has been set.', 'thesis')),
			),
		);
	}

	public function html() 
	{
		global $thesis;

		if (has_post_thumbnail( $post->ID ))
		{
			echo '<div id="' . $this->class_options['setdivid'] . '" class="' . $this->class_options['setdivclass'] . '">' . get_the_post_thumbnail() . '</div>';
		}

		elseif (!empty($this->class_options['setdefaultimage']))
		{
			echo '<div id="' . $this->class_options['setdivid'] . '" class="' . $this->class_options['setdivclass'] . '">' . '<img src="' . $this->class_options['setdefaultimage'] . '" />' . '</div>';
		}
		
	}
	
}