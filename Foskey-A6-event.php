<!DOCTYPE html>
<html>
<head>
	<!--	Author: Dale Foskey
			Date:   02/22/21
			File:	Foskey-A6-event.php
			Purpose: Chapter 5 Exercise
			
			Algorithm for event.php
				Receive numTickets from event.html
				cost = numtickets * 35
				Read ticket-count.txt 
				get ticketNum 
				Display firstName,cost,numTickets
				close
				ticketNum = ticketNum + numtickets
				Open ticket-count.txt to write
				write ticketNum1
				Display ticketNum1
				close
			END
	-->
	<title>Performance</title>
	<link rel ="stylesheet" type="text/css" href="Foskey-A6-event.css">
</head>

<body>
    <!-- Image here -->
    <img src="buy-tickets-now.png" alt="buy tickets now logo">;
    
	<?php
		// receive the number of tickets from the html file
		$numTickets = $_POST['numTickets'];
		$firstName = $_POST['firstName'];
		// calculate the cost of the performance
		$cost = $numTickets * 35;
		
		// print the results 
		print("<h2>$firstName your total cost is $$cost for $numTickets tickets.</h2>");
		
		// Add your code here to update the file ticket-count.txt

		// open file to read
		$ticketNum = fopen("ticket-count.txt", "r");
		// create a variable equal to our ticketNum
		$ticketNum1 = fgets($ticketNum);
		// // close the file
		fclose($ticketNum);
		// calculate the new ticket number total
		$ticketNum1 = $ticketNum1 + $numTickets;
		// // // open file to write
		$ticketFilePointer = fopen("ticket-count.txt","w");
		// // // write the new ticket number to file
		fputs($ticketFilePointer,"$ticketNum1");
		// // // close file again
		fclose ($ticketFilePointer);	
		// print the total number sold today, which displays the content of 
		// ticket-count.txt file after updating
		print("<p>To date we have sold a total of $ticketNum1 tickets.</h2></p>");
	?>
	 <!-- Have a link back to the hmtl file -->
	<a href="Foskey-A6-event.html"> Return to Form</a>
</body>
</html>
 