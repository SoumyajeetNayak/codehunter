USE codehunter;
CREATE  TABLE discussion(
	id INT PRIMARY KEY AUTO_INCREMENT,
	user_id INT ,
	subject VARCHAR(50),
	comment TEXT NOT NULL,
	date DATETIME NOT NULL
)