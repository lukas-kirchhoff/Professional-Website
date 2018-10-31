<?php
    $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
    $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="Emmen, NL")';
    $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=xml";

    $reader = new XMLReader();
    $tempLocation = 0;
    $tempText = '';
    $tempCode = '';
    $location = '';

    global $tempLocation;
    global $tempText;
    global $tempCode;
    global $location;

    if (!$reader->open($yql_query_url))
    {
        print "can't read link";
    }

    while ($reader->read())
    {
        if ($reader->nodeType == XMLReader::ELEMENT)
        {
            $name = $reader->name;
                if ($name == 'yweather:location')
            {
                $location = $reader->getAttribute('city');
            }
            if ($name == 'yweather:condition')
            {
                $tempText = $reader->getAttribute('text');
                $tempCode = $reader->getAttribute('code');
                $tempLocation = $reader->getAttribute('temp');
            }
        }

        if (in_array($reader->nodeType, array(XMLReader::TEXT, XMLReader::CDATA, XMLReader::WHITESPACE, XMLReader::SIGNIFICANT_WHITESPACE)) && $name != '')
        {
            $value = $reader->value;
        }
    }

$tempDegree = round(($tempLocation -32) / 1.8);
switch($tempCode) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 24: 
        $imgSrc = "../img/weather/png/windsock.png";
        break;
    case 5: 
    case 6: 
    case 7:
    case 8:
    case 9: 
    case 13:
    case 14:
    case 15:
    case 17:
    case 18:
    case 19: 
        $imgSrc = "../img/weather/png/snowing.png";
        break;
    case 10:
    case 11:
    case 12: 
    case 35:
    case 40:
        $imgSrc = "../img/weather/png/rain.png";
        break;
    case 19:
    case 20:
    case 21:
    case 22:
    case 23:
        $imgSrc = "../img/weather/png/haze.png";
        break;
    case 25: 
        $imgSrc = "../img/weather/png/thermometer.png";
        break;
    case 26:
    case 27:
    case 28:
    case 29:
    case 30:
        $imgSrc = "../img/weather/png/cloud.png";
        break;
    case 31:
        $imgSrc = "../img/weather/png/day.png";
        break;
    case 32:
    case 33:
    case 34:
        $imgSrc = "../img/weather/png/sun-1.png";
        break;
    case 36:
        $imgSrc = "../img/weather/png/thermometer-1.png";
        break;
    case 37:
    case 38:
    case 39:
        $imgSrc = "../img/weather/png/storm-1.png";
        break;
    case 16:
    case 41:
    case 42:
        $imgSrc = "../img/weather/png/snowing.png";
        break;
    default:
       echo "Error";
}

global $tempDegree;
?>
<div class="weather__wrapper">
    <h2>
        Das Wetter in
        <?php echo $location; ?>
    </h2>
    <div class="weather__image">
        <img src="<?php echo $imgSrc; ?>" alt="Das Wetter in Emmen" />
    </div>
    <div class="weather__text">
        <span class="weather-temperatur">
            <?php echo $tempDegree . "°C"; ?>
        </span>
        <p>Das Wetter heute in 
            <?php echo $location; ?> ist
            <?php echo $tempText; ?>
        </p>
    </div>
</div>
