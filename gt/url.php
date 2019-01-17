<?



//https://trends.google.com/trends/api/widgetdata/multiline/csv?req=%7B%22time%22%3A%222018-04-03T07%5C%5C%3A03%5C%5C%3A06%202018-04-03T08%5C%5C%3A03%5C%5C%3A06%22%2C%22resolution%22%3A%22MINUTE%22%2C%22locale%22%3A%22en-US%22%2C%22comparisonItem%22%3A%5B%7B%22geo%22%3A%7B%7D%2C%22complexKeywordsRestriction%22%3A%7B%22keyword%22%3A%5B%7B%22type%22%3A%22BROAD%22%2C%22value%22%3A%22xrb%22%7D%5D%7D%7D%2C%7B%22geo%22%3A%7B%7D%2C%22complexKeywordsRestriction%22%3A%7B%22keyword%22%3A%5B%7B%22type%22%3A%22BROAD%22%2C%22value%22%3A%22ethereum%22%7D%5D%7D%7D%2C%7B%22geo%22%3A%7B%7D%2C%22complexKeywordsRestriction%22%3A%7B%22keyword%22%3A%5B%7B%22type%22%3A%22BROAD%22%2C%22value%22%3A%22litecoin%22%7D%5D%7D%7D%2C%7B%22geo%22%3A%7B%7D%2C%22complexKeywordsRestriction%22%3A%7B%22keyword%22%3A%5B%7B%22type%22%3A%22BROAD%22%2C%22value%22%3A%22cardano%22%7D%5D%7D%7D%2C%7B%22geo%22%3A%7B%7D%2C%22complexKeywordsRestriction%22%3A%7B%22keyword%22%3A%5B%7B%22type%22%3A%22BROAD%22%2C%22value%22%3A%22vechain%22%7D%5D%7D%7D%5D%2C%22requestOptions%22%3A%7B%22property%22%3A%22%22%2C%22backend%22%3A%22CM%22%2C%22category%22%3A0%7D%7D&token=APP6_UEAAAAAWsSGurT5DhzTVREKSbkOxVTmxvKxRewf&tz=420

        $start = "http://www.google.com/trends/fetchComponent?hl=en-US&q=";
        $geo = "&geo=US";
        $end = "&cid=TIMESERIES_GRAPH_0&export=5&w=500&h=300";
       $sPeriod = "&date=now 1-H";
        $query="XRB";
		/*
		if ($period == (1 / 24))
        {
            $sPeriod = "&date=now 1-H";
        }
        else if ($period == (4 / 24))
        {
            $sPeriod = "&date=now 4-H";
        }
        else if ($period == 1)
        {
            $sPeriod = "&date=now 1-d";
        }
        else if (period == 7)
        {
            sPeriod = "&date=now 7-d";
        }
        else {
            Console.WriteLine("URL.Build Error: period is not equal to presets");
        }
		*/


        $url = $start.$query.$geo.$sPeriod.$end;
        echo $url;


?>