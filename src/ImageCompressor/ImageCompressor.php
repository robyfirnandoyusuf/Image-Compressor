<?php 
/**
* @author 0x00b0 aka greyCat - ExploreOuBrain
* @category PHP Package
**/

namespace ImageCompressor;

interface InterfaceCompressor{
    static function compress();
}

class ImageCompressor implements InterfaceCompressor
{
	/** @var string */
	static $url = 'https://api.imagecompressor.io/api/v1/image/compress';

	/**
	*	handle cURL file into site compressor
	* 	@param $file, $type
	* 	@return mixed
	*/
    public static function compress($file='',$type='',$target='')
    {
    	$name 		= '';
    	$quality 	= '';
    	$speed 		= '';
    	$ectLevel 	= '';

    	switch ($type) {
    		case 'normal':
	    		$name 		= 'Normal';
	    		$quality 	= 85;
	    		$speed 		= 3;
	    		$ectLevel 	= 5;
    			break;
    		case 'good':
	    		$name 		= 'Good';
	    		$quality 	= 80;
	    		$speed 		= 1;
	    		$ectLevel 	= 5;
    			break;
			case 'high':
    			$name 		= 'High';
    			$quality 	= 70;
    			$speed 		= 1;
    			$ectLevel 	= 9;
    			break;
    		case 'extreme':
	    		$name 		= 'Extreme';
	    		$quality 	= 60;
	    		$speed 		= 1;
	    		$ectLevel 	= 9;
    			break;
    	}

    	if (!is_file($file)) die("Error File Not Found !");
    	
    	$ch = curl_init();

		if (function_exists('curl_file_create')) 
		{
			$cFile = curl_file_create($file);
		} 
		else 
		{
			$cFile = '@' . realpath($file);
		}

		$post = array('name' => $name,'file'=> $cFile,'quality'=>$quality,'speed'=>$speed,'ectLevel'=>$ectLevel);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,self::$url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$result = curl_exec ($ch);
		curl_close ($ch);
		$result = json_decode($result);

		$basename = pathinfo($result->files[0]->name,PATHINFO_BASENAME);

		if ($result->hasError == false) 
		{
			try {
				self::download('https://imagecompressor.io'.$result->files[0]->path,$target,$basename);
				return true;
			}
			catch (\Exception $e) {
				echo "Message: " . $e->getMessage()."<br>";
				echo "";
				echo "getCode(): " . $e->getCode()."<br>";
				echo "";
				echo "__toString(): " . $e->__toString()."<br>";
			}
		}
		else
		{
			return $result->hasError;
		}
    }

    /**
	*	handle download file
	* 	@param $file_source, $file_target,$basename
	* 	@return mixed
	*/
    private static function download($file_source, $file_target,$basename) 
    {
    	try 
    	{
    		if ($file_target == '' || $file_target == null) 
    		{
    			file_put_contents($basename, file_get_contents($file_source));
    		}
    		else
    		{
    			file_put_contents($file_target."/".$basename, file_get_contents($file_source));
    		}
    	}
    	catch (Exception $e) {
    		echo "Message: " . $e->getMessage()."<br>";
    		echo "";
    		echo "getCode(): " . $e->getCode()."<br>";
    		echo "";
    		echo "__toString(): " . $e->__toString()."<br>";
    	}
    }

}