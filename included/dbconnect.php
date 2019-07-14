<?php

class dbconnect
{
	var $dbtype="mysql";
	var $dbhost="localhost";
	var $dbuser="root";
	var $dbpassword="";
	var $dbpath="C:\xampp\htdocs\works\pdotest\database.mdb";
	var $dbname="lodgegossip";
	var $dbconn="";
	var $root="http://localhost/mktcity/";
	public $conn;
	private $data;

	protected function __construct()
	{
		try
		{
			switch($this->dbtype)
			{
				case "sqlite":
					$this->dbconn="sqlite:".$this->dbpath;
					break;
					
				case "mysql":
					$this->dbconn="mysql:host=".$this->dbhost."; dbname=".$this->dbname;
					break;
					
				case "postgresql":
					$this->dbconn="postg:host=".$this->dbhost." dbname=".$this->dbname;
					break;
					
				case "odbc":
					$this->dbconn="odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=".$this->dbpath.";Uid=Admin";
					break;
			}
			
			$this->conn=new PDO($this->dbconn,$this->dbuser,$this->dbpassword);
		}
		catch(PDOException $error)
		{
			die("There was an error connecting to database, Reason: ".$error->getMessage());
		}
	}
	
	public function ShortenText($text,$chars=60)
	{
		$length = strlen($text);
	
		$text = $text." ";
		$text = substr($text,0,$chars);
		$text = substr($text,0,strrpos($text,' ')); $text = strip_tags($text); 	
	
		if($length > $chars) { $text = $text."..."; }
	
		return $text;
	}
	
	public function ShortenText2($text,$chars='30') 
	{
		$length = strlen($text);
	
		$text = $text." ";
		$text = substr($text,0,$chars);
		$text = substr($text,0,strrpos($text,' ')); $text = strip_tags($text); 
	
		if($length > $chars) { $text = $text."..."; }
	
		return $text;
	}
	
	public function ShortenTextNews($text,$chars='250') 
	{
		$length = strlen($text);
	
		$text = $text." ";
		$text = substr($text,0,$chars);
		$text = substr($text,0,strrpos($text,' ')); $text = strip_tags($text); 
	
		if($length > $chars) { $text = $text."..."; }
	
		return $text;
	}
	
	public function ShortenTextNewsTitle($text,$chars='35') 
	{
		$length = strlen($text);
	
		$text = $text." ";
		$text = substr($text,0,$chars);
		$text = substr($text,0,strrpos($text,' ')); $text = strip_tags($text); 
	
		if($length > $chars) { $text = $text."..."; }
	
		return $text;
	}
	public function cleanInput($input) 
	{
	  $search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
	  );
	 
		$output = preg_replace($search, '', $input);
		return $output;
	}
	
	protected function sanitize($input) 
	{
		if(is_array($input)) 
		{
			foreach($input as $var=>$val) 
			{
				$output[$var] = sanitize($val);
			}
    	}
   		else 
		{
			if (get_magic_quotes_gpc()) 
			{
				$input = stripslashes($input);
			}
			$input  = $this->cleanInput($input);
			$output = $input;
    	}
   		return $output;
	}
	
	public function watermark_text($oldimage_name, $new_image_name)
	{
		$font_size = 14;       // in pixcels
		$water_mark_text_2 = "MarketCity.biz";
		$font_path = "font/recaptchaFont.ttf";
		
		list($owidth,$oheight) = getimagesize($oldimage_name);
		$width =150;   
		$height=($oheight/$owidth)*$width;
		$image = imagecreatetruecolor($width, $height);

		$image_src = imagecreatefromjpeg($oldimage_name);
		imagecopyresampled($image, $image_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
	
		$blue = imagecolorallocate($image, 79, 166, 185);
//		imagettftext($image, $font_size, 0, 20, 190, $blue, $font_path, $water_mark_text_2);
		imagettftext($image, $font_size, 0, 12, 60, $blue, $font_path, $water_mark_text_2);
		imagejpeg($image, $new_image_name, 100);
		imagedestroy($image);
		unlink($oldimage_name);
	}	
	
	public function image($image,$uploadedfile,$size,$filename,$actual_image_name,$category)
	{
		error_reporting(0);
		
		$change="";
		$abc="";
		
		$date_time=date('h-i-s');
		
		define ("MAX_SIZE","40000");
		function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
		}
		
		$errors=0;
			
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		
		
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
		{
		
		$change='<div class="msgdiv">Unknown Image extension </div> ';
		$errors=1;
		}
		else
		{
			
		if($extension=="jpg" || $extension=="jpeg" )
		{
		$src = imagecreatefromjpeg($uploadedfile);
		
		}
		else if($extension=="png")
		{
		$src = imagecreatefrompng($uploadedfile);
		
		}
		else 
		{
		$src = imagecreatefromgif($uploadedfile);
		}
		
		echo $scr;
		
		list($width,$height)=getimagesize($uploadedfile);
		
		$newwidth=150;
		//$newheight=320;
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		
		
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
		$filen = $actual_image_name.'.'.$extension ;
		
		if($category=="products")
			$filename = "../img/images_upload/".$category."/". $image ;
		else
			$filename = "../img/images_upload/".$category."/". $filen ;
		
		imagejpeg($tmp,$filename,100);
		
		if($category=="products")
			$this->watermark_text("../img/images_upload/".$category."/". $image,"../img/images_upload/".$category."/". $filen);
				
		imagedestroy($src);
		imagedestroy($tmp);
		
		return $filen;
		}
	}
	
	public function sendMail($message,$subject)
	{
		$select=new public_data;
		
		$data=$select->public_data();
		if($data!=0)
		{
			$data=explode("*",$data);
			$x=0;
			$no=count($data);
			
			while($x<$no)
			{
				$sendto=$data[$no];
				
				mail("$sendto","$subject","$message","From: info@marketcity.biz");
				
				$x++;
			}
		}
	}
	
	
}

class other{
	
	
	public  function   numbercontrol($number) 
		{
			$number=str_replace(' ','',rtrim($number));
			$normal=str_split($number,11);
			$lenght=strlen($number);
			for($i = 0; $i < (count($normal)); $i++)
			{
				if(strlen($normal[$i]) == 11)
					$fno['number'][]= '+234' . substr($normal[$i],1) .';';
				else
				{
					while(strlen($normal[$i]) < 11)
					{
						$normal[$i] =$normal[$i] . '0'; 
						$totallength=strlen($normal[$i]);
						//echo $totallength.'<br>';
					}
					$fno['number'][]= '+234' . substr($normal[$i],1).';';
				}
			}
			$totalunit=$lenght/11;
			$fno['total'][]=ceil($totalunit);
			return $fno;
		//echo $totalunit=$lenght/11;
		//echo '<br>-------------------<br>'.$lenght;
			
		}	
}
?>