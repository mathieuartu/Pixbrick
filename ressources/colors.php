<?php 

//---Define Lego Colors
$legoColorArray = array(
	"1, 1, 1",
	"222, 0, 13",
	"231, 99, 24",
	"244, 155, 0",
	"156, 146, 145",
	"254, 196, 0",
	"245, 193, 137",
	"255, 255, 255",
	"0, 87, 168",
	"135, 192, 234",
	"0, 150, 36",
	"128, 8, 27",
	"44, 21, 119",
	"76, 81, 86",
	"0, 123, 40",
	"149, 185, 11",
	"228, 228, 218",
	"91, 28, 12",
	"48, 15, 16",
	"141, 116, 82",
    "168, 61, 21",
    "94, 116, 140",
    "95, 130, 101",
    "238, 157, 195",
    "222, 55, 139",
    "156, 0, 107",
    "233, 140, 53"
);

$legoPalette = (object) array(
	'1, 1, 1'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 1 , 1 , 1 ),
		'id' => '26',
		'name' => 'Black'
	),
    '233, 140, 53'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 233, 140, 53 ),
        'id' => '18',
        'name' => 'Dark-Flesh'
    ),
    '238, 157, 195'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 238, 157, 195 ),
        'id' => '222',
        'name' => 'Pink'
    ),
    '156, 0, 107'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 156, 0, 107 ),
        'id' => '124',
        'name' => 'Purple'
    ),
    '222, 55, 139'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 222, 55, 139 ),
        'id' => '221',
        'name' => 'Dark-Pink'
    ),
    '95, 130, 101'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 95, 130, 101 ),
        'id' => '151',
        'name' => 'Sand-Green'
    ),
    '94, 116, 140'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 94, 116, 140 ),
        'id' => '135',
        'name' => 'Sand-Blue'
    ),
    '168, 61, 21'=> (object) array(
        'rgb' => imagecolorallocate ($finalImg , 168, 61, 21 ),
        'id' => '38',
        'name' => 'Reddish-Brown'
    ),
	'141, 116, 82'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 141, 116, 82 ),
		'id' => '138',
		'name' => 'Dark-Tan'
	),
	'91, 28, 12'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 91, 28, 12 ),
		'id' => '192',
		'name' => 'Brown'
	),
	'48, 15, 16'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 48, 15, 16 ),
		'id' => '308',
		'name' => 'Dark-Brown'
	),
	'128, 8, 27'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 128, 8, 27 ),
		'id' => '154',
		'name' => 'Dark-Red'
	),
	'228, 228, 218'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 228, 228, 218 ),
		'id' => '208',
		'name' => 'Light-Grey'
	),
	'149, 185, 11'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 149, 185, 11 ),
		'id' => '119',
		'name' => 'Lime'
	),
	'0, 150, 36'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 0, 150, 36 ),
		'id' => '37',
		'name' => 'Green'
	),
	'0, 123, 40'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 0, 123, 40 ),
		'id' => '28',
		'name' => 'Dark-Green'
	),
	'44, 21, 119'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 44, 21, 119 ),
		'id' => '268',
		'name' => 'Dark-Blue'
	),
	'135, 192, 234'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 135, 192, 234 ),
		'id' => '212',
		'name' => 'Medium-Blue'
	),
	'0, 87, 168'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 0 , 87 , 168 ),
		'id' => '23',
		'name' => 'Blue'
	),
	'76, 81, 86'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 76, 81, 86 ),
		'id' => '199',
		'name' => 'Dark-Grey'
	),
	'255, 255, 255'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 255 , 255 , 255 ),
		'id' => '01',
		'name' => 'White'
	),
	'245, 193, 137'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 245 , 193 , 137 ),
		'id' => '21',
		'name' => 'Tan'
	),
	'222, 0, 13'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 222 , 0 , 13 ),
		'id' => '21',
		'name' => 'Red'
	),
	'231, 99, 24'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 231 , 99 , 24 ),
		'id' => '106',
		'name' => 'Dark-Orange'
	),
	'244, 155, 0'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 244 , 155 , 0 ),
		'id' => '191',
		'name' => 'Orange'
	),
	'254, 196, 0'=> (object) array(
		'rgb' => imagecolorallocate ($finalImg , 254 , 196 , 0 ),
		'id' => '24',
		'name' => 'Yellow'
	)
);

?>