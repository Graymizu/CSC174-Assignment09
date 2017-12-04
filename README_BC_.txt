Still planning: (working on) 
delete and update functions should let the user know if there wasn't anything to be deleted. (ex. sorry id# doesn't exist) 
updating- survey should autofill with original answers

  
  
  For this Project, more of the PHP and MySQL code is already implemented since we are using another project. 
  Need to make sure that the new info is properly connected to the database (Anthony's Read Me). --added database into bluehost and made 	sure SQL queries were linked correctly.
  As Anthony wanted fo the delete.html and update.html tables to not be as clutered and only wanted some of the data on (mostly names to 	remember which one you need to go in and edit)
  The main table to host all the surveys will have all the information layed-out so that admin can see everything. 
  Email; you have to have a @ symbol in order for it to go through 
  Update/Delete -- what if the user wants to just takeout one part (will consider this as update; replacing a part) (delete would be to 	wipe the entire file) 
  Took out radio buttons for some of the protective script since its unneeded 
  For the Name, to make it more specific to the database I reorganized everything to be First Name and Last Name --the database will 		record these are two seperate things. --in my mind it would be easier to understand and look for. 
  Database- change the formatting from the last group. I organized them by cats. Every cat has 3 questions and all the types of 		questions have the same number. 
  	Made this decision because it makes it much more admin friendly to edit and quickly see which questions they need to update. 
	And also added all the new checkboxes and different cat breeds onto the database to match the html and other documents. 
  Created the "user" database based off the login code that was already uploaded. 

  
  
  How to access the database. 
  	--I used bluehost so 
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";
	
Table Fields: 
id is the primary int(11)
fname/lname/email are all varchar(75)
_____1 are all varchar(75); this is the radio button 
_____2(a,b,c,d,e,f) are also varchar(75); these are the checkbox buttons 
_____3 are all text(125); this is for the short text box the user can type in; took 125 from average twitter box. 



    
