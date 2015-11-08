For this project I created a web application to test the differences in storing information in a SQL or MongoDB databases. The web application is programmed using the PHP Framework Laravel 5 and connects to 2 locally stored databases: MySQL and MongoDB. The application functionality is as follows:

1.	Allows you to input a strategy for playing blackjack. Using the values of the sum of the 2 cards you’re dealt, and the value of the dealers visible card you’re allowed to set which strategy you want to follow. Submitting a strategy will insert each selection into it’s own entity in either database with candidate key equal to  {session_token, dealer_value, player_value} 
![alt tag](https://raw.github.com/guezandy/oodbBlackJack/master/inputstrategy.png)

2.	Select how many decks you want to run the simulation for the more decks the more hands played and the more accurate we can define the strategy.  
	

3.	Run the analysis: This will take all the cards in your DB shuffle them, and start dealing hands until the cards run out. Each hand will be paired with it’s appropriate defined strategy and tally all the results for each hand. After all the runs are complete all the results including win/loss and runtime analysis are displayed. For an SQL run:  
![alt tag](https://raw.github.com/guezandy/oodbBlackJack/master/results.png)

SQL Data Model:
![alt tag](https://raw.github.com/guezandy/oodbBlackJack/master/sqldata.png)

