<?php


function userInfox($id)
{
    $info = [
        1 =>[
            'Ricahard Obiri ',
            'aframson@gmail.com ',
            'Accra-Ghana ',
            '+2330245678974 '
        ],
        2 =>[
            'Derrick Nettey ',
            'dee@gmail.com ',
            'USA-Califinia ',
            '+1120245678974 '
        ]
    ];

    return implode($info[$id]);
}


function Engine($id,$call)
{
       $results = [
           'showInfo'=>userInfox($id)
       ];

       if (is_callable($call)) {
          call_user_func($call,$results);
        
       }
}


Engine(1,function($call){
   echo  $call['showInfo'];
});










