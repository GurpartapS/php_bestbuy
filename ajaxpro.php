#----------------------------------------------------
# from: http://docs.jquery.com/UI/Autocomplete
# the local data can be a simple array of strings,
# or it contains objects for each item in the array,
# with either a 'label' or 'value' property, or both.
#----------------------------------------------------
$ak = array('label' => 'Alaska');
$al = array('label' => 'Alabama');
$ar = array('label' => 'Arkansas');

$json[0] = $ak;
$json[1] = $al;
$json[2] = $ar;

# echo the json data back to the html web page
echo json_encode($json);
