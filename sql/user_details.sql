USE codehunter;
CREATE TABLE user_details(
	id INT PRIMARY KEY AUTO_INCREMENT ,
	title VARCHAR(10),
	name VARCHAR(50),
	age INT ,
	dob DATE,
	occupation VARCHAR(20),
	phone VARCHAR(12),
	email VARCHAR(50)
)