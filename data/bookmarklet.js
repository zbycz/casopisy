javascript:var s=$('#frmeditForm-poznamka').val();

rok=s.match(/(\d\d\d\d)_(\d\d).ro/i);
m=s.match(/skauting_?(\d+)(.*)/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(rok[2]));
$('#frmeditForm-rok').val(parseInt(rok[1]));
$('#frmeditForm-cislo').val(parseInt(m[1]));

arr = {1:9, 2:10,3:11,4:12, 5:1, 6:2, 7:3, 8:4, 9:5, 10:6};

$('#frmeditForm-mesic').val(arr[parseInt(m[1])]);

void(0);



javascript:var s=$('#frmeditForm-poznamka').val();

m=s.match(/skauting_(\d+)_(\d+)/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[1]));
$('#frmeditForm-rok').val(1999);
$('#frmeditForm-cislo').val(parseInt(m[2]));

arr = {1:9, 2:10,3:11,4:12, 5:1, 6:2, 7:3, 8:4, 9:5, 10:6};

$('#frmeditForm-mesic').val(arr[parseInt(m[2])]);

void(0);



///2009-10,r.52/SJ_5_2010_06cerven_web.pdf

javascript:var s=$('#frmeditForm-poznamka').val();

m=s.match(/[^a-z]r[^0-9]*(\d+)[^_]+_(\d+)_(\d+)_(\d+)/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[1]));
$('#frmeditForm-rok').val(parseInt(m[3]));
$('#frmeditForm-cislo').val(parseInt(m[2]));
$('#frmeditForm-mesic').val(parseInt(m[4]));

void(0);


///r52/skaut_2009_prosinec_final_nahled_150.pdf
///2009-10,r.52/SJ_5_2010_06cerven_web.pdf

javascript:var s=$('#frmeditForm-poznamka').val();
m=s.match(/r[^0-9]*(\d+)[^_]+_(\d+)/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[1]));
$('#frmeditForm-rok').val(parseInt(m[2]));

void(0);




///1999_r.42/skaut_10_2000.pdf
javascript:var s=$('#frmeditForm-poznamka').val();
m=s.match(/[^a-z]r[^0-9]*(\d+)[^_]+_(\d+)_(\d+)/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[1]));
$('#frmeditForm-rok').val(parseInt(m[3]));
$('#frmeditForm-cislo').val(parseInt(m[2]));

arr = {1:9, 2:10,3:11,4:12, 5:1, 6:2, 7:3, 8:4, 9:5, 10:6};

$('#frmeditForm-mesic').val(arr[parseInt(m[2])]);

void(0);



///Roversky_kmen_4_16_10_00_Seminka.pdf
javascript:var s=$('#frmeditForm-poznamka').val();

m=s.match(/[^0-9]+(\d+)_(\d+)_(\d+)_(\d+)(_seminka)?/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[1]));
$('#frmeditForm-cislo').val(parseInt(m[2]));
$('#frmeditForm-mesic').val(parseInt(m[3]));
$('#frmeditForm-rok').val(parseInt("20" + m[4]));
if(m[5]) $('#frmeditForm-priloha').prop('checked',1);

void(0);


///Roversky_kmen_00_01_rocnik_04/Roversky_kmen_00_01_rocnik_04_19.pdf
javascript:var s=$('#frmeditForm-poznamka').val();

m=s.match(/.+\/.+_(\d+)_(\d+)_rocnik_(\d+)_(\d+)(_seminka)?/i);

$('#frmeditForm-verejne').prop('checked',1);
$('#frmeditForm-rocnik').val(parseInt(m[3]));
$('#frmeditForm-cislo').val(parseInt(m[4]));
$('#frmeditForm-rok').val(parseInt("20" + m[1]));
if(m[5]) $('#frmeditForm-priloha').prop('checked',1);

void(0);



//knihovna??
javascript:var s=$('#frmeditForm-poznamka').val();            if(m=s.match(/\/([^\/]+)/i))  $('#frmeditForm-rocnik').val(m[1]);   $('#frmeditForm-nazev').focus();   $('#frmeditForm-verejne-1').click()

