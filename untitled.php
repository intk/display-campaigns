<?php
include('../../../../dbconn.php');

function dateString($date) {
	switch (date('m', $date)) {
	case 01:
	$pubmonth = 'januari';
	break;
	case 2:
	$pubmonth = 'februari';
	break;
	case 3:
	$pubmonth = 'maart';
	break;
	case 4:
	$pubmonth = 'april';
	break;
	case 5:
	$pubmonth = 'mei';
	break;
	case 6:
	$pubmonth = 'juni';
	break;
	case 7:
	$pubmonth = 'juli';
	break;
	case 8:
	$pubmonth = 'augustus';
	break;
	case 9:
	$pubmonth = 'september';
	break;
	case 10:
	$pubmonth = 'oktober';
	break;
	case 11:
	$pubmonth = 'november';
	break;
	case 12:
	$pubmonth = 'december';
	break;
	}
	switch (date('w', $date)) {
	case 1:
	$pubday = 'maandag';
	break;
	case 2:
	$pubday = 'dinsdag';
	break;
	case 3:
	$pubday = 'woensdag';
	break;
	case 4:
	$pubday = 'donderdag';
	break;
	case 5:
	$pubday = 'vrijdag';
	break;
	case 6:
	$pubday = 'zaterdag';
	break;
	case 0:
	$pubday = 'zondag';
	break;
	}
	if (date('d', $date) < 10) {
	$pubdaydate = str_replace('0', '', date('d', $date));
	} else {
	$pubdaydate = date('d', $date);
	}
	return ucfirst($pubday).' '.$pubdaydate.' '.$pubmonth.' '.date('Y' ,$date);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<title>Nieuwsbrief klanten winkelcentrum Hasselo</title>
</head>

<body style="margin:0;background-color:#efefef;">
<table style="width:100%;background-color:#efefef;" border="0" cellpadding="0" cellspacing="0">
<tr><td>
<table style="border-collapse:collapse;" align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="margin:0;padding:0;display:flex;"><img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/header.jpg" alt="winkelcentrum Hasselo"></td>
</tr>

<tr style="margin:0;padding:0;">
<td style="background-color:#004e31;width:600px;height:auto;margin:0px 0 0 0;display:inline-block;position:relative;color:#fff;">
<table cellpadding="12" cellspacing="0"><tr><td width="459" valign="top">
<h1 style="letter-spacing:0.3px;padding:0;font-family:Verdana, Arial, sans-serif;font-size:18px;font-weight:400;">Scan & Win in winkelcentrum Hasselo!</h1>
</td><td valign="middle" align="right">
<span style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;font-size:14px;color:#89c0a5;">12 apr 2018</span>
</td></tr></table>
<table cellpadding="12"><tr><td valign="top">
	<span style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;display:block;width:100%;color:#e3f6ed;font-size:14px;line-height:1.6em;">Beste klant,<br /><br />
De actie 'Scan &amp; Win!' wordt herhaald. Je maakt kans op een van de ruim 23.000 prijzen en op een van de tien Hoofdprijzen!
</span>
</td></tr></table>
</td>
</tr>
<?php
	$i = 1;
	$r = 0;
	$query = mysqli_query($connect, "SELECT * FROM `cms_site_content` WHERE parent=69 AND deleted=0 ORDER BY publishedon");
	while($array = mysqli_fetch_assoc($query)) {
		$r++;
		//if ($array['published'] >= 0 && $array['publishedon'] > time() && $array['publishedon'] < strtotime('2018-09-31') )  {
			$i++;
			$title = explode(' - ', $array['pagetitle']);
			if (strpos($title[0], 't/m') !== false) {
				$date = $title[0];
			} else {
				$date = dateString($array['publishedon']);
			}
			/*if ($title[1] == 'Scan & Win') {
				$image = 'assets/images/evenementen/agenda/2018/scan-en-win2018-vert.jpg';
			} else {
				*/
				$image = $array['introtext'];
			//}

?>
<tr><td height="10"></td></tr>
<tr>
<td>
<?php
if ($i % 2 == 0) {
?>
<!--ITEMS LEFT-->
<table style="border-collapse:collapse;width:600px;background-color:#d6e7df;border:1px solid #91a19a;" border="0" cellpadding="0" cellspacing="0">
    <td valign="top" width="286">
        <table cellpadding="12" cellspacing="0">
            <tr>
                <td>
                    <img width="284" style="display:block;" src="https://www.winkelcentrumhasselo.nl/<?php echo $image; ?>" alt="<?php echo $title[1]; ?>" /></td>
            </tr>
        </table>
    </td>
    <td valign="top" style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.6em;font-size:12px;color:#333;width:276px;">
        <table cellpadding="10">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <h2 style="margin:0 0 3px 0;padding:0;font-size:20px;font-weight:700;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.2em;"><?php echo $title[1]; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="display:block;color:#004e31;font-weight:700;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;font-size:14px;"><?php echo $date; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/stroke.jpg" alt="stroke" width="100%" /></td>
                        </tr>
                        <tr>
                            <td>
                                <span style="font-size:14px;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.6em;">
<?php echo filter_var($array['content'], FILTER_SANITIZE_STRING); ?>
</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
	
	<tr><td>sdfsd</td></tr>
</table>
<?php
} else {
?>
<!--ITEMS RIGHT-->
<table style="border-collapse:collapse;width:600px;background-color:#d6e7df;border:1px solid #91a19a;" border="0" cellpadding="0" cellspacing="0">
<td valign="top" style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.6em;font-size:12px;color:#333;width:276px;">
<table cellpadding="10"><tr><td>
<table><tr><td>
<h2 style="margin:0 0 3px 0;padding:0;font-size:20px;font-weight:700;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.2em;"><?php echo $title[1]; ?></h2>
</td></tr>
<tr><td>
<span style="display:block;color:#004e31;font-weight:700;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;font-size:14px;"><?php echo $date; ?></span>
</td></tr>
<tr><td><img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/stroke.jpg" alt="stroke" width="100%" /></td></tr>
<tr><td>
<span style="font-size:14px;letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.6em;">
<?php echo filter_var($array['content'], FILTER_SANITIZE_STRING); ?>
</span>
</td></tr></table>
</td></tr></table>
</td>
<td valign="top" width="286" align="right"><table cellpadding="12" cellspacing="0"><tr><td>
<img width="284" style="display:block;" src="<?php echo 'https://www.winkelcentrumhasselo.nl/'.$image; ?>" alt="<?php echo $title[1]; ?>"/></td></tr></table>
</td>
</table>
<?php
}
?>
</td>
</tr>
<?php
	
		}
//}
?>
<tr><td height="10"></td></tr>
<tr>
<td style="display:block;;background-color:#004e31;width:600px;height:auto;color:#fff;">
<table><tr><td width="18"></td><td valign="middle" width="332">
<img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/hasselo-logo.jpg" width="190" alt="winkelcentrum Hasselo" />
</td><td align="left">
<p style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;line-height:1.6em;font-size:12px;color:#fff;"><b>Winkelcentrum Hasselo</b><br />Willem van Otterloostraat, Hengelo<br /><br />
volg ons op:
					<a href="https://www.facebook.com/wchasselo" target="_blank">
<img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/nwb_icon-fb.png" alt="" title="Facebook"></a>&nbsp;
					<a href="https://www.twitter.com/wchasselo" target="_blank">
<img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/nwb_icon-tw.png" alt="" title="Twitter"></a>&nbsp;
					<a href="https://www.youtube.com/wchasselo" target="_blank">
<img src="https://www.winkelcentrumhasselo.nl/images/nieuwsbrief/nwb_icon-yt.png" alt="" title="YouTube"></a>
</p>
</td></tr></table>
</td>
</tr>
<tr>
<td style="display:block;background-color:transparent;width:600px;height:auto;color:#fff;">
<span style="letter-spacing:0.3px;font-family:Verdana, Arial, sans-serif;padding:5px 0 5px 0;font-size:10px;color:#555;float:right;">
	<a style="color:#555;" href="https://www.winkelcentrumhasselo.nl/nieuwsbrief/?unsubscribe=[CLIENTID]" target="_blank" title="Afmelden voor de nieuwsbrief">Meld je af</a> voor onze nieuwsbrief
</span>
</td>
</tr>
</table>
</td></tr></table>
</body>
</html>