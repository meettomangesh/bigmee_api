<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Img_manipulation {
    
    private $CI ;
    
    public function __construct(){
       $this->CI = & get_instance();
       $this->CI->load->library('image_lib');
    }
  


public function resize_image(array $conf, $upload_data){
     
            $default_config['width'] = 960;
            $default_config['height'] = 960;
            $default_config['maintain_ratio'] = FALSE;
            $default_config['create_thumb'] = FALSE;
            $default_config['thumb_marker'] = '';
            $default_config['overwrite'] = FALSE;
            $default_config['quality'] = 100;
     
            $config = array_merge($default_config, $conf);
     
            $img_cfg['image_library'] = 'gd2';
            $img_cfg['source_image'] = $upload_data['full_path'];
            $img_cfg['maintain_ratio'] = $config['maintain_ratio'];
            $img_cfg['create_thumb'] = $config['create_thumb'];
            $img_cfg['new_image'] = $config['target_path'];    
            $img_cfg['quality'] = $config['quality'];
            $img_cfg['thumb_marker'] = $config['thumb_marker'];
            $img_cfg['overwrite'] = $config['overwrite'];
            $img_cfg['width'] = $config['width'];    
            $img_cfg['height'] = $config['height'];
             
            $dim = (intval($upload_data['image_width']) / intval($upload_data['image_height'])) - ($config['width'] / $config['height']);
            if(!array_key_exists('master_dim', $config)){
                $config['master_dim'] = ($dim > 0)? 'height' : 'width';
            }
            $config['master_dim'] = $config['master_dim'];  
     
                      
    $this->CI->image_lib->initialize($img_cfg);
    if (!$this->CI->image_lib->resize()) {
                $error = $this->CI->image_lib->display_errors('', '');
                $response['status'] = 'ERR'; 
                $response['message'] = $error;
                echo json_encode($response);
                die(); 
    }
    return TRUE;    
}  

public function resize_canvas_image(array $conf) {

            $default_config['width'] = 960;
            $default_config['height'] = 960;
            $default_config['quality'] = 100;
     
            $config = array_merge($default_config, $conf);
   
            $img_cfg['source_image'] = $config['src_path'];
            $img_cfg['new_image'] = $config['target_path'];    
            $img_cfg['quality'] = $config['quality'];
            $img_cfg['width'] = $config['width'];    
            $img_cfg['height'] = $config['height'];

            // validate configuration array
            foreach($img_cfg as $key => $value) {
              if($key != 'destroy_src') {  
                  if(empty($value) || $value == ''){
                    $response['status']  = 'ERR';
                    $response['message'] = 'Invalid canvas image configuration required -'.$key;
                    echo json_encode($response); die();
                  }
                }  
            }

            // get image proper name from source and create new jpg image name

            $img = explode('/', $img_cfg['source_image']);
            $index = count($img) - 1;
            $nameArray = explode('.', $img[$index]);
            $image_name = $nameArray[0];
            $jpegImage = $image_name.'.png';
            $img_cfg['new_image'] = $img_cfg['new_image'].$jpegImage;

    // find the source image height and width            
    list($original_width, $original_height) = getimagesize($img_cfg['source_image']);

    $thumb = imagecreatetruecolor($img_cfg['width'], $img_cfg['height']);
    $src = imagecreatefrompng($img_cfg['source_image']);

     imagealphablending($thumb, false);
     imagesavealpha($thumb,true);
     $transparent = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
     imagefilledrectangle($thumb, 0, 0, $img_cfg['height'], $img_cfg['height'], $transparent);

    imagecopyresampled($thumb, $src, 0, 0, 0, 0, $img_cfg['height'], $img_cfg['height'], $original_width, $original_height);
    imagepng($thumb, $img_cfg['new_image']);
    imagedestroy($thumb);  

    // if destroy_src is true then unlink source image 
    if(array_key_exists('destroy_src', $config)) {
        if(file_exists($img_cfg['source_image'])) {
            //unlink($img_cfg['source_image']);
        }
    }   
                      
    return $jpegImage;    
}



public function crop_image(array $conf, $upload_data) {
   
            $default_config['width'] = 960;
            $default_config['height'] = 960;
            $default_config['maintain_ratio'] = FALSE;
            $default_config['create_thumb'] = FALSE;
            $default_config['thumb_marker'] = '';
            $default_config['overwrite'] = FALSE;
            $default_config['quality'] = 100;
     
            $config = array_merge($default_config, $conf);
            
            $img_cfg['image_library'] = 'gd2';
            $img_cfg['source_image'] = $upload_data['full_path'];
            $img_cfg['new_image'] = $config['target_path']; 
            $img_cfg['quality'] = $config['quality'];  
            $img_cfg['maintain_ratio'] = $config['maintain_ratio'];
            $img_cfg['create_thumb'] = $config['create_thumb']; 
            $img_cfg['thumb_marker'] = $config['thumb_marker'];
            $img_cfg['overwrite'] = $config['overwrite'];
            $img_cfg['width'] = $config['width'];    
            $img_cfg['height'] = $config['height'];
            $img_cfg['x_axis'] = $config['x_axis'];
            $img_cfg['y_axis'] = $config['y_axis'];
     
    $this->CI->image_lib->initialize($img_cfg); 
     
    if (!$this->CI->image_lib->crop()) {
                $error = $this->CI->image_lib->display_errors('', '');
                $response['status'] = 'ERR'; 
                $response['message'] = $error;
                echo json_encode($response);
                die(); 
    }
    return TRUE;  
}


    public function upload_canvas(array $config) {

          $data = $config['src_path'];
          $data = substr($data, strpos($data,",") +1);
          $data = base64_decode($data);
          $fileName = str_replace('.', '_', microtime(microtime(time()))).'.png';

          $file = $config['dist_path'].$fileName;
          $data = file_put_contents($file, $data);

          return $file;
    }

}