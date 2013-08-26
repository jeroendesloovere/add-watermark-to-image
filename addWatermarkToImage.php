<?php

/**
 * Add watermark to image
 *
 * @author Jeroen Desloovere <jeroen@siesqo.be>
 * @date 2010-08-10
 */
class AddWatermarkToImage
{
	/**
	 * Image path
	 *
	 * @var string
	 */
	private $imagePath;

	/**
	 * Watermarks
	 *
	 * @var array
	 */
	private $watermarks;

	/**
	 * Construct
	 *
	 * @param string $imagePath The path to the image
	 */
	public function __construct($imagePath)
	{
		$this->imagePath = $imagePath;
	}

	/**
	 * Add watermark
	 *
	 * @param string $watermarkPath
	 * @param int[optional] $x
	 * @param int[optional] $y
	 */
	public function add($watermarkPath, $x = 0, $y = 0)
	{
		// add watermark
		$this->watermarks[] = array(
			'path' => $watermarkPath,
			'x' => $x,
			'y' => $y
		);
	}

	/**
	 * Parse image with watermarks
	 */
	public function parse()
	{
		$pos = strpos($destination,'_thumbs/');
		// BIG AFBEELDING
		if($pos === false) { $watermark=imagecreatefrompng("copyright-kensington.png");$dest_x = 15;}
		// THUMB AFBEELDING
		else { $watermark=imagecreatefrompng("thumb-copyright-kensington.png");$dest_x = 5;}
		// WATERMARK TOEVOEGEN	
		$osx=$new_width;
		$osy=$new_height;
		$wsx=imagesx($watermark);
		$wsy=imagesy($watermark);
		 
		 // rechts : $dest_x = $size[0] - $watermark_width - 5; 
		$dest_y = $osy - $wsy - $dest_x; 
		imagecopy($newim, $watermark, $dest_x, $dest_y, 0, 0,$wsx, $wsy);
		imagedestroy($watermark);
		// EINDE WATERMARK
	}
}
