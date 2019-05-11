# fplgraph
Graphing weekly point positions

I went to my minileague and found the league ID
https://fantasy.premierleague.com/a/leagues/standings/167648/classic

From loading this page you can see there are 7 History XHRs. All of which have have their TeamIDs in them.

From finding the team IDs from this URL I went further into the API and found the gameweek history API.
https://fantasy.premierleague.com/drf/entry/TEAMID/history

The team IDs for players within my league were:

John: 2380724
Shano: 1602
Paddy: 109481
Kev: 216816
Adam: 190049
Dan: 30635
Steve: 2712318

So the graph would use 7 different references to graph the plot chart.

John: https://fantasy.premierleague.com/drf/entry/2380724/history

Shano: https://fantasy.premierleague.com/drf/entry/1602/history

Paddy: https://fantasy.premierleague.com/drf/entry/109481/history

Kev: https://fantasy.premierleague.com/drf/entry/216816/history

Adam: https://fantasy.premierleague.com/drf/entry/190049/history

Dan: https://fantasy.premierleague.com/drf/entry/30635/history

Steve: https://fantasy.premierleague.com/drf/entry/2712318/history

The part of the API which you wish to map is 
"history": 
"total_points":83
"event":1

From searching the History then taking the event, and the total points you should be able to map using the API.

If you make event the X axis, and total_points the Y axis then you will see someone be graphed using this as the data source.
