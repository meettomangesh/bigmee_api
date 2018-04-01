<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$SBI = array('acct_id'      => 1,
             'acct_no'      => "34319431683",
             'pay_point'    => "STAT BANK OF INDIA",
             'acct_branch'  => "SAVEDI",
             'acct_ifccode' => "SBIN0007689",
             'acct_name'    => "OM ENTERPRISES",
             'pay_method'   => "Transfer,Card Transfer, Cheque,IMPS,RTGS,NEFT"     
            );


$KOTAK = array('acct_id'      => 2,
               'acct_no'      => "6311527663",
               'pay_point'    => "KOTAK MAHINDRA BANK",
               'acct_branch'  => "SAVEDI,AHMEDNAGAR",
               'acct_ifccode' => "KKBK0000695",
               'acct_name'    => "OM ENTERPRISES",
               'pay_method'   => "Cash,Transfer, Cheque,IMPS,RTGS,NEFT"     
              );

$IDBI = array('acct_id'      => 3,
              'acct_no'      => "0493102000005890",
              'pay_point'    => "IDBI BANK",
              'acct_branch'  => "AHMEDNAGAR",
              'acct_ifccode' => "IBKL0000493",
              'acct_name'    => "OM ENTERPRISES",
              'pay_method'   => "Cash,Transfer, Cheque,IMPS,RTGS,NEFT"     
             );
              
$AXIS = array('acct_id'      => 4,
              'acct_no'      => "913020051074350",
              'pay_point'    => "AXIS BANK",
              'acct_branch'  => "MIDC AHMEDNAGAR",
              'acct_ifccode' => "UTIB0000215",
              'acct_name'    => "OM ENTERPRISES",
              'pay_method'   => "Transfer, Cheque,IMPS,RTGS,NEFT"     
             );
 
$ICICI = array('acct_id'      => 5,
               'acct_no'      => "351605000115",
               'pay_point'    => "ICICI BANK",
               'acct_branch'  => "AHMEDNAGAR",
               'acct_ifccode' => "ICIC0003516",
               'acct_name'    => "OMBIZ TECHNO SERVICES Pvt.Ltd",
               'pay_method'   => "Cash,Transfer, Cheque,IMPS,RTGS,NEFT"     
              ); 
             
$config[0] = $SBI;
$config[1] = $KOTAK;  
$config[2] = $IDBI;
$config[3] = $AXIS;  
$config[4] = $ICICI;                 