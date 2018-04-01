<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email_notification {
    
    private $CI ;

    public $title   =   "Bigmee E-Commerce";
    
    public $from    =   "supplier@bigmee.com";
    
    public $subject =   "Unknown subject";
    
    public $to;
    
    public $message;

    public $attachment;

    public $header = "";

    public $footer = "";
    
    
    public function __construct(){
       $this->CI =& get_instance();
       $this->CI->load->library('email');
    }

     private function check_internet_connection(){
          $net_conn = @fsockopen('www.google.com', 80);
                    
          if(!$net_conn){  
                $response['status']  = "ERR";
                $response['message'] = "Sorry, you are offline can't send email";
                echo json_encode($response);
                die();
            }
            
    }
    
    public function sendMail() {
        $this->check_internet_connection();
            
        $config['useragent'] = "CodeIgniter";
        $config['mailpath']  = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']  = "smtp";
        $config['smtp_host'] = "localhost";
        $config['smtp_port'] = "25";
        $config['mailtype']  = 'html';
        $config['charset']   = 'utf-8';
        $config['newline']   = "\r\n";
        $config['wordwrap']  = TRUE;


         $this->CI->email->initialize($config);

        $this->CI->email->from($this->from, $this->title);
        $this->CI->email->to($this->to);
        $this->CI->email->cc('');
        $this->CI->email->bcc('');

        $this->CI->email->subject($this->subject);
        
        $header = $this->set_header();
        $footer = $this->set_footer();

        $this->CI->email->message($header.$this->message.$footer);
        
        // attached the files
        if($this->attachment){
            foreach ($this->attachment as $file) {
              $this->CI->email->attach($file);
            }
        }

        if (!$this->CI->email->send()) {
            return false;
        }
        $this->CI->email->clear(TRUE);
        return true;
   }

   private function set_header() {

    // set manual header and return
      if($this->header){
          return $this->header;
      }

      $header = '<div style="width: 95%;margin: auto;">
                            <div style="border: 1px solid rgb(51, 102, 204)">
                             <table style="width: 100%;border-collapse: collapse;" border="0" cellpadding="4" cellspacing="2">
                                <tbody>
                                    <tr style="background: rgb(51, 102, 204); padding: 10px 4px;color: #FFF;">
                                        <td style="width: 40%;padding: 10px 20px;">093 26 950 950</td>
                                        <td style="width: 60%;text-align: right;padding: 10px 20px;color: #FFF">info@bigmee.com</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;padding: 10px 20px;"><img style="width: 100px" src="'.base_url('dist/img/logo1.png').'"></td>
                                    </tr>
                                </tbody>
                           </table>
                          </div> 
                           <div style="width: 90%; margin: auto;padding: 40px 0px;">';

        return $header;                   


   }

   private function set_footer() {

    // set manual footer and return
      if($this->footer){
          return $this->footer;
      }

    $footer = '</div>
                           <div style="border: 1px solid rgb(51, 102, 204)">
                            <table style="width: 100%;border-collapse: collapse;" border="0" cellpadding="4" cellspacing="2">
                                <tbody>
                                    <tr>
                                        <td style="width: 80%;padding: 10px 38px;">Best Regards,<br>Bigmee,<br>Thank You.</td>
                                        <td style="width: 20%;text-align: right;padding: 10px 38px;"><img style="width: 100px" src="'.base_url('dist/img/logo1.png').'"></td>
                                    </tr>
                                </tbody>
                           </table>
                          </div>
                          </div>';
      return $footer;                    
   }
    
}