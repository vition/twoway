<?php
namespace Org\Util;
class Img{ 
  public $source; //原图 
  public $source_width;  //原图宽度 
  public $source_height; //原图高度 
  public $source_type_id; 
  public $orign_name; 
  public $orign_dirname; 
     
  //传入原图路径 
  public function __construct($source){ 
    $this->typeList = array(1=>'gif',2=>'jpg',3=>'png'); 
    $ginfo = getimagesize($source); 
    $this->source_width = $ginfo[0]; 
    $this->source_height = $ginfo[1]; 
    $this->source_type_id = $ginfo[2]; 
    $this->orign_url = $source; 
    $this->orign_name = basename($source); 
    $this->orign_dirname = dirname($source); 
  } 
     
  //判断图片的文件的格式，返回PHP可识别的编码 
  public function judgeType($type,$source){ 
    if($type == 1){ 
      return imagecreatefromgif($source); //gif 
    }else if($type == 2){ 
      return imagecreatefromjpeg($source); //jpg 
    }else if($type == 3){ 
      return imagecreatefrompng($source); //png 
    }else{ 
      return false; 
    } 
  } 
     
  //生成水印图片 
  public function waterMakeImage($logo){ 
    $linfo = getimagesize($logo); 
    $logo_width = $linfo[0]; 
    $logo_height = $linfo[1]; 
    $logo_type_id = $linfo[2]; 
    $sourceHandle = $this->judgeType($this->source_type_id,$this->orign_url); 
    $logoHandle = $this->judgeType($logo_type_id,$logo); 
    if(!$sourceHandle || !$logoHandle){ 
      return false; 
    } 
    $x = ($this->source_width - $logo_width)/2; 
    $y = ($this->source_height - $logo_height)/2; 
    imagecopy($sourceHandle,$logoHandle,$x,$y,0,0,$logo_width,$logo_height); 
    $newPic = $this->orign_dirname.'\water_'.time().'.'.$this->typeList[$this->source_type_id]; 
    if($this->saveImage($sourceHandle,$newPic)){ 
      imagedestroy($sourceHandle); 
      imagedestroy($logoHandle); 
    } 
  } 
     
  //固定高度宽度 
  public function fixSizeImage($width,$height){ 
    if($width > $this->source_width) $this->source_width; 
    if($height > $this->source_height) $this->source_height; 
    if($width === false){ 
      $width = floor($this->source_width / ($this->source_height / $height)); 
    } 
    if($height === false){ 
      $height = floor($this->source_height / ($this->source_width / $width)); 
    } 
    $newPic=$this->tinyImage($width,$height); 
    return $newPic;
  } 
     
  //等比例缩放图片 
  public function scaleImage($scale){ 
    $width = floor($this->source_width * $scale); 
    $height = floor($this->source_height * $scale); 
    $minPic = $this->tinyImage($width, $height); 
    return $minPic;
  } 
     
  //创建缩略图 
  public function tinyImage($width,$height){ 
    $tinyImage = imagecreatetruecolor($width,$height); 
    $handle = $this->judgeType($this->source_type_id,$this->orign_url); 
    if(function_exists('imagecopyresampled')){ 
      imagecopyresampled($tinyImage, $handle, 0, 0, 0, 0, $width, $height, $this->source_width, $this->source_height); 
    }else{ 
      imagecopyresized($tinyImage, $handle, 0, 0, 0, 0, $width, $height, $this->source_width, $this->source_height); 
    } 
    $newPic = $this->orign_dirname.'\thumb_'.time().'_'.$width."_".$height.".".$this->typeList[$this->source_type_id]; 
    if($this->saveImage($tinyImage,$newPic)){ 
      imagedestroy($tinyImage); 
      imagedestroy($handle); 
    } 
    return $newPic;
  } 
  //保存图片 
  private function saveImage($image,$url){ 
    if(imagejpeg($image,$url)){ 
      return true; 
    } 
  } 
}