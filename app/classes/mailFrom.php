<?php

namespace App\Classes;

class mailFrom
{
      public function From($determinat)
      {
            if ($purpose = 'Study Abroad inquiries') {
                  $from = 'info@sarkcessconsults.org';
            } elseif ($purpose = 'Visa Assistance') {
                  $from = 'admission@sarkcessconsults.org';
            } elseif ($purpose = 'Application Submission') {
                  $from = 'apply@sarkcessconsults.org';
            } else {
                  $from = 'info@sarkcessconsults.org';
            }
            return $from;
      }
}