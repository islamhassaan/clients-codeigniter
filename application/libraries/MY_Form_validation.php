<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    public function __construct() {
        parent::__construct();
    }

    public function arabic_only($str) {
        if (!preg_match('/^[\x{0600}-\x{06FF}\s]+$/u', $str)) {
            $this->set_message('arabic_only', 'The %s field must contain Arabic characters only.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    //     public function email_only($str) {
    //     if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $str)) {
    //         $this->set_message('email_only', 'The %s field must be an Email.');
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }
}


//     public function email_only($str) {
//         if (!preg_match('/^[\x{0600}-\x{06FF}\s]+$/u', $str)) {
//             $this->set_message('arabic_only', 'The %s field must contain Arabic characters only.');
//             return FALSE;
//         } else {
//             return TRUE;
//         }
//     }
// }
